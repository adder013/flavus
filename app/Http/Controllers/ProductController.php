<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Currency;
use App\sku;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }

    public function crmData(Request $request)
    {
        foreach (json_decode($request->products) as $newProduct) {
            $product = sku::where('sku_code', '=', $newProduct->code)->first();
            if ($product) {
                // If mixed
                $mixPrice = 0;
                $currency = Currency::where('char_code', '=', $newProduct->currency->char_code)->first();
                if ($newProduct->mixed_currency_id) {
                    \Log::info($newProduct->mixed_currency_id);
                    $mixCurrency = Currency::where('id', '=', $newProduct->mixed_currency_id)->first();
                    $mixPrice = ($newProduct->mixed_currency_value * ($mixCurrency->value / $mixCurrency->nominal)) * ($currency->nominal / $currency->value);
                }
                $factoryPrice = number_format((floatval($newProduct->price) + floatval($mixPrice)), 2, '.', '');
                $mrp = $newProduct->mrp;
                $msp = $newProduct->msp;
                $markup = $newProduct->markup;
                if ($mrp > $msp) {
                    $price = $mrp;
                } else {
                    $price = $msp;
                }
                $preparePrice = $factoryPrice + $factoryPrice * $markup / 100;
                if ($price == 0) {
                    $price = $preparePrice;
                } elseif ($price < $preparePrice) {
                    $price = $preparePrice;
                }
                $product->currency_id = $currency->id;
                $product->price = $price;
                $product->update();
            }
        }
        $environment = \App::environment();
        if ($environment == 'production') {
            \Log::channel('slack')->info('Цены успешно были успешно обновлены');
        }
        return 'success';
    }
}
