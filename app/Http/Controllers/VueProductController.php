<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use App;
use App\Product;
use App\Options;
use App\additionalOptions;
use App\OptionValues;
use App\Brands;
use App\Categories;
use App\sku;
use App\Groups;
use App\GroupNames;
use App\GroupsBlocks;
use App\ProductGroupsBlocks;
use App\CategoryGroupsBlocks;

class VueProductController extends Controller
{

    public function getProductAccessories($id)
    {
        $thisProduct = Product::where('id', '=', $id)->first();
        $connectedGroups = GroupsBlocks::where('product_connect_id', '=', $id)->where('type', '=', '1')->get();
        $groups = array();
        foreach ($connectedGroups as $group) {
            $groups[] = $group->group_names_id;
        }
        $groupNames = GroupNames::whereIn('id', $groups)->get();
        $connectedProducts = ProductGroupsBlocks::where('product_connect_id', '=', $id)->where('type', '=', '1')->get();
        $products = array();
        foreach ($connectedProducts as $product) {
            $products[] = $product->product_id;
        }
        $productNames = Product::whereIn('id', $products)->get();
        $data = array();
        foreach ($groupNames as $name) {
            $data[] = array('id' => $name->id, 'name' => $name->name, 'type' => 'Группа');
        }
        foreach ($productNames as $name) {
            $data[] = array('id' => $name->id, 'name' => $name->name, 'type' => 'Товар');
        }
        return json_encode($data);
    }

    public function getCategories()
    {
        $categories = Categories::all();
        return json_encode($categories);
    }

    public function getProductCrossSelling($id)
    {
        $thisProduct = Product::where('id', '=', $id)->first();
        $connectedCategories = CategoryGroupsBlocks::where('product_connect_id', '=', $id)->where('type', '=', '2')->get();
        $categories = array();
        foreach ($connectedCategories as $category) {
            $categories[] = $category->category_id;
        }
        $categoriesNames = Categories::whereIn('id', $categories)->get();
        return json_encode($categoriesNames);
    }

    public function getProductUpSelling($id)
    {
        $thisProduct = Product::where('id', '=', $id)->first();
        $connectedGroups = GroupsBlocks::where('product_connect_id', '=', $id)->where('type', '=', '3')->get();
        $groups = array();
        foreach ($connectedGroups as $group) {
            $groups[] = $group->group_names_id;
        }
        $groupNames = GroupNames::whereIn('id', $groups)->get();
        $connectedProducts = ProductGroupsBlocks::where('product_connect_id', '=', $id)->where('type', '=', '3')->get();
        $products = array();
        foreach ($connectedProducts as $product) {
            $products[] = $product->product_id;
        }
        $productNames = Product::whereIn('id', $products)->get();
        $data = array();
        foreach ($groupNames as $name) {
            $data[] = array('id' => $name->id, 'name' => $name->name, 'type' => 'Группа');
        }
        foreach ($productNames as $name) {
            $data[] = array('id' => $name->id, 'name' => $name->name, 'type' => 'Товар');
        }
        return json_encode($data);
    }

    public function addProductToProductConnection(Request $request)
    {
        foreach ($request->products as $product_id) {
            $connectionExists = ProductGroupsBlocks::where('product_connect_id', '=', $request->product_id)->where('product_id', '=', $product_id)->where('type', '=', $request->type_id)->first();
            if(empty($connectionExists)) {
                $productGroupsBlocks = new ProductGroupsBlocks();
                $productGroupsBlocks->product_connect_id = $request->product_id;
                $productGroupsBlocks->type = $request->type_id;
                $productGroupsBlocks->product_id = $product_id;
                $productGroupsBlocks->save();
            }
        }
    }

    public function addGroupToProductConnection(Request $request)
    {
        foreach ($request->groups as $group) {
            $connectionExists = GroupsBlocks::where('product_connect_id', '=', $request->product_id)->where('group_names_id', '=', $group)->where('type', '=', $request->type_id)->first();
            if(empty($connectionExists)) {
                $productGroupsBlocks = new GroupsBlocks();
                $productGroupsBlocks->product_connect_id = $request->product_id;
                $productGroupsBlocks->type = $request->type_id;
                $productGroupsBlocks->group_names_id = $group;
                $productGroupsBlocks->save();
            }
        }
    }

    public function addCategoryToProductConnection(Request $request)
    {
        foreach ($request->categories as $category) {
            $connectionExists = CategoryGroupsBlocks::where('product_connect_id', '=', $request->product_id)->where('category_id', '=', $category)->where('type', '=', $request->type_id)->first();
            if(empty($connectionExists)) {
                $productGroupsBlocks = new CategoryGroupsBlocks();
                $productGroupsBlocks->product_connect_id = $request->product_id;
                $productGroupsBlocks->type = $request->type_id;
                $productGroupsBlocks->category_id = $category;
                $productGroupsBlocks->save();
            }
        }
    }

    public function deleteConnection(Request $request)
    {
        $thisProduct = Product::where('id', '=', $request->product_id)->first();
        $products = array();
        $groups = array();
        foreach ($request->items as $item) {
            if ($item[1] == "Товар") {
                $products[] = $item[0];
            } else {
                $groups[] = $item[0];
            }
        }
        GroupsBlocks::whereIn('group_names_id', $groups)->where('product_connect_id', '=', $thisProduct->id)->where('type', '=', $request->type)->delete();
        ProductGroupsBlocks::whereIn('product_id', $products)->where('product_connect_id', '=', $thisProduct->id)->where('type', '=', $request->type)->delete();
    }

    public function deleteCategoryConnection(Request $request)
    {
        CategoryGroupsBlocks::where('product_connect_id', '=', $request->product_id)->whereIn('category_id', $request->items)->delete();

    }

}
