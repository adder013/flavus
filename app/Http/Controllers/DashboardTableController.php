<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App;
use DB;
use App\Categories;
use App\Product;
use App\additionalOptions;
use App\sku;
use App\Tags;
use App\Tabs;
use App\ProductGroupsBlocks;
use App\GroupsBlocks;
use App\CategoryGroupsBlocks;
use App\ProductFiles;
use App\CalcGroups;
use App\CalcOptions;
use App\Groups;
use App\SpecialsProductConnections;
use App\StickersConnection;
use App\SortProduct;
use App\SortBrandProduct;

class DashboardTableController extends DashboardController
{
    public function getTableData(Request $request)
    {
        $categoryId = $request->input('category');
        $brandId = $request->input('brand');
        if (!$categoryId && !$brandId) {
            $data['total'] = Product::all()->count();
            $data['currentPage'] = 1;
            if (\Session::get('perPage') != null) {
                $data['perPage'] = \Session::get('perPage');
            } else {
                $data['perPage'] = 10;
            }
            return json_encode($data);
        } elseif ($categoryId && !$brandId) {
            $idsString = $this->getSubCategoriesId($categoryId);
            $categoriesId = explode(', ', $idsString);
            $data['total'] = DB::table('category_product')
                            ->select('product_id')
                            ->whereIn('category_id', $categoriesId)
                            ->pluck('product_id')
                            ->unique()
                            ->count();
            return json_encode($data);
        } else {
            $data['total'] = Product::where('brand_id', '=', $brandId)->count();
            return json_encode($data);
        }
    }

    public function getData(Request $request)
    {
        $categoryId = $request->input('category');
        $brandId = $request->input('brand');
        if (!$categoryId && !$brandId) {
            $currentPage = $request->input('currentPage');
            $perPage = $request->input('perPage');
            if (intval($perPage) > 200) {
                $products = Product::orderBy('id', 'desc')->with('sku')->get();
            } else {
                Paginator::currentPageResolver(function () use ($currentPage) {
                    return $currentPage;
                });
                $products = DB::table('products')->select(DB::raw('products.*, sku.sku AS skuName'))
                                                 ->join('sku', function ($join) {
                                                     $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                                 })
                                                 ->orderBy('id', 'desc')
                                                 ->paginate($perPage);
            }
            \Session::put('perPage', $perPage);
            return json_encode($products);
        } elseif ($categoryId && !$brandId) {
            $page = $request->input('lazy');
            $idsString = $this->getSubCategoriesId($categoryId);
            $categoriesId = explode(', ', $idsString);
            $productsId = DB::table('category_product')
                            ->select('product_id')
                            ->whereIn('category_id', $categoriesId)
                            ->pluck('product_id')
                            ->unique();
            if (empty($productsId)) {
                return json_encode(0);
            }
            $productsId = $productsId->implode(',');
            if ($productsId == '') {
                logger($request->all());
            }
            $products = DB::select("SELECT products.id, products.name, products.url, sort_products.category_id, sort_products.sort_position, sku.sku AS skuName FROM products
                                            INNER JOIN sort_products ON products.id = sort_products.product_id
                                            INNER JOIN sku ON sku.id = (SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)
                                            WHERE products.id IN ($productsId)
                                            AND sort_products.category_id = $categoryId
                                            ORDER BY sort_products.sort_position
                                            LIMIT $page");
            return json_encode($products);
        } else {
            $page = $request->input('lazy');
            $productsId = Product::where('brand_id', $brandId)->pluck('id')->all();
            if (empty($productsId)) {
                return json_encode(0);
            }
            $productsId = implode(',', $productsId);
            $products = DB::select("SELECT products.id, products.name, products.url, sort_brand_products.brand_id, sort_brand_products.sort_position, sku.sku AS skuName FROM products
                                            INNER JOIN sort_brand_products ON products.id = sort_brand_products.product_id
                                            INNER JOIN sku ON sku.id = (SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)
                                            WHERE products.id IN ($productsId)
                                            AND sort_brand_products.brand_id = $brandId
                                            ORDER BY sort_brand_products.sort_position
                                            LIMIT $page");
            return json_encode($products);
        }
    }

    public function searchTableProducts(Request $request)
    {
        $categoryId = $request->input('category');
        $brandId = $request->input('brand');
        $query = $request->input('query');
        if (!$categoryId && !$brandId) {
            $currentPage = $request->input('currentPage');
            $data['info']['perPage'] = $request->input('perPage');
            $productsFound = DB::select("SELECT products.id FROM products
                                            INNER JOIN sku ON sku.id = (SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)
                                            WHERE products.name LIKE ?
                                            OR sku.sku LIKE ?", ['%'.$query.'%', '%'.$query.'%']);

            $productIds = array();
            foreach ($productsFound as $found) {
                $productIds[] = $found->id;
            }
            $total = count($productIds);
            $data['info']['total'] = $total;
            if (($currentPage*$data['info']['perPage'] - $data['info']['perPage']) > $total) {
                $currentPage = 1;
            }
            $totalPages = ceil($total/$data['info']['perPage']);
            if ($currentPage > $totalPages) {
                if ($currentPage > 1) {
                    $currentPage -= 1;
                }
            }
            $data['info']['currentPage'] = $currentPage;
            Paginator::currentPageResolver(function () use ($currentPage) {
                return $currentPage;
            });
            $data['items'] = Product::orderBy('id', 'desc')->whereIn('id', $productIds)->with('sku')->paginate(intval($data['info']['perPage']));
            if (empty($data['items'])) {
                $data['items'] = Product::orderBy('id', 'desc')->whereIn('id', $productIds)->with('sku')->paginate(intval($data['info']['perPage']) - 1);
                $data['info']['currentPage'] -= 1;
            }
            foreach ($data['items'] as $key => $value) {
                $Skus = array();
                foreach ($value->sku as $sku) {
                    $Skus[] = $sku->sku;
                }
                $Skus = implode(", ", $Skus);
                $data['items'][$key]->skuName = $Skus;
            }
            return json_encode($data);
        } elseif ($categoryId && !$brandId) {
            $idsString = $this->getSubCategoriesId($categoryId);
            $categoriesId = explode(', ', $idsString);
            $productsId = Product::whereIn('category_id', $categoriesId)->pluck('id')->all();
            if (empty($productsId)) {
                return json_encode(0);
            }
            $productsId = implode(',', $productsId);
            $products = DB::select("SELECT products.id, products.category_id, products.name, products.url, sort_products.category_id, sort_products.sort_position FROM products
                                            INNER JOIN sort_products ON products.id = sort_products.product_id
                                            INNER JOIN sku ON sku.id = (SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)
                                            WHERE products.id IN ($productsId)
                                            AND products.category_id IN ($idsString)
                                            AND sort_products.category_id = $categoryId
                                            AND products.name LIKE ?
                                            OR products.id IN ($productsId)
                                            AND products.category_id IN ($idsString)
                                            AND sort_products.category_id = $categoryId
                                            AND sku.sku LIKE ?
                                            GROUP BY products.id
                                            ORDER BY sort_products.sort_position", ['%'.$query.'%', '%'.$query.'%']);
            foreach ($products as $product) {
                $sku = sku::where('product_id', '=', $product->id)->pluck('sku')->all();
                $product->skuName = implode(', ', $sku);
            }
            return json_encode($products);
        } else {
            $products = DB::select("SELECT products.id, products.category_id, products.name, products.url, sort_brand_products.brand_id, sort_brand_products.sort_position FROM products
                                            INNER JOIN sort_brand_products ON products.id = sort_brand_products.product_id
                                            INNER JOIN sku ON sku.id = (SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)
                                            WHERE products.brand_id IN ($brandId)
                                            AND sort_brand_products.brand_id = $brandId
                                            AND products.name LIKE ?
                                            OR products.brand_id IN ($brandId)
                                            AND sort_brand_products.brand_id = $brandId
                                            AND sku.sku LIKE ?
                                            GROUP BY products.id
                                            ORDER BY sort_brand_products.sort_position", ['%'.$query.'%', '%'.$query.'%']);
            foreach ($products as $product) {
                $sku = sku::where('product_id', '=', $product->id)->pluck('sku')->all();
                $product->skuName = implode(', ', $sku);
            }
            return json_encode($products);
        }
    }

    public function deleteProducts(Request $request)
    {
        $id = $request->id;
        if (is_string($id)) {
            $id = array($request->id);
        }
        Product::whereIn('id', $id)->delete();
        additionalOptions::whereIn('product_id', $id)->delete();
        sku::whereIn('product_id', $id)->delete();
        Tags::whereIn('product_id', $id)->delete();
        Tabs::whereIn('product_id', $id)->delete();
        ProductGroupsBlocks::whereIn('product_connect_id', $id)->delete();
        GroupsBlocks::whereIn('product_connect_id', $id)->delete();
        CategoryGroupsBlocks::whereIn('product_connect_id', $id)->delete();
        ProductFiles::whereIn('product_id', $id)->delete();
        $calcGroups = CalcGroups::whereIn('product_id', $id)->get();
        $calcDel = array();
        foreach ($calcGroups as $group) {
            $calcDel[] = $group->id;
        }
        CalcGroups::whereIn('product_id', $id)->delete();
        CalcOptions::whereIn('calc_group_id', $calcDel)->delete();
        Groups::whereIn('product_id', $id)->delete();
        SpecialsProductConnections::whereIn('product_id', $id)->delete();
        StickersConnection::whereIn('product_id', $id)->delete();
        SortProduct::whereIn('product_id', $id)->delete();
        SortBrandProduct::whereIn('product_id', $id)->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function changeSortProducts(Request $request) :void
    {
        $products = $request->products;
        $countSort = SortProduct::where('category_id', '=', $request->category_id)->count();
        foreach ($products as $key => $value) {
            $sort = SortProduct::where('category_id', '=', $request->category_id)->where('product_id', '=', $value['id'])->first();
            $sort->sort_position = $key + 1;
            $sort->save();
        }
    }

    public function changeSortBrandProducts(Request $request) :void
    {
        $products = $request->products;
        $countSort = SortBrandProduct::where('brand_id', '=', $request->brand_id)->count();
        foreach ($products as $key => $value) {
            $sort = SortBrandProduct::where('brand_id', '=', $request->brand_id)->where('product_id', '=', $value['id'])->first();
            $sort->sort_position = $key + 1;
            $sort->save();
        }
    }
}
