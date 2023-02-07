<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookmarkProduct;

class BookmarkController extends Controller
{
    public function create(Request $request)
    {
        $product = BookmarkProduct::where('session_id', '=', $request->session)->where('product_id', '=', $request->id)->first();
        if (!$product) {
            $product = new BookmarkProduct;
            $product->session_id = $request->session;
            $product->product_id = $request->id;
            $product->save();
        } else {
            $product->delete();
        }
        $BookmarkProducts = BookmarkProduct::where('session_id', '=', $product->session_id)->pluck('product_id')->all();
        return response()->json($BookmarkProducts, 200);
    }

    public function receive($session)
    {
        $BookmarkProducts = BookmarkProduct::where('session_id', '=', $session)->pluck('product_id')->all();
        return response()->json($BookmarkProducts, 200);
    }
}
