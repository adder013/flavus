<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiscountLevel;

class DiscountLevelController extends Controller
{
    public function index()
    {
        $discount = DiscountLevel::all();
        return response()->json($discount, 200);
    }
}
