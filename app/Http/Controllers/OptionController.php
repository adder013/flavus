<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Options;

class OptionController extends Controller
{
    public function index()
    {
        $options = Options::all();
        return response()->json($options, 200);
    }

    public function csvSelectList()
    {
        $options = Options::pluck('name')->all();
        $csvOptions = array();
        foreach ($options as $key => $option) {
            $csvOptions[$key] = new \stdClass();
            $csvOptions[$key]->name = $option;
            $csvOptions[$key]->disabled = false;
        }
        return response()->json($csvOptions, 200);
    }
}
