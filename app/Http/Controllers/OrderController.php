<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\OrderItem;
use App\sku;
use App\Product;

class OrderController extends Controller
{
    public function orders(User $user)
    {
        $orders = Order::where('user_id', '=', $user->id)->with('products')->get();
        foreach ($orders as $order) {
            foreach ($order->products as $product) {
                $skuId = sku::where('sku_code', '=', $product->sku_code)->pluck('product_id')->first();
                if ($skuId) {
                    $product->url = Product::where('id', '=', $skuId)->pluck('url')->first();
                } else {
                    $product->url = 'catalog';
                }
            }
        }
        return response()->json($orders, 200);
    }

    public function getInvoice($number)
    {
        $file = storage_path().'/app/public/invoices/'.$number.'.pdf';
        $name = $number.'.pdf';
        $headers = [
            'Content-Type' => 'multipart/form-data',
        ];
        return response()->download($file, $name, $headers);
    }
}
