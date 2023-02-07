<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\CartProduct;
use App\OrderItem;
use App\Mail\sendOrder;
use Auth;

class CartController extends ShopController
{
    private function generateInvoice()
    {
        $invoice_number = strtoupper(substr(md5(uniqid(rand(), true)), 0, 10));
        $exists = Order::where('invoice_number', '=', $invoice_number)->pluck('id')->first();
        if ($exists) {
            return $this->generateInvoice();
        } else {
            return $invoice_number;
        }
    }
    
    public function create(Request $request)
    {
        $invoice_number = $this->generateInvoice();
        setlocale(LC_TIME, 'ru_RU.UTF-8');
        $delivery = $request->deliveryType;
        if (isset(Auth::user()->id)) {
            $user = User::where('id', '=', Auth::user()->id)->first();
        } else {
            $user = User::where('email', '=', $request->email)->first();
        }
        if (!$user) {
            $user = new User;
            if ($request->name) {
                $user->name = $request->name;
            }
            $user->email = $request->email;
            $user->registration_token = md5(uniqid(rand(), true));
            $user->password = md5(uniqid(rand(), true));
            $user->save();
        }
        $order = new Order;
        $order->user_id = $user->id;
        $order->invoice_number = $invoice_number;
        $order->save();
        $products = CartProduct::where('session_id', '=', $request->session)->with('currency')->get();
        foreach ($products as $product) {
            $item = new OrderItem;
            $item->order_id = $order->id;
            $item->product_name = $product->name;
            $item->amount = $product->quantity;
            $item->sku_code = $product->code;
            $item->price = $product->price/$product->currency->nominal*$product->currency->value;
            $item->save();
        }
        $toSend = array();
        $toSend['order_id'] = $order->id;
        $changeTime = $order->created_at;
        $time = $changeTime->formatLocalized('%d %B %Y');
        $toSend['invoice_number'] = $invoice_number;
        $toSend['registration_token'] = $user->registration_token;
        $toSend['name'] = $user->name;
        $toSend['time'] = $time;
        $toSend['mail'] = $request->email;
        $toSend['tel'] = $request->tel;
        $toSend['delivery'] = $request->deliveryType;
        $toSend['address'] = $request->address;
		$toSend['city'] = $request->city;
		if (isset($request->file)) {
			$toSend['file'] = $request->file('file');
			$toSend['file_name'] = $request->file('file')->getClientOriginalName();
		}
        \Mail::to($request->email)->send(new sendOrder($toSend));
		\Mail::to('sale@uralenergotel.ru')->send(new sendOrder($toSend));
		CartProduct::where('session_id', '=', $request->session)->delete();
        return response()->json($order->id, 200);
    }
}
