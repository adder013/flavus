<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App;
use App\Categories;
use App\CustomFields;
use App\Product;
use App\ProductFiles;
use App\additionalOptions;
use App\Options;
use App\OptionValues;
use App\sku;
use App\Tags;
use App\ProductGroupsBlocks;
use App\GroupsBlocks;
use App\CategoryGroupsBlocks;
use App\Groups;
use App\CalcGroups;
use App\CalcOptions;
use App\Filters;
use App\SortProduct;
use Illuminate\Support\Facades\DB;

class DashboardProductsController extends DashboardController
{
    public function showProducts()
    {
        return view('dashboard.products');
    }

    public function getProducts(Request $request)
    {
        $id = $request->input('id');
        if (empty($id)) {
            $categories = $this->getLoopAllCategoriesDashboard();
            $allCatDescription = CustomFields::where('name', '=', 'categoriesDesc')->first();
            return response()->json([
                'success' => true,
                'categories' => $categories,
                'allCatDescription' => $allCatDescription->content,
            ]);
        } else {
            $categories = $this->getLoopCategoriesDashboard($id, true);
            return response()->json([
                'success' => true,
                'categories' => $categories,
            ]);
        }
    }

    public function getCategory(Request $request)
    {
        $categoryId = $request->input('id');
        $category = Categories::where('id', '=', $categoryId)->first();
        if (empty($category->parent_id)) {
            $path[$categoryId]['name'] = $category->name;
            $path[$categoryId]['url'] = '/dashboard/category/'.$category->url;
        } else {
            $path = $this->getLoopParents($category, true);
        }
        return response()->json([
            'success' => true,
            'category' => $category,
            'path' => $path,
        ]);
    }

    public function changeSortCategories(Request $request) : void
    {
        foreach ($request->categories as $key => $category) {
            if ($request->level == 0) {
                $sort = Categories::where('id', '=', $category['id'])->first();
                $sort->sort_position = $key + 1;
                $sort->save();
            }
            if (!empty($category['child'])) {
                foreach ($category['child'] as $subKey => $subCategory) {
                    $subSort = Categories::where('id', '=', $subCategory['id'])->first();
                    $subSort->sort_position = $subKey + 1;
                    $subSort->save();
                    if (!empty($subCategory['child'])) {
                        foreach ($subCategory['child'] as $subSubKey => $subSubCategory) {
                            $subSubSort = Categories::where('id', '=', $subSubCategory['id'])->first();
                            $subSubSort->sort_position = $subSubKey + 1;
                            $subSubSort->save();
                        }
                    }
                }
            }
        }
    }

    public function addCategory(Request $request)
    {
        $url = $this->clean($request->url);
        if (isset($request->parent_id)) {
            $categoryExists = Categories::where('url', '=', $url)->where('parent_id', '=', $request->parent_id)->first();
            if (empty($categoryExists)) {
                $newCat = new Categories();
                $newCat->depth = $request->depth + 1;
                $newCat->parent_id = $request->parent_id;
                $newCat->name = $this->cleanws($request->name);
                $newCat->url = $request->url;
                $checkPosition = Categories::where('id', '=', $request->parent_id)->count();
                $newCat->sort_position = $checkPosition + 1;
                $newCat->save();
                return response()->json([
                    'success' => true,
                    'message' => 'Категория "'.$request->name.'" успешно добавлена!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Категория с таким Url уже существует'
                ]);
            }
        } else {
            $categoryExists = Categories::where('url', '=', $request->url)->first();
            if (empty($categoryExists)) {
                $newCat = new Categories();
                $newCat->depth = 1;
                $newCat->name = $this->cleanws($request->name);
                $newCat->url = $url;
                $checkPosition = Categories::where('depth', '=', 1)->count();
                $newCat->sort_position = $checkPosition + 1;
                $newCat->save();
                return response()->json([
                    'success' => true,
                    'message' => 'Категория "'.$request->name.'" успешно добавлена!'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Категория с таким Url уже существует'
                ]);
            }
        }
    }

    public function updateCategoriesDescription(Request $request)
    {
        try {
            $allCatDescription = CustomFields::where('name', '=', 'categoriesDesc')->first();
            $allCatDescription->content = $request->content;
            $allCatDescription->save();
            return response()->json([
                'success' => true,
                'message' => 'Описание успешно обновлено'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Произошла непредвиденная ошибка'
            ]);
        }
    }

    public function showCategory($url)
    {
        $category = $this->detectCategory($url);
        if (!$category) {
            return redirect('dashboard/products');
        }
        return view('dashboard.category', compact(['category']));
    }

    public function updateCategoryImage(Request $request)
    {
        $category = Categories::find($request->id);
        $category->image = $request->path;
        $category->update();
        return response()->json([
            'success' => true,
            'message' => 'Изображение обновлено',
        ]);
    }

    public function deleteCategory(Request $request)
    {
        $idsString = $this->getSubCategoriesId($request->id);
        $categoriesId = explode(', ', $idsString);
        foreach ($categoriesId as $categoryId) {
            $products = Product::where('category_id', '=', $categoryId)->get();
            foreach ($products as $product) {
                additionalOptions::where('product_id', '=', $product->id)->delete();
                sku::where('product_id', '=', $product->id)->delete();
                Tags::where('product_id', '=', $product->id)->delete();
                ProductGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                GroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                CategoryGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                ProductFiles::where('product_id', '=', $product->id)->delete();
                $calcGroups = CalcGroups::where('product_id', '=', $product->id)->get();
                if ($calcGroups) {
                    $calcDel = array();
                    foreach ($calcGroups as $group) {
                        $calcDel[] = $group->id;
                    }
                    CalcGroups::where('product_id', '=', $product->id)->delete();
                    CalcOptions::whereIn('calc_group_id', $calcDel)->delete();
                }
                Groups::where('product_id', '=', $product->id)->delete();
            }
            Product::where('category_id', '=', $categoryId)->delete();
        }
        Filters::whereIn('id', $categoriesId)->delete();
        SortProduct::whereIn('id', $categoriesId)->delete();
        Categories::whereIn('id', $categoriesId)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Категория удалена!',
        ]);
    }

    public function updateCategory(Request $request)
    {
        $category = Categories::find($request->category['id']);
        $url = $this->clean($request->category['url']);
        $sameCheck = Categories::where('url', '=', $url)->where('parent_id', '=', $request->category['parent_id'])->where('id', '!=', $request->category['id'])->first();
        if (!empty($sameCheck)) {
            return response()->json([
                'success' => false,
                'message' => 'Такой товар уже существует'
            ]);
        }
        $path = str_replace($category->url, $url, $request->redirect);
        if ($category->url == $url) {
            $redirect = false;
        } else {
            $redirect = true;
        }
        $category->active = $request->category['active'];
        $category->show_content = $request->category['show_content'];
        $category->show_menu = $request->category['show_menu'];
        $category->name = !empty($request->category['name']) ? $this->cleanws($request->category['name']) : $category->name;
        $category->url = !empty($url) ? $url : $category->url;
        $category->body = $request->category['body'];
        $category->meta_title = $request->category['meta_title'];
        $category->moreinfo = $request->category['moreinfo'];
        $category->meta_description = $request->category['meta_description'];
        $category->filter = $request->category['filter'];
        $category->update();
        return response()->json([
            'success' => true,
            'redirect' => $redirect,
            'path' => $path,
            'message' => 'Изменения обновлены'
        ]);
    }

    public function getFiltersForCategory(Request $request)
    {
        $categoryId = $request->input('id');
        $idsString = $this->getSubCategoriesId($categoryId);
        $categoriesId = explode(', ', $idsString);
        $productsId = DB::table('category_product')
                        ->select('product_id')
                        ->whereIn('category_id', $categoriesId)
                        ->pluck('product_id')
                        ->unique();
        // $productsId = Product::whereIn('category_id', $categoriesId)->pluck('id')->all();
        $additionalOptionsId = additionalOptions::whereIn('product_id', $productsId)->distinct()->pluck('option_value_id')->all();
        $optionsId = OptionValues::whereIn('id', $additionalOptionsId)->distinct()->pluck('option_id')->all();
        $preOptions = Options::whereIn('id', $optionsId)->where('type', '!=', 3)->get();
        $options = array();
        foreach ($preOptions as $key => $value) {
            $check = Filters::where('category_id', '=', $categoryId)->where('option_id', '=', $value->id)->first();
            if (!empty($check)) {
                $options[$key]['id'] = $value->id;
                $options[$key]['name'] = $value->name;
                $options[$key]['status'] = 1;
                $options[$key]['sort_position'] = $check->sort_position;
            } else {
                $options[$key]['id'] = $value->id;
                $options[$key]['name'] = $value->name;
                $options[$key]['status'] = 0;
                $options[$key]['sort_position'] = 0;
            }
        }
        $options = collect($options);
        $toArray = $options->sortBy('sort_position');
        $options = null;
        foreach ($toArray as $option) {
            $options[] = $option;
        }
        return response()->json([
            'success' => true,
            'options' => $options,
        ]);
    }

    public function changeFilterOption(Request $request)
    {
        if ($request->option_status == true || $request->option_status == 1) {
            Filters::where('category_id', '=', $request->category_id)->where('option_id', '=', $request->option_id)->delete();
        } else {
            $filter = new Filters();
            $filter->category_id = $request->category_id;
            $filter->option_id = $request->option_id;
            $checkPosition = Filters::where('category_id', '=', $request->category_id)->count();
            $filter->sort_position = $checkPosition + 1;
            $filter->save();
        }
        return response()->json([
            'success' => true,
        ]);
    }

    public function changeSortFilterOptions(Request $request)
    {
        $options = $request->filters;
        foreach ($options as $key => $option) {
            $searchFilter = Filters::where('category_id', '=', $request->category_id)->where('option_id', '=', $option['id'])->first();
            if ($searchFilter) {
                $searchFilter->sort_position = $key + 1;
                $searchFilter->save();
            }
        }
    }

    public function changeCategoryFilter(Request $request)
    {
        $category = Categories::where('id', '=', $request->category_id)->first();
        $category->filter_instock = intval($request->filter_instock);
        $category->filter_price = intval($request->filter_price);
        $category->save();
        return response()->json([
            'success' => true,
        ]);
    }
}
