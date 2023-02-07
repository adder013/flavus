<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sku;
use Cookie;
use Auth;

class SkuController extends Controller
{
    public function find(Request $request)
    {
        $sku = sku::where('sku_code', '=', $request->code)->with('currency')->first();
        if (isset(Auth::user()->country->vat)) {
            $sku->price = $sku->price + $sku->price * Auth::user()->country->vat / 100;
        } else {
            $sku->price = $sku->price + $sku->price * 20 / 100;
        }
        return $sku;
    }
}
