<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Brands;
use App\Product;
use App\BrandTagConnection;
use App\BrandIndustryConnection;

class DashboardBrandsController extends DashboardController
{
    public function showBrands()
    {
        return view('dashboard.brands');
    }

    public function showBrand($url)
    {
        $brand = Brands::where('url', '=', $url)->first();
        return view('dashboard.brand', compact(['brand']));
    }

    public function getBrands(Request $request)
    {
        $id = $request->input('id');
        if (empty($id)) {
            $brands = Brands::orderBy('sort_position')->get();
            return response()->json([
                'success' => true,
                'brands' => $brands,
            ]);
        } else {
            $brand = Brands::find($id);
            return response()->json([
                'success' => true,
                'brand' => $brand,
            ]);
        }
    }

    public function addBrand(Request $request)
    {
        $url = $this->clean($request->url);
        $brandExists = Brands::where('url', '=', $url)->first();
        if (empty($categoryExists)) {
            $newBrand = new Brands();
            $newBrand->name = $this->cleanws($request->name);
            $newBrand->url = $url;
            $checkPosition = Brands::all()->count();
            $newBrand->sort_position = $checkPosition + 1;
            $newBrand->save();
            return response()->json([
                'success' => true,
                'message' => 'Бренд "'.$request->name.'" успешно добавлен!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Бренд с таким Url уже существует'
            ]);
        }
    }

    public function changeSortBrands(Request $request) : void
    {
        foreach ($request->brands as $key => $brand) {
            $sort = Brands::where('id', '=', $brand['id'])->first();
            $sort->sort_position = $key + 1;
            $sort->save();
        }
    }

    public function deleteBrand(Request $request)
    {
        $products = Product::where('brand_id', '=', $request->brand_id)->get();
        foreach ($products as $key => $product) {
            $product->brand_id = null;
            $product->save();
        }
        Brands::where('id', '=', $request->brand_id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Бренд успешно удален'
        ]);
    }

    public function updateBrandImage(Request $request)
    {
        $brand = Brands::find($request->id);
        $brand->image = $request->path;
        $brand->update();
        return response()->json([
            'success' => true,
            'message' => 'Изображение обновлено',
        ]);
    }

    public function updateBrand(Request $request)
    {
        $brand = Brands::find($request->brand['id']);
        $url = $this->clean($request->brand['url']);
        $existsBrandUrl = Brands::where('url', '=', $url)->first();
        if ($brand->url == $url) {
            $redirect = false;
        } else {
            $redirect = true;
        }
        $path = str_replace($brand->url, $url, $request->redirect);
        if (empty($existsBrandUrl->id) || $brand->url == $url) {
            $brand->name = !empty($request->brand['name']) ? $this->cleanws($request->brand['name']) : $brand->name;
            $brand->url = !empty($url) ? $url : $brand->url;
            $brand->active = $request->brand['active'];
            $brand->filter = $request->brand['filter'];
            $brand->header = !empty($request->brand['header']) ? $request->brand['header'] : $brand->header;
            $brand->info = !empty($request->brand['info']) ? $request->brand['info'] : $brand->info;
            $brand->body = !empty($request->brand['body']) ? $request->brand['body'] : $brand->body;
            $brand->metaTitle = !empty($request->brand['metaTitle']) ? $request->brand['metaTitle'] : $brand->metaTitle;
            $brand->metaDescription = !empty($request->brand['metaDescription']) ? $request->brand['metaDescription'] : $brand->metaDescription;
			$brand->update();
			
			$tags = $request->tags;
			BrandTagConnection::where('brand_id', '=', $brand->id)->delete();
			foreach($tags as $tag) {
				if ($tag['connected']) {
					$brandTag = new BrandTagConnection();
					$brandTag->tag_id = $tag['id'];
					$brandTag->brand_id = $brand->id;
					$brandTag->save();
				}
			}
			$industries = $request->industries;
			BrandIndustryConnection::where('brand_id', '=', $brand->id)->delete();
			foreach($industries as $industry) {
				if ($industry['connected']) {
					$brandIndustry = new BrandIndustryConnection();
					$brandIndustry->industry_id = $industry['id'];
					$brandIndustry->brand_id = $brand->id;
					$brandIndustry->save();
				}
			}
            return response()->json([
                'success' => true,
                'redirect' => $redirect,
                'path' => $path,
                'message' => 'Бренд обновлен успешно',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Такой URL уже существует',
            ]);
        }
    }

}
