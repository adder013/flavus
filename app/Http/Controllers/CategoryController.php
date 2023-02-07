<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return response()->json($categories, 200);
    }

    private function buildList($category)
    {
        $spaces = '';
        for ($i = 1; $i < $category->depth; $i++) {
            $spaces .= '----';
        }
        if ($category->depth == 1) {
            $space = '';
        } else {
            $space = ' ';
        }
        $list[] = array('name' => $spaces.$space.$category->name, 'id' => $category->id);
        foreach ($category->child as $child) {
            $preList = $this->buildList($child);
            $list = array_merge($list, $preList);
        }
        return $list;
    }

    public function selectList()
    {
        $categories = $this->getLoopAllCategoriesDashboard();
        $list = array();
        foreach ($categories as $category) {
            $list = array_merge($list, $this->buildList($category));
        }
        return response()->json($list, 200);
    }
}
