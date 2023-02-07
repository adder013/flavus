<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompareProduct;

class CompareController extends Controller
{
    public function create(Request $request)
    {
        $product = CompareProduct::where('session_id', '=', $request->session)->where('product_id', '=', $request->id)->first();
        if (!$product) {
            $product = new CompareProduct;
            $product->session_id = $request->session;
            $product->product_id = $request->id;
            $product->save();
        } else {
            $product->delete();
        }
        $CompareProducts = CompareProduct::where('session_id', '=', $product->session_id)->pluck('product_id')->all();
        return response()->json($CompareProducts, 200);
    }

    public function receive($session)
    {
        $CompareProducts = CompareProduct::where('session_id', '=', $session)->pluck('product_id')->all();
        return response()->json($CompareProducts, 200);
    }
}
