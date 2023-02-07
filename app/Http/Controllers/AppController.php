<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use App;
use App\MenuOptions;
use App\Contacts;
use App\Categories;
use App\Product;
use App\additionalOptions;
use App\Options;
use App\OptionValues;
use App\Brands;
use App\Filters;
use App\Stickers;
use App\CalcGroups;
use App\CalcOptions;
use App\Groups;
use App\GroupsBlocks;
use App\ProductGroupsBlocks;
use App\CategoryGroupsBlocks;
use App\GroupNames;
use App\Tags;
use App\StickersConnection;
use App\Delivery;
use App\Specials;
use App\News;
use App\Tabs;
use App\sku;
use App\HomeBrands;
use App\ProductFiles;
use App\CustomFields;
use App\Redirects;
use App\MetaPatterns;
use App\HomePageSliders;
use App\Locker;
use App\BrandDiscount;
use App\Email;
use App\Libraries\FilterClass;
use App\ElasticSearchModel;
use Carbon\Carbon;
use Cookie;
use Auth;
use DB;

class AppController extends Controller
{
	public $contacts;

	public function __construct(Request $request)
	{
		$nav = MenuOptions::orderBy('sort_position')->where('depth', '=', 1)->get();
		foreach ($nav as $key => $menu) {
			$hasSubnav = MenuOptions::where('parent_id', '=', $menu->id)->first();
			if (!empty($hasSubnav)) {
				$nav[$key]->hasSub = 1;
			}
		}
		$subNav = MenuOptions::orderBy('sort_position')->where('depth', '=', 2)->get();
		$contacts = $this->getContacts($request);
		$deliveryCities = Delivery::where('active', '=', 1)->get();
		$deliveryFooter = array();
		foreach ($deliveryCities as $delivery) {
			if ($delivery->country != 'Армения' && $delivery->country != 'Кыргызстан') {
				$firstLetter = mb_substr($delivery->city, 0, 1);
				$deliveryFooter[$delivery->country][$firstLetter][] = $delivery;
			}
		}
		$metrics = CustomFields::where('name', '=', 'metrics')->pluck('content')->first();
		$categories = $this->getLoopAllActiveCategories();
		$this->contacts = $contacts;
		View::share([
			'nav' => $nav,
			'subNav' => $subNav,
			'contacts' => $contacts,
			'navCategories' => $categories,
			'deliveryFooter' => $deliveryFooter,
			'metrics' => $metrics,
		]);
	}

	private function getContacts($request)
	{
		$contacts = Contacts::first();
		$email = Cookie::get('uralenergotel_email') ? \Crypt::decryptString(Cookie::get('uralenergotel_email')) : $contacts->email;
		if ($request->utm_source && $request->utm_medium) {
			$email = Email::where('source', '=', $request->utm_source)
				->where('campaign', '=', $request->utm_campaign)
				->where('medium', '=', $request->utm_medium)
				->where('term', '=', $request->term)
				->where('content', '=', $request->utm_content)
				->where('type', '=', $request->utm_type)->first();
			$email = $email ? $email->email : $contacts->email;
		}
		// Отключена проверка на органику, т.к. в поиске по сайту ссылки считаются органикой
		// else if (strpos(\Request::server('HTTP_REFERER'), env('APP_URL')) === false) {
		// 	$email = $contacts->email;
		// }
		Cookie::queue('uralenergotel_email', $email, 120);
		$contacts->email = $email;
		return $contacts;
	}

	public function index()
	{
		$news = News::orderBy('created_at', 'desc')->where('active', '=', 1)->limit(3)->get();
		$specials = Specials::orderBy('created_at', 'desc')->where('active', '=', 1)->limit(3)->get();
		$hpSliders = HomePageSliders::orderBy('sort_position')->get();
		$homeBrands = array();
		$blocksAmount = 18;
		for ($i = 1; $i < $blocksAmount; $i++) {
			$check = HomeBrands::where('block_id', '=', $i)->first();
			if (empty($check)) {
				$homeBrands[$i] = '';
			} else {
				$brand = Brands::where('id', '=', $check->brand_id)->first();
				$homeBrands[$i] = $brand;
			}
		}
		return view('index', compact(['news', 'specials', 'homeBrands', 'hpSliders']));
	}

	public function yml()
	{
		$file = tempnam(sys_get_temp_dir(), 'YMLGenerator');
		$settings = (new \Bukashk0zzz\YmlGenerator\Settings())
			->setOutputFile($file)
			->setEncoding('UTF-8');
		$shopInfo = (new \Bukashk0zzz\YmlGenerator\Model\ShopInfo())
			->setName('Торговый дом УЭТ (Уралэнерготел)')
			->setCompany('Интернет-магазин Уралэнерготел')
			->setUrl('https://uralenergotel.ru/');
		$currencies = [];
		$currencies[] = (new \Bukashk0zzz\YmlGenerator\Model\Currency())
			->setId('RUB')
			->setRate(1);
		$categories = [];
		$allcategories = Categories::get();
		foreach ($allcategories as $category) {
			$categories[] = (new \Bukashk0zzz\YmlGenerator\Model\Category())
				->setId($category->id)
				->setParentId($category->parent_id)
				->setName($category->name);
		}
		$offers = [];
		$products = DB::table('products')->select(DB::raw('products.id AS id, products.name AS name, products.image AS image, products.in_stock AS in_stock, products.url AS url, categories.name as category_name, categories.id as category_id, brands.name AS brand_name, sku.sku_code AS code, currencies.value as currencyValue, sku.price AS price'))
			->where('can_buy', 1)
			->where('published', 1)
			->join('sku', function ($join) {
				$join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id LIMIT 1)'));
			})
			->join('currencies', 'sku.currency_id', '=', 'currencies.id')
			->join('brands', 'products.brand_id', '=', 'brands.id')
			->join('categories', 'categories.id', '=', DB::raw('(SELECT category_id FROM category_product WHERE category_product.product_id = products.id LIMIT 1)'))
			->cursor();

		foreach ($products as $product) {
			if ($product->price > 0) {
				$offers[] = (new \Bukashk0zzz\YmlGenerator\Model\Offer\OfferCustom())
					->setId($product->id)
					->setVendor($product->brand_name)
					->setVendorCode($product->code)
					->setModel($product->code)
					->setTypePrefix($product->category_name)
					->setAvailable($product->in_stock)
					->setUrl('https://uralenergotel.ru/' . $product->url . '/')
					->setPrice(round($product->price * $product->currencyValue * 1.2, 2))
					->addPicture('https://uralenergotel.ru' . $product->image)
					->setDescription($product->name)
					->setCurrencyId('RUB')
					->setCategoryId($product->category_id)
					->setDelivery('true')
					->setSalesNotes('Минимальная сумма заказа 10 000 рублей.');
			}
		}
		(new \Bukashk0zzz\YmlGenerator\Generator($settings))->generate(
			$shopInfo,
			$currencies,
			$categories,
			$offers
		);
		$response = response(fread(fopen($file, "r"), filesize($file)))->header('Content-type', 'text/xml');
		unlink($file);
		return $response;
	}

	public function sitemap()
	{
		$sitemap = App::make('sitemap');
		$timeZone = 'Asia/Yekaterinburg';
		$isSlash = '/';
		$staticTime = Carbon::create(2018, 10, 01, 0, 0, 0, $timeZone)->toIso8601String();
		$sitemap->add(URL::to('/') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('uralenergotel.yml') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('about') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('about/supply') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('about/brands') . $isSlash, $staticTime, '0.8', 'monthly');
		$brands = Brands::orderBy('updated_at', 'desc')->where('active', '=', 1)->get();
		foreach ($brands as $brand) {
			$updatedAt = Carbon::parse($brand->updated_at, $timeZone)->toIso8601String();
			$sitemap->add(URL::to('brand/' . $brand->url) . $isSlash, $updatedAt, '0.9', 'monthly');
		}
		$sitemap->add(URL::to('about/news') . $isSlash, $staticTime, '0.8', 'monthly');
		$news = News::orderBy('updated_at', 'desc')->where('active', '=', 1)->get();
		foreach ($news as $newsPost) {
			$updatedAt = Carbon::parse($newsPost->updated_at, $timeZone)->toIso8601String();
			$sitemap->add(URL::to('about/news/' . $newsPost->url) . $isSlash, $updatedAt, '0.7', 'monthly');
		}
		$sitemap->add(URL::to('about/deals') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('about/licenses') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('about/partners') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('catalog') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('individualBusiness') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('delivery') . $isSlash, $staticTime, '0.8', 'monthly');
		$delivery = Delivery::orderBy('updated_at', 'desc')->where('url', '!=', '')->get();
		foreach ($delivery as $city) {
			$updatedAt = Carbon::parse($city->updated_at, $timeZone)->toIso8601String();
			$sitemap->add(URL::to('delivery/' . $city->url) . $isSlash, $updatedAt, '0.7', 'monthly');
		}
		$sitemap->add(URL::to('customers') . '/', $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('customers/faq') . '/', $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('customers/howtopay') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('customers/warranty') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('customers/privacypolicy') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('customers/agreement') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('contacts') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('samovyvoz') . $isSlash, $staticTime, '0.8', 'monthly');
		$sitemap->add(URL::to('shkafy-individualnoi-sborki') . $isSlash, $staticTime, '0.8', 'monthly');
		$lockers = Locker::orderBy('updated_at', 'desc')->where('active', '=', 1)->get();
		foreach ($lockers as $locker) {
			$updatedAt = Carbon::parse($locker->updated_at, $timeZone)->toIso8601String();
			$sitemap->add(URL::to('shkafy-individualnoi-sbork/' . $locker->url) . $isSlash, $updatedAt, '0.9', 'monthly');
		}
		$categories = Categories::orderBy('updated_at', 'desc')->where('active', '=', 1)->where('depth', '=', 1)->get();
		foreach ($categories as $category) {
			$previousUrl = 'category/' . $category->url;
			$updatedAt = Carbon::parse($category->updated_at, $timeZone)->toIso8601String();
			$sitemap->add(URL::to($previousUrl) . $isSlash, $updatedAt, '0.9', 'monthly');
			$this->loopSitemapCategories($category, $timeZone, $sitemap, $isSlash, $previousUrl);
		}
		$products = Product::selectRaw('products.url, products.updated_at')->orderBy('updated_at', 'desc')->where('published', '=', 1)->get();
		foreach ($products as $product) {
			$updatedAt = Carbon::parse($product->updated_at, $timeZone)->toIso8601String();
			$sitemap->add(URL::to($product->url) . $isSlash, $updatedAt, '0.9', 'monthly');
		}
		return $sitemap->render('xml');
	}

	private function loopSitemapCategories($category, $timeZone, $sitemap, $isSlash, $url)
	{
		$subCategories = Categories::where('parent_id', '=', $category->id)->get();
		foreach ($subCategories as $subCategory) {
			$previousUrl = $url . '/' . $subCategory->url;
			$updatedAt = Carbon::parse($subCategory->updated_at, $timeZone)->toIso8601String();
			$sitemap->add(URL::to($previousUrl) . $isSlash, $updatedAt, '0.9', 'monthly');
			$this->loopSitemapCategories($subCategory, $timeZone, $sitemap, $isSlash, $previousUrl);
		}
	}

	public function redirect($any)
	{
		$path = implode('/', array_map('rawurlencode', explode('/', $any)));
		$path = '/' . strtolower($path) . '/';
		$redirect = Redirects::where('from', '=', $path)->first();
		return redirect()->to($redirect->to, $redirect->status_code);
	}
	public function redirectMore($any)
	{
		$redirects = Redirects::all();
		foreach ($redirects as $key => $value) {
			$truePath = rtrim($value->from, '*');
			if (strpos('/' . $any . '/', $truePath) !== false) {
				return redirect()->to($value->to, $value->status_code);
			}
		}
	}

	public function getCategories($id)
	{
		$thisCategory = Categories::where('id', '=', $id)->first();
		$categories = array();
		if (empty($thisCategory->parent_id)) {
			$categories['top'] = $thisCategory;
			$subCategories = Categories::where('parent_id', '=', $thisCategory->id)->get();
			$subCategoriesWithUrl = array();
			foreach ($subCategories as $subCategory) {
				$getCategory = Categories::where('id', '=', $subCategory->id)->first();
				$getCategory->url = $thisCategory->url . '/' . $subCategory->url;
				$subCategoriesWithUrl[] = $getCategory;
			}
			$categories['bottom'] = $subCategoriesWithUrl;
		} else {
			$topCategory = Categories::where('id', '=', $thisCategory->parent_id)->first();
			if (empty($topCategory->parent_id)) {
				$thisCategory->url = $topCategory->url . '/' . $thisCategory->url;
				$subCategories = Categories::where('parent_id', '=', $topCategory->id)->get();
				$subCategoriesWithUrl = array();
				foreach ($subCategories as $subCategory) {
					$getCategory = Categories::where('parent_id', '=', $subCategory->id)->first();
					$getCategory->url = $topCategory->url . '/' . $thisCategory->url . '/' . $subCategory->url;
					$subCategoriesWithUrl[] = $getCategory;
				}
				$categories['top'] = $thisCategory;
				$categories['bottom'] = $subCategoriesWithUrl;
				foreach ($subCategories as $subCategory) {
					if (!empty($subCategory->id)) {
						$categories['bottom'] = $subCategories;
					}
				}
			} else {
				$mainCategory = Categories::where('id', '=', $topCategory->parent_id)->first();
				$thisCategory->url = $mainCategory->url . '/' . $topCategory->url . '/' . $thisCategory->url;
				$categories['top'] = $thisCategory;
			}
		}
		return json_encode($categories);
	}

	public function getFilterProducts($id)
	{
		$thisCategory = Categories::where('id', '=', $id)->first();
		$toSearch = array();
		$toSearch[] = $thisCategory->id;
		if (empty($thisCategory->parent_id)) {
			$subCategories = Categories::where('parent_id', '=', $thisCategory->id)->get();
			foreach ($subCategories as $subCategory) {
				if (!empty($subCategory->id)) {
					$toSearch[] = $subCategory->id;
					$subSubCategories = Categories::where('parent_id', '=', $subCategory->id)->get();
					if (!empty($subSubCategories)) {
						foreach ($subSubCategories as $subSubCategory) {
							$toSearch[] = $subSubCategory->id;
						}
					}
				}
			}
		} else {
			$topCategory = Categories::where('id', '=', $thisCategory->parent_id)->first();
			if (empty($topCategory->parent_id)) {
				$subCategories = Categories::where('parent_id', '=', $topCategory->id)->get();
				foreach ($subCategories as $subCategory) {
					if (!empty($subCategory->id)) {
						$toSearch[] = $subCategories->id;
					}
				}
			}
		}
		$products = Product::orderBy('name')->whereIn('category_id', $toSearch)->get();
		foreach ($products as $key => $value) {
			$search_sku = Product::find($products[$key]->id)->sku()->get();
			$brand = Product::find($products[$key]->id)->brand()->first();
			$Skus = array();
			$code = array();
			$price = array();
			foreach ($search_sku as $sku) {
				$Skus[] = $sku->sku;
				$price[] = $sku->price;
				$code[] = $sku->sku_code;
			}
			$Skus = implode(", ", $Skus);
			$code = implode(", ", $code);
			$price = min($price);
			$products[$key]->sku = $Skus;
			$products[$key]->price = $price;
			$products[$key]->sku_code = $code;
			$products[$key]->brand_name = $brand->name;
			$products[$key]->brand_image = $brand->image;
			$products[$key]->brand_url = $brand->url;
		}
		return json_encode($products);
	}

	public function getFilters($id)
	{
		$thisCategory = Categories::where('id', '=', $id)->first();
		$toSearch = array();
		$toSearch[] = $thisCategory->id;
		if (empty($thisCategory->parent_id)) {
			$subCategories = Categories::where('parent_id', '=', $thisCategory->id)->get();
			foreach ($subCategories as $subCategory) {
				if (!empty($subCategory->id)) {
					$toSearch[] = $subCategory->id;
					$subSubCategories = Categories::where('parent_id', '=', $subCategory->id)->get();
					if (!empty($subSubCategories)) {
						foreach ($subSubCategories as $subSubCategory) {
							$toSearch[] = $subSubCategory->id;
						}
					}
				}
			}
		} else {
			$topCategory = Categories::where('id', '=', $thisCategory->parent_id)->first();
			if (empty($topCategory->parent_id)) {
				$subCategories = Categories::where('parent_id', '=', $topCategory->id)->get();
				foreach ($subCategories as $subCategory) {
					if (!empty($subCategory->id)) {
						$toSearch[] = $subCategories->id;
					}
				}
			}
		}
		$products = Product::whereIn('category_id', $toSearch)->get();
		$productsId = array();
		foreach ($products as $product) {
			$productsId[] = $product->id;
		}
		$additionalOptions = additionalOptions::whereIn('product_id', $productsId)->get();
		$addOptId = array();
		foreach ($additionalOptions as $additionalOption) {
			$addOptId[] = $additionalOption->option_value_id;
		}
		$optionValues = OptionValues::orderBy('value')->whereIn('id', $addOptId)->get();
		$checkOptVal = array();
		foreach ($optionValues as $optionValue) {
			$checkOptVal[] = $optionValue->option_id;
		}
		$checkOptVal = array_unique($checkOptVal);
		$optionNames = Options::whereIn('id', $checkOptVal)->get();
		$filters = array();
		$brands = array();
		foreach ($products as $product) {
			$brand = Brands::where('id', '=', $product->brand_id)->first();
			$brands[] = $brand->id;
		}
		$brands = array_unique($brands);
		foreach ($optionNames as $key => $optionName) {
			$filters[$key]['name'] = $optionName->name;
			foreach ($optionValues as $optionkey => $optionValue) {
				if ($optionName->id == $optionValue->option_id) {
					$filters[$key]['options'][] = array('name' => $optionValue->value, 'selected' => false);
				}
			}
		}
		foreach ($brands as $brandId) {
			$thisBrand = Brands::where('id', '=', $brandId)->first();
			$filters[] = array('name' => 'Производитель', 'options' => array(array('name' => $thisBrand->name, 'selected' => false)));
		}
		return json_encode($filters);
	}

	public function filterAll(Request $request)
	{
		$thisCategory = Categories::where('id', '=', $request->category_id)->first();
		$toSearch = array();
		$toSearch[] = $thisCategory->id;
		if (empty($thisCategory->parent_id)) {
			$subCategories = Categories::where('parent_id', '=', $thisCategory->id)->get();
			foreach ($subCategories as $subCategory) {
				if (!empty($subCategory->id)) {
					$toSearch[] = $subCategory->id;
					$subSubCategories = Categories::where('parent_id', '=', $subCategory->id)->get();
					if (!empty($subSubCategories)) {
						foreach ($subSubCategories as $subSubCategory) {
							$toSearch[] = $subSubCategory->id;
						}
					}
				}
			}
		} else {
			$topCategory = Categories::where('id', '=', $thisCategory->parent_id)->first();
			if (empty($topCategory->parent_id)) {
				$subCategories = Categories::where('parent_id', '=', $topCategory->id)->get();
				foreach ($subCategories as $subCategory) {
					if (!empty($subCategory->id)) {
						$toSearch[] = $subCategories->id;
					}
				}
			}
		}
		$filters = $request->filters;
		$optionsSelected = array();
		foreach ($filters as $filter) {
			foreach ($filter['options'] as $options) {
				if ($options['selected'] == 'true') {
					$optionsSelected[$filter['name']][] = $options['name'];
				}
			}
		}
		$OptValIds = array();
		foreach ($optionsSelected as $option => $values) {
			foreach ($values as $opt) {
				if ($option != 'Производитель') {
					$getOption = Options::where('name', '=', $option)->first();
					$checkOptVal = OptionValues::where('value', '=', $opt)->where('option_id', '=', $getOption->id)->first();
					$OptValIds[] = $checkOptVal->id;
				}
			}
		}
		$additionalOptions = additionalOptions::whereIn('option_value_id', $OptValIds)->get();
		$requiredProducts = array();
		foreach ($additionalOptions as $option) {
			$requiredProducts[] = $option->product_id;
		}
		$preProducts = Product::whereIn('category_id', $toSearch)->whereIn('id', $requiredProducts)->get();
		$notFound = array();
		foreach ($preProducts as $preProduct) {
			foreach ($OptValIds as $option) {
				$check = additionalOptions::where('option_value_id', '=', $option)->where('product_id', '=', $preProduct->id)->first();
				if (empty($check)) {
					$notFound[] = $preProduct->id;
				}
			}
		}
		$preProductsId = array();
		foreach ($preProducts as $productId) {
			$preProductsId[] = $productId->id;
		}
		foreach ($preProductsId as $key => $value) {
			foreach ($notFound as $id) {
				if ($id == $value) {
					unset($preProductsId[$key]);
				}
			}
		}
		$preAddOpt = additionalOptions::whereIn('option_value_id', $OptValIds)->whereIn('product_id', $preProductsId)->get();
		$productsIdUpd = array();
		foreach ($preAddOpt as $optId) {
			$productsIdUpd[] = $optId->product_id;
		}
		$products = Product::whereIn('id', $productsIdUpd)->get();
		$productsId = array();
		foreach ($products as $product) {
			$productsId[] = $product->id;
		}
		$productsBrands = array();
		foreach ($products as $product) {
			$productsBrands[] = $product->brand_id;
		}
		$productsBrands = array_unique($productsBrands);
		$newAdditionalOptions = additionalOptions::whereIn('product_id', $productsId)->get();
		$addOptId = array();
		foreach ($newAdditionalOptions as $additionalOption) {
			$addOptId[] = $additionalOption->option_value_id;
		}
		$optionValues = OptionValues::orderBy('value')->whereIn('id', $addOptId)->get();
		$checkOptVal = array();
		foreach ($optionValues as $optionValue) {
			$checkOptVal[] = $optionValue->option_id;
		}
		$checkOptVal = array_unique($checkOptVal);
		$optionNames = Options::whereIn('id', $checkOptVal)->get();
		$selectedOpt = array();
		$fullOptions = array();
		$allBrands = array();
		foreach ($optionsSelected as $option => $values) {
			if ($optionsSelected[$option] != 'Производитель') {
				$getOption = Options::where('name', '=', $option)->first();
				$fullOptions[] = $getOption->id;
				foreach ($values as $opt) {
					$checkOptVal = OptionValues::where('value', '=', $opt)->where('option_id', '=', $getOption->id)->first();
					$selectedOpt[] = $checkOptVal->value;
				}
			} else {
				foreach ($values as $opt) {
					$allBrands[] = $opt;
				}
			}
		}
		$filtersUpd = array();
		$readyOptions = array();
		foreach ($optionNames as $key => $optionName) {
			$filtersUpd[$key]['name'] = $optionName->name;
			foreach ($fullOptions as $fullOption) {
				if ($optionName->id == $fullOption) {
					$checkProducts = Product::whereIn('category_id', $toSearch)->get();
					$productsIdX = array();
					foreach ($checkProducts as $product) {
						$productsIdX[] = $product->id;
					}
					$newAdditionalOptionsX = additionalOptions::whereIn('product_id', $productsId)->get();
					$addOptIdX = array();
					foreach ($newAdditionalOptionsX as $additionalOption) {
						$addOptIdX[] = $additionalOption->option_value_id;
					}
					$getAllOptVal = OptionValues::orderBy('value')->whereIn('id', $addOptId)->where('option_id', '=', $optionName->id)->get();
					$selBefore = array();
					foreach ($getAllOptVal as $optVal) {
						foreach ($selectedOpt as $selected) {
							if ($selected == $optVal->value) {
								$filtersUpd[$key]['options'][] = array('name' => $selected, 'selected' => true);
								$selBefore[] = $selected;
								$readyOptions[] = $optVal->id;
							}
						}
					}
				}
			}
			if (!empty($readyOptions)) {
				foreach ($optionValues as $optionkey => $optionValue) {
					foreach ($readyOptions as $id) {
						if ($id == $optionValue->id) {
							unset($optionValues[$optionkey]);
						}
					}
				}
			}
			foreach ($optionValues as $optionkey => $optionValue) {
				if ($optionValue->option_id == $optionName->id) {
					$filtersUpd[$key]['options'][] = array('name' => $optionValue->value, 'selected' => false);
				}
			}
		}
		$filtersUpd[] = array('name' => 'Производитель', 'options' => array(array('name' => 'qwq', 'selected' => true)));
		$thisBrands = Brands::whereIn('id', $productsBrands)->get();
		foreach ($thisBrands as $key => $value) {
			foreach ($allBrands as $brand) {
				if ($value->name == $brand) {
					$filtersUpd[] = array('name' => 'Производитель', 'options' => array(array('name' => $brand, 'selected' => true)));
				} else {
					$filtersUpd[] = array('name' => 'Производитель', 'options' => array(array('name' => $brand, 'selected' => false)));
				}
			}
		}

		$log = $optionsSelected;
		foreach ($products as $key => $value) {
			$search_sku = Product::find($products[$key]->id)->sku()->get();
			$brand = Product::find($products[$key]->id)->brand()->first();
			$Skus = array();
			$code = array();
			$price = array();
			foreach ($search_sku as $sku) {
				$Skus[] = $sku->sku;
				$price[] = $sku->price;
				$code[] = $sku->sku_code;
			}
			$Skus = implode(", ", $Skus);
			$code = implode(", ", $code);
			$price = min($price);
			$products[$key]->sku = $Skus;
			$products[$key]->price = $price;
			$products[$key]->sku_code = $code;
			$products[$key]->brand_name = $brand->name;
			$products[$key]->brand_image = $brand->image;
			$products[$key]->brand_url = $brand->url;
		}
		return response()->json([
			'success' => true,
			'products' => $products,
			'filters' => $filtersUpd,
			'log' => $log,
		]);
	}

	protected function connectedProducts($ids)
	{
		$products = DB::table('products')->select(DB::raw('products.*, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
			->join('sku', function ($join) {
				$join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
			})
			->join('currencies', 'sku.currency_id', '=', 'currencies.id')
			->join('brands', 'products.brand_id', '=', 'brands.id')
			->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
			->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
			->whereIn('products.id', $ids)
			->get();
		if (isset(Auth::user()->discountLevel->base_discount)) {
			$discount = Auth::user()->discountLevel->base_discount;
			foreach ($products as $product) {
				$brandDiscount = BrandDiscount::where('discount_level_id', '=', Auth::user()->discountLevel->id)->where('brand_id', '=', $product->brand_id)->first();
				if (!$brandDiscount) {
					$calculatedDiscount = $discount;
				} else {
					$calculatedDiscount = $brandDiscount->discount;
				}
				$personalDiscount = Auth::user()->discount;
				$calculatedDiscount = $personalDiscount + $calculatedDiscount;
				$product->old_price = $product->old_price - $product->old_price * $calculatedDiscount / 100;
				$product->old_price = $product->old_price + $product->old_price * Auth::user()->country->vat / 100;
				$product->price = $product->price - $product->price * $calculatedDiscount / 100;
				$product->price = $product->price + $product->price * Auth::user()->country->vat / 100;
			}
		}
		return $products;
	}
}
