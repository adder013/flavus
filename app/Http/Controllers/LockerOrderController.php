<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LockerOrderRequest;
use App\LockerOrder;

class LockerOrderController extends Controller
{
    public function create(LockerOrderRequest $request)
    {
        $order = new LockerOrder();
        $order->locker_id = $request->locker_id;
        $order->order_option = $request->order_option;
        $position = LockerOrder::orderBy('sort_position', 'desc')->limit(1)->pluck('sort_position')->first();
        $order->sort_position = $position ? $position + 1 : 1;
        $order->save();
        return response()->json($order, 200);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'orders.*.order_option' => 'required',
        ],
        [
            'orders.*.order_option.required' => 'Название не может быть пустым',
        ]);
        foreach ($request->orders as $key => $order) {
            $order = LockerOrder::find($order['id']);
            $order->order_option;
            $order->sort_position = $key + 1;
            $order->update();
        }
        return response()->json($request, 200);
    }

    public function sort(Request $request) : void
    {
        foreach ($request->orders as $key => $order) {
            $sort = LockerOrder::where('id', '=', $order['id'])->first();
            $sort->sort_position = $key + 1;
            $sort->save();
        }
    }

    public function delete(LockerOrder $lockerOrder)
    {
        $lockerOrder->delete();
        return response()->json(null, 204);
    }

}
