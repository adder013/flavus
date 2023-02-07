<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LockerImage;

class LockerImageController extends Controller
{
    public function create(Request $request)
    {
        $image = new LockerImage();
        $image->locker_id = $request->locker_id;
        $image->type = $request->type;
        $image->image_path = $request->path;
        $image->save();
        return response()->json($image, 200);
    }

    public function update(Request $request, LockerImage $lockerImage)
    {
        $lockerImage->update($request->all());
        return response()->json($request, 200);
    }

    public function delete(LockerImage $lockerImage)
    {
        $lockerImage->delete();
        return response()->json(null, 204);
    }

}
