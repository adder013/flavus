<?php

namespace App\Http\Controllers;

use App\Categories;
use DB;
use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Str;

use function GuzzleHttp\json_decode;

class SearchController extends ShopController
{
	public function search()
	{
		if (request('text')) {
			$token = env('YANDEX_API_TOKEN');
			$searchId = env('YANDEX_SEARCH_ID');
			switch (request('how')) {
				case '':
					$sort = null;
					break;
				case 'aprice':
					$sort = 'asc';
					break;
				case 'dprice':
					$sort = 'desc';
					break;
			}

			$text = request('text');

			$yandexUrl = "https://catalogapi.site.yandex.net/v1.0?apikey=$token&searchid=$searchId";

			$requestUrl = '';
			$requestUrl = Str::finish($requestUrl, request('text') ? '&text=' . request('text') : '');
			$requestUrl = Str::finish($requestUrl, request('per_page') ? '&per_page=' . request('per_page') : '');
			$requestUrl = Str::finish($requestUrl, request('available') ? '&available=' . request('available') : '');
			$requestUrl = Str::finish($requestUrl, request('how') ? '&how=' . request('how') : '');
			$requestUrl = Str::finish($requestUrl, request('category_id') ? '&category_id=' . request('category_id') : '');
			$requestUrl = Str::finish($requestUrl, request('price_low') ? '&price_low=' . request('price_low') : '');
			$requestUrl = Str::finish($requestUrl, request('price_high') ? '&price_high=' . request('price_high') : '');
			$requestUrl = Str::finish($requestUrl, request('page') ? '&page=' . strval(request('page') - 1) : '');

			$client = new Client();
			$response = json_decode($client->get($yandexUrl . $requestUrl)->getBody());

			$ids = property_exists($response, 'documents') ? collect($response->documents)->pluck('id') : [];
			$total = $response->docsTotal;
			$page = $response->page;
			$perPage = $response->perPage;

			$products = DB::table('products')
				->join('brands', 'products.brand_id', 'brands.id')
				->join('category_product', 'products.id', 'category_product.product_id')
				->join('categories', 'category_product.category_id', 'categories.id')
				->join('sku', 'products.id', 'sku.product_id')
				->select(
					'products.name as name',
					'products.url as url',
					'products.image as image',
					'products.short_description as description',
					'sku.price as price',
					'sku.currency_id as currency',
					'brands.image as brand_image',
					'brands.url as brand_url',
					'categories.id as category_id',
					'categories.name as category_name',
				)
				->whereIn('products.id', $ids)
				->groupBy('products.id')
				->when($sort, function ($query, $sort) {
					return $query->orderBy('price', $sort);
				})
				->get()
				->each(function ($product, $key) {
					$product->category_url = Categories::find($product->category_id)->link();
				});

			$currencies = DB::table('currencies')
				->select('id', 'char_code', 'value')
				->whereIn('id', $products->pluck('currency'))
				->get()
				->keyBy('id');

			$paginator = new LengthAwarePaginator($products, $total, $perPage, $page + 1);
			$paginator->withPath(url('/search?') . http_build_query(request()->except('page')));
		} else {
			$text = null;
			$total = null;
			$products = null;
			$paginator = null;
			$currencies = null;
		}

		$firstLevelCategories = Categories::select('id', 'parent_id', 'name')
			->where('active', 1)
			->where('parent_id', null)
			->orderBy('sort_position')
			->with('subCategory:id,parent_id,name')
			->get();

		$expandCategories =  request('category_id') ? [request('category_id')] : [];
		if ($expandCategories) {
			$prev = $expandCategories[0];
			while ($parent = Categories::find($prev)->parentCategory) {
				$expandCategories[] = $parent->id;
				$prev = $parent->id;
			}
		}

		return view('search', compact('text', 'total', 'products', 'currencies', 'paginator', 'firstLevelCategories', 'expandCategories'));
	}
}
