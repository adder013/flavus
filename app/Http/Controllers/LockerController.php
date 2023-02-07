<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LockerRequest;
use App\Locker;

class LockerController extends Controller
{
    public function index()
    {
        return response()->json(Locker::orderBy('sort_position')->get(), 200);
    }

    public function create(LockerRequest $request)
    {
        $locker = new Locker();
        $locker->name = $request->name;
        $locker->url = $request->url;
        $locker->image = '/img/placeholder.jpg';
        $position = Locker::orderBy('sort_position', 'desc')->limit(1)->pluck('sort_position')->first();
        $locker->sort_position = $position ? $position + 1 : 1;
        $locker->save();
        return response()->json($locker, 200);
    }

    public function show(Locker $locker)
    {
        $locker = Locker::where('id', '=', $locker->id)->with('orders')->with('sliders')->with('tables')->with('images')->with('brands')->first();
        return response()->json($locker, 200);
    }

    public function image(Request $request)
    {
        $locker = Locker::find($request->id);
        $locker->image = $request->path;
        $locker->update();
        return response()->json(null, 200);
    }

    public function update(LockerRequest $request, Locker $locker)
    {
        $locker->active = $request->active_id;
        $locker->update($request->except('brands', 'images', 'orders', 'tables', 'sliders', 'active_id', 'active'));
        return response()->json($request, 200);
    }

    public function delete(Locker $locker)
    {
        $locker->delete();
        return response()->json(null, 204);
    }
}
