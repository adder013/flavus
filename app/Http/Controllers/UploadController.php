<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use App;
use App\Product;
use App\Options;
use App\additionalOptions;
use App\OptionValues;
use App\Brands;
use App\Categories;
use App\sku;
use App\Locker;
use App\Specials;
use App\News;
use App\User;

class UploadController extends Controller
{
    public function uploadImg(Request $request)
    {
        request()->file('file')->store($request->id, 'public');
    }

    public function uploadFile(Request $request)
    {
        $name = request()->file('file')->getClientOriginalName();
        request()->file('file')->storeAs($request->id.'/files', $name, 'public');
    }

    public function addBrandImg(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Недопустимый формат изображения. Используйте png|jpg|bmp',
            ]);
        } else {
            $brand = Brands::where('id', '=', $request->id)->firstOrFail();
            $request->newImage->store('brands/'.$request->id, 'public');
            $deletePrevious = $brand->image;
            if (!empty($deletePrevious)) {
                File::delete(public_path().$deletePrevious);
            }
            $brand->image = '/storage/brands/'.$request->id.'/'.$request->newImage->hashName();
            $brand->save();
            return response()->json([
                'success' => true,
                'newImage' => $brand->image,
            ]);
        }
    }

    public function addUserImg(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Недопустимый формат изображения. Используйте png|jpg|bmp',
            ]);
        } else {
            $user = User::where('id', '=', $request->id)->firstOrFail();
            $request->newImage->store('users/'.$request->id, 'public');
            $deletePrevious = $user->image;
            if (!empty($deletePrevious)) {
                File::delete(public_path().$deletePrevious);
            }
            $user->image = '/storage/users/'.$request->id.'/'.$request->newImage->hashName();
            $user->save();
            return response()->json([
                'success' => true,
                'newImage' => $user->image,
            ]);
        }
    }

    public function addLockerImg(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Недопустимый формат изображения. Используйте png|jpg|bmp',
            ]);
        } else {
            $locker = Locker::where('id', '=', $request->id)->firstOrFail();
            $request->newImage->store('lockers/'.$request->id, 'public');
            $deletePrevious = $locker->image;
            if (!empty($deletePrevious)) {
                File::delete(public_path().$deletePrevious);
            }
            $locker->image = '/storage/lockers/'.$request->id.'/'.$request->newImage->hashName();
            $locker->save();
            return response()->json([
                'success' => true,
                'newImage' => $locker->image,
            ]);
        }
    }

    public function addNewsImg(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Недопустимый формат изображения. Используйте png|jpg|bmp',
            ]);
        } else {
            $news = News::where('id', '=', $request->id)->firstOrFail();
            $request->newImage->store('news/'.$request->id, 'public');
            $deletePrevious = $news->image;
            if (!empty($deletePrevious)) {
                File::delete(public_path().$deletePrevious);
            }
            $news->image = '/storage/news/'.$request->id.'/'.$request->newImage->hashName();
            $news->save();
            return response()->json([
                'success' => true,
                'newImage' => $news->image,
            ]);
        }
    }

    public function addSpecialImg(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Недопустимый формат изображения. Используйте png|jpg|bmp',
            ]);
        } else {
            $locker = Specials::where('id', '=', $request->id)->firstOrFail();
            $request->newImage->store('specials/'.$request->id, 'public');
            $deletePrevious = $locker->image;
            if (!empty($deletePrevious)) {
                File::delete(public_path().$deletePrevious);
            }
            $locker->image = '/storage/specials/'.$request->id.'/'.$request->newImage->hashName();
            $locker->save();
            return response()->json([
                'success' => true,
                'newImage' => $locker->image,
            ]);
        }
    }

    public function addCategoryImg(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Недопустимый формат изображения. Используйте png|jpg|bmp',
            ]);
        } else {
            $category = Categories::where('id', '=', $request->id)->firstOrFail();
            $request->newImage->store('categories/'.$request->id, 'public');
            $deletePrevious = $category->image;
            if (!empty($deletePrevious)) {
                File::delete(public_path().$deletePrevious);
            }
            $category->image = '/storage/categories/'.$request->id.'/'.$request->newImage->hashName();
            $category->save();
            return response()->json([
                'success' => true,
                'newImage' => $category->image,
            ]);
        }
    }

}
