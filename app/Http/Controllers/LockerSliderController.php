<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LockerSliderRequest;
use App\LockerSlider;

class LockerSliderController extends Controller
{
    public function create(LockerSliderRequest $request)
    {
        $slider = new LockerSlider();
        $slider->locker_id = $request->locker_id;
        $slider->name = $request->name;
        $slider->customer = $request->customer;
        $slider->image = '/img/placeholder.jpg';
        $position = LockerSlider::orderBy('sort_position', 'desc')->limit(1)->pluck('sort_position')->first();
        $slider->sort_position = $position ? $position + 1 : 1;
        $slider->save();
        return response()->json($slider, 200);
    }

    public function update(LockerSliderRequest $request, LockerSlider $lockerSlider)
    {
        $lockerSlider->update($request->all());
        return response()->json($request, 200);
    }

    public function sort(Request $request) : void
    {
        foreach ($request->sliders as $key => $slider) {
            $sort = LockerSlider::where('id', '=', $slider['id'])->first();
            $sort->sort_position = $key + 1;
            $sort->save();
        }
    }

    public function delete(LockerSlider $lockerSlider)
    {
        $lockerSlider->delete();
        return response()->json(null, 204);
    }

}
