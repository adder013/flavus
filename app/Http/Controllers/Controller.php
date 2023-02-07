<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App;
use App\Categories;
use App\Currency;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getCurrencies()
    {
        $currenciesData = Currency::all();
        $currencies = array();
        foreach ($currenciesData as $currency) {
            $currencies[$currency->char_code] = $currency->value/$currency->nominal;
        }
        $currencies = (object) $currencies;
        return $currencies;
    }

    protected function hasSpecialCharacters($string)
    {
        if (preg_match('/[\'^£$%&*()}{@#~!?><>,.:;"|=+¬\/]/', $string)) {
            return false;
        }
        if (strstr($string, '\\')) {
            return false;
        }
        if (strstr($string, '[')) {
            return false;
        }
        if (strstr($string, ']')) {
            return false;
        }
        if ($string != '' && preg_match('/[А-Яа-яЁё]/u', $string) === 0 &&
        strpos(trim($string, ' '), ' ') === false) {
            return true;
        } else {
            return false;
        }
    }

    protected function categoryDepthRecursiveSearch($id, $depth) {
        $category = Categories::where('id', '=', $id)->pluck('parent_id')->first();
        if (!empty($category)) {
            $depth++;
            return Self::categoryDepthRecursiveSearch($category, $depth);
        } else {
            return $depth;
        }
    }

    protected function countCategoryProducts($id) {
        $categoriesSubId = explode(', ', $this->getSubCategoriesId($id));
        return $categoriesSubId;
    }

    protected function categoryDepth($id) {
        $depth = Self::categoryDepthRecursiveSearch($id, 2);
        return $depth;

    }

    protected function clean($string) {
        $string = str_replace(' ', '-', $string);
        return preg_replace('/[^A-Za-z0-9\-_]/', '', $string);
    }

    // Clean without spaces
    protected function cleanws($string) {
        // Have to solve problem with both cyr and lat in one string first =(
        return $string;
    }

    protected function getSubCategories($categoryId)
    {
        $isThereChild = Categories::orderBy('sort_position')->where('parent_id', '=', $categoryId)->where('brand_id', null)->get();
        if (!empty($isThereChild)) {
            foreach ($isThereChild as $subCategory) {
                $subCategory->child = $this->getSubCategories($subCategory->id);
                if (!empty($subCategory->parent_id)) {
                    $buildPath = $this->buildPath($subCategory->parent_id);
                    $buildPath = explode('/', $buildPath);
                    $buildPath = array_reverse($buildPath);
                    $buildPath = implode('/', $buildPath);
                    $buildPath = $buildPath.'/'.$subCategory->url;
                    $subCategory->path = '/category/'.$buildPath;
                }
            }
        }
        return $isThereChild;
    }

    protected function getSubCategoriesDashboard($categoryId)
    {
        $isThereChild = Categories::orderBy('sort_position')->where('parent_id', '=', $categoryId)->get();
        if (!empty($isThereChild)) {
            foreach ($isThereChild as $subCategory) {
                $subCategory->child = $this->getSubCategories($subCategory->id);
                if (!empty($subCategory->parent_id)) {
                    $buildPath = $this->buildPath($subCategory->parent_id);
                    $buildPath = explode('/', $buildPath);
                    $buildPath = array_reverse($buildPath);
                    $buildPath = implode('/', $buildPath);
                    $buildPath = $buildPath.'/'.$subCategory->url;
                    $subCategory->path = '/category/'.$buildPath;
                }
            }
        }
        return $isThereChild;
    }

    protected function getActiveSubCategories($categoryId)
    {
        $isThereChild = Categories::orderBy('sort_position')->where('active', '=', 1)->where('show_menu', '=', 1)->where('parent_id', '=', $categoryId)->where('brand_id', null)->get();
        if (!empty($isThereChild)) {
            foreach ($isThereChild as $subCategory) {
                $subCategory->child = $this->getActiveSubCategories($subCategory->id);
                if (!empty($subCategory->parent_id)) {
                    $buildPath = $this->buildPath($subCategory->parent_id);
                    $buildPath = explode('/', $buildPath);
                    $buildPath = array_reverse($buildPath);
                    $buildPath = implode('/', $buildPath);
                    $buildPath = $buildPath.'/'.$subCategory->url;
                    $subCategory->path = '/category/'.$buildPath;
                }
            }
        }
        return $isThereChild;
    }

    protected function getSubCategoriesId($categoryId)
    {
        $id = '';
        $id .= Categories::where('id', '=', $categoryId)->pluck('id')->first();
        $isThereChild = Categories::where('parent_id', '=', $categoryId)->pluck('id')->all();
        if (!empty($isThereChild)) {
            foreach ($isThereChild as $subCategoryId) {
                $id .= ', '.$this->getSubCategoriesId($subCategoryId);
            }
        }
        return $id;
    }

    protected function getSubCategoriesIdWithShowContent($categoryId)
    {
        $id = '';
        $id .= Categories::where('id', '=', $categoryId)->pluck('id')->first();
        $isThereChild = Categories::where('parent_id', '=', $categoryId)->where('show_content', '=', 1)->pluck('id')->all();
        if (!empty($isThereChild)) {
            foreach ($isThereChild as $subCategoryId) {
                $id .= ', '.$this->getSubCategoriesIdWithShowContent($subCategoryId);
            }
        }
        return $id;
    }

    protected function getLoopParents($category, $isDashboard)
    {
        $categories = Categories::where('id', '=', $category->id)->first();
        if (!$categories->parent_id) {
            $path[1]['url'] = $isDashboard ? '/dashboard/category/'.$categories->url : '/category/'.$categories->url;
            return $path;
        }
        $buildId = $this->buildParentId($category->parent_id);
        $buildId = explode('/', $buildId);
        $buildId = array_reverse($buildId);
        $buildId = implode('/', $buildId);
        $buildId = $buildId.'/'.$category->id;
        $buildId = explode('/', $buildId);
        $path = array();
        foreach ($buildId as $id) {
            $thisCategory = Categories::where('id', '=', $id)->first();
            $path[$id]['name'] = $thisCategory->name;
            if (!empty($thisCategory->parent_id)) {
                $buildPath = $this->buildPath($thisCategory->parent_id);
                $buildPath = explode('/', $buildPath);
                $buildPath = array_reverse($buildPath);
                $buildPath = implode('/', $buildPath);
                $buildPath = $buildPath.'/'.$thisCategory->url;
                $path[$id]['url'] = $isDashboard ? '/dashboard/category/'.$buildPath : '/category/'.$buildPath;
            } else {
                $path[$id]['url'] = $isDashboard ? '/dashboard/category/'.$thisCategory->url : '/category/'.$thisCategory->url;
            }
        }
        return $path;
    }

    protected function getParentCategoriesId($category)
    {
        $id = '';
        $id .= Categories::where('id', '=', $category->id)->pluck('id')->first();
        $isThereParent = Categories::where('id', '=', $category->parent_id)->get();
        if (!empty($isThereParent)) {
            foreach ($isThereParent as $parentCategoryId) {
                $id .= ', '.$this->getParentCategoriesId($parentCategoryId);
            }
        }
        return $id;
    }

    protected function getParentCategories($categoryId)
    {
        $category = Categories::where('id', '=', $categoryId)->first();
        $categories = $this->getParentCategoriesId($category);
        return $categories;
    }

    protected function getLoopAllCategories()
    {
        $categories = Categories::orderBy('sort_position')->where('depth', '=', 1)->where('brand_id', null)->get();
        foreach ($categories as $category) {
            $category->child = $this->getSubCategories($category->id);
        }
        return $categories;
    }

    protected function getLoopAllCategoriesDashboard()
    {
        $categories = Categories::orderBy('sort_position')->where('depth', '=', 1)->where('brand_id', null)->get();
        foreach ($categories as $category) {
            $category->child = $this->getSubCategoriesDashboard($category->id);
        }
        return $categories;
    }

    public function getLoopAllActiveCategories()
    {
        $categories = Categories::orderBy('sort_position')->where('active', '=', 1)->where('depth', '=', 1)->where('brand_id', null)->get();
        foreach ($categories as $category) {
            $category->brandCategories = Categories::orderBy('sort_position')->where('active', '=', 1)->where('parent_id', $category->id)->where('brand_id', '!=', null)->get();
            $category->child = $this->getActiveSubCategories($category->id);
            $category->path = '/category/'.$category->url;
        }
        return $categories;
    }

    protected function buildPath($parentId)
    {
        $isThereChild = Categories::orderBy('sort_position')->where('id', '=', $parentId)->where('brand_id', null)->get();
        $path = array();
        if (!empty($isThereChild)) {
            foreach ($isThereChild as $subCategory) {
                $path[0]['url'] = $subCategory->url;
                if ($subCategory->depth != 1) {
                    $path[0]['url'] .= '/'.$this->buildPath($subCategory->parent_id);
                }
            }
        }
        return $path[0]['url'];
    }

    protected function buildParentId($parentId)
    {
        $isThereChild = Categories::orderBy('sort_position')->where('id', '=', $parentId)->where('brand_id', null)->get();
        $path = array();
        if (!empty($isThereChild)) {
            foreach ($isThereChild as $subCategory) {
                $path[0]['id'] = $subCategory->id;
                if ($subCategory->depth != 1) {
                    $path[0]['id'] .= '/'.$this->buildParentId($subCategory->parent_id);
                }
            }
        }
        return $path[0]['id'];
    }

    protected function getLoopCategories($id, $isDashboard)
    {
        $categories = Categories::where('id', '=', $id)->get();
        foreach ($categories as $category) {
            $category->child = $this->getSubCategories($category->id);
            if ($category->depth != 1) {
                $buildPath = $this->buildPath($category->parent_id);
                $buildPath = explode('/', $buildPath);
                $buildPath = array_reverse($buildPath);
                $buildPath = implode('/', $buildPath);
                $category->path = $isDashboard ? '/dashboard/category/'.$buildPath.'/'.$category->url.'/' : '/category/'.$buildPath.'/'.$category->url.'/';
            } else {
                $category->path = $isDashboard ? '/dashboard/category/'.$category->url.'/' : '/category/'.$category->url.'/';
            }
        }
        return $categories;
    }

    protected function getLoopCategoriesDashboard($id, $isDashboard)
    {
        $categories = Categories::where('id', '=', $id)->get();
        foreach ($categories as $category) {
            $category->child = $this->getSubCategoriesDashboard($category->id);
            if ($category->depth != 1) {
                $buildPath = $this->buildPath($category->parent_id);
                $buildPath = explode('/', $buildPath);
                $buildPath = array_reverse($buildPath);
                $buildPath = implode('/', $buildPath);
                $category->path = $isDashboard ? '/dashboard/category/'.$buildPath.'/'.$category->url.'/' : '/category/'.$buildPath.'/'.$category->url.'/';
            } else {
                $category->path = $isDashboard ? '/dashboard/category/'.$category->url.'/' : '/category/'.$category->url.'/';
            }
        }
        return $categories;
    }

    protected function detectCategoryByUrl($category, $url) : bool
    {
        $depth = count($url);
        $categories = Categories::where('url', '=', array_pop($url))->where('depth', '=', $depth)->where('id', '=', $category->parent_id)->get();
        foreach ($categories as $thisCategory) {
            if ($thisCategory->depth == 1) {
                return true;
            } else {
                $check = $this->detectCategoryByUrl($thisCategory, $url);
                if ($check == true) {
                    return true;
                }
            }
        }
        return false;
    }

    protected function detectCategory($url)
    {
        $url = explode('/', $url);
        foreach ($url as $key => $value) {
            if (empty($value)) {
                unset($url[$key]);
            }
        }
        $depth = count($url);
        $possibleCategory = Categories::where('url', '=', array_pop($url))->where('depth', '=', $depth)->get();
        foreach ($possibleCategory as $category) {
            if ($category->depth != 1) {
                $check = $this->detectCategoryByUrl($category, $url);
                if ($check == true) {
                    return $category;
                }
            } else {
                return $category;
            }
        }
    }
}
