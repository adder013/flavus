<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
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
use App\Partners;
use App\Specials;
use App\Groups;
use App\SpecialsGroupConnections;
use App\SpecialsProductConnections;
use App\Locker;
use App\LockersOrders;
use App\LockersTable;
use App\LockerSliders;
use App\LockersBrandImages;
use App\News;
use App\Delivery;
use App\Stickers;
use App\metaStaticPage;
use App\MetaPatterns;
use App\CustomFields;
use App\BrandDiscount;
use App\HomeBrands;
use App\BrandTag;
use App\BrandIndustry;
use App\Customer;
use App\FAQCategory;
use App\FAQ;
use App\Libraries\FilterClass;
use Cookie;
use App\StickersConnection;
use App\sku;
use Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends ShopController
{
	public function showAbout()
	{
		$meta = metaStaticPage::where('page', '=', 'О компании')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
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
		$russia = Delivery::where('country', '=', 'Россия')->count();
		$belarus = Delivery::where('country', '=', 'Беларусь')->count();
		$armenia = Delivery::where('country', '=', 'Армения')->count();
		$kazakhstan = Delivery::where('country', '=', 'Казахстан')->count();
		$kyrgyzstan = Delivery::where('country', '=', 'Кыргызстан')->count();
		return view('about', compact(['metaTitle', 'metaDesc', 'homeBrands', 'russia', 'belarus', 'armenia', 'kazakhstan', 'kyrgyzstan']));
	}

	public function showBrands()
	{
		$meta = metaStaticPage::where('page', '=', 'Бренды')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		$brands = Brands::orderBy('name')->where('active', '=', 1)->get();
		$brandsLetters = array();
		foreach ($brands as $brand) {
			$firstLetter = mb_substr($brand->name, 0, 1);
			$brandsLetters[$firstLetter][] = $brand;
		}
		$tags = BrandTag::orderBy('sort_position')->get();
		$brandsTags = array();
		foreach ($tags as $tag) {
			$brandsTags[$tag->name] = $tag->brands->where('active', 1);
		}
		$industries = BrandIndustry::orderBy('sort_position')->get();
		$brandsIndustries = array();
		foreach ($industries as $industry) {
			$brandsIndustries[$industry->name] = $industry->brands->where('active', 1);
		}
		return view('brands', compact(['brands', 'brandsLetters', 'brandsTags', 'brandsIndustries', 'metaTitle', 'metaDesc']));
	}

	public function showBrand($url)
	{
		$pathCorrection = 'brand/'; // REQUIRED VARIABLE/CHANGEABLE
		$FilterClass = new FilterClass();
		$tryingToFilterNothng = strpos($url, '/filters') ? true : false;
		// Detecting if we are filtering
		$checkFilters = explode('filters', $url);
		$pagePath = $pathCorrection . $checkFilters[0];
		$brandUrl = trim($checkFilters[0], '/'); // CHANGEABLE
		if (isset($checkFilters[1])) {
			$receivedFilters = !empty($checkFilters[1]) ? explode('/', trim($checkFilters[1], '/')) : false;
		} else {
			$receivedFilters = false;
		}
		if ($receivedFilters == false && $tryingToFilterNothng == true) {
			return redirect('/' . $pagePath);
		}
		$brand = Brands::where('url', '=', $brandUrl)->first(); // CHANGEABLE
		if (!$brand) {
			return redirect('/about/brands');
		}
		$productsIdAvailable = Product::where('brand_id', '=', $brand->id)->pluck('id')->all(); // REQUIRED VARIABLE/CHANGEABLE
		$forgetCookies = Cookie::get('last_category');
		if (strpos($forgetCookies, $pagePath) === false || empty($forgetCookies)) {
			$inStock = 2;
			$minPrice = 0;
			$maxPrice = 100000000;
			$paginate = 10;
			$sort = false;
			Cookie::queue(Cookie::forget('uet_sort'));
			Cookie::queue(Cookie::forget('perpage'));
			Cookie::queue(Cookie::forget('instock'));
			Cookie::queue(Cookie::forget('minprice'));
			Cookie::queue(Cookie::forget('maxprice'));
		} else {
			$inStock = Cookie::get('instock') !== null ? (intval(Cookie::get('instock')) - 1) : 2;
			$minPrice = Cookie::get('minprice') !== null ? intval(Cookie::get('minprice')) : 0;
			$maxPrice = Cookie::get('maxprice') !== null ? intval(Cookie::get('maxprice')) : 100000000;
			$paginate = Cookie::get('perpage') != null ? intval(Cookie::get('perpage')) : 10;
			$sort = Cookie::get('uet_sort') !== null ? Cookie::get('uet_sort') : false;
		}
		Cookie::queue('last_category', $pagePath, 60);
		switch ($sort) {
			case 'priceASC':
				$sortFiled = 'sku.price*currencies.nominal*currencies.value';
				$sortDirection = 'ASC';
				break;
			case 'priceDESC':
				$sortFiled = 'sku.price*currencies.nominal*currencies.value';
				$sortDirection = 'DESC';
				break;
			case 'nameASC':
				$sortFiled = 'products.name';
				$sortDirection = 'ASC';
				break;
			default:
				$sortFiled = 'sort_brand_products.sort_position';
				$sortDirection = 'ASC';
				break;
		}
		// Get required paginated products
		if (!$receivedFilters) {
			$products = $FilterClass->getUnfilteredProductsForBrands($inStock, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate, $productsIdAvailable, $brand);  // REQUIRED VARIABLE/CHANGEABLE
		} else {
			$data = $FilterClass->getFilteredProductsForBrands($receivedFilters, $inStock, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate, $productsIdAvailable, $brand);  // REQUIRED VARIABLE/CHANGEABLE
			$productsFilteredId = $data['productsID'];
			$products = $data['products'];
		}
		// Max Possible Price in this Category
		$maxPrice = sku::whereIn('product_id', $productsIdAvailable)->max('price');
		// Amount of Products
		$countedProducts = $products->total();
		$possibleCategories = DB::table('category_product')
			->select('category_id')
			->whereIn('product_id', $productsIdAvailable)
			->get()
			->pluck('category_id')
			->unique();
		$ids = array();
		foreach ($possibleCategories as $categoryId) {
			$ids[] = $this->getParentCategories($categoryId);
		}
		$ids = implode(', ', $ids);
		$ids = explode(', ', $ids);
		$categoriesId = array_unique($ids);
		// Get all Options to Filter
		if (!$receivedFilters) {
			$filters = $FilterClass->getFiltersForBrands($brand, $productsIdAvailable, $categoriesId, $pagePath);
		} else {
			$filters = $FilterClass->getSelectedFiltersForBrands($brand, $productsIdAvailable, $productsFilteredId, $categoriesId, $receivedFilters, $pagePath);
		}
		$metaInsert = $receivedFilters ? $FilterClass->getMeta($receivedFilters, 0) : '';
		$pageMetaPatterns = MetaPatterns::where('type', '=', 'Бренды')->first();
		$metaTitle = str_replace('  ', ' ', $pageMetaPatterns->metaTitleStartPoint . ' ' . $brand->metaTitle . ' ' . $metaInsert . ' ' . $pageMetaPatterns->metaTitleEndPoint);
		$metaDesc = str_replace('  ', ' ', $pageMetaPatterns->metaDescriptionStartPoint . ' ' . $brand->metaDescription . ' ' . $metaInsert . ' ' . $pageMetaPatterns->metaDescriptionEndPoint);
		$breadcrumb[$brand->id]['name'] = $brand->name;
		$breadcrumb[$brand->id]['url'] = '/brand/' . $brand->url;
		$pagePath = '/' . $pagePath;
		$h1 = $brand->name . ', ' . $metaInsert;
		$h1 = trim($h1, ', ');
		// Brand Exlusive
		$brandCategories = Categories::whereIn('id', $categoriesId)->where('active', '=', 1)->where('depth', '!=', 1)->get();
		foreach ($brandCategories as $key => $brandCategory) {
			$check = $brandCategory->products->where('brand_id', '=', $brand->id)->first();
			if (!$check) {
				unset($brandCategories[$key]);
				continue;
			}
			$buildPath = $this->buildPath($brandCategory->parent_id);
			$buildPath = explode('/', $buildPath);
			$buildPath = array_reverse($buildPath);
			$buildPath = implode('/', $buildPath);
			$buildPath = $buildPath . '/' . $brandCategory->url . '/filters/brand=' . $brand->url;
			$brandCategory->path = $buildPath;
			$anyImage = Product::where(
				'id',
				DB::table('sort_products')
					->where('category_id', $brandCategory->id)
					->orderBy('sort_position')
					->pluck('product_id')
					->first()
			)
				->pluck('image')
				->first();
			$brandCategory->preview = $anyImage;
		}
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
				$old_price = $product->old_price - $product->old_price * $calculatedDiscount / 100;
				$product->old_price = $old_price + $old_price * Auth::user()->country->vat / 100;
				$price = $product->price - $product->price * $calculatedDiscount / 100;
				$product->price = $price + $price * Auth::user()->country->vat / 100;
			}
		} else {
			foreach ($products as $product) {
				$product->old_price = $product->old_price + $product->old_price * 20 / 100;
				$product->price = $product->price + $product->price * 20 / 100;
			}
		}
		return view('brand', compact(['brandCategories', 'brand', 'products', 'filters', 'maxPrice', 'countedProducts', 'metaTitle', 'metaDesc', 'breadcrumb', 'pagePath', 'h1']));
	}

	public function showLicense()
	{
		$meta = metaStaticPage::where('page', '=', 'Лицензии')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('license', compact(['metaTitle', 'metaDesc']));
	}

	public function showPartners()
	{
		$partners = Partners::all();
		$meta = metaStaticPage::where('page', '=', 'Партнеры')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('partners', compact(['partners', 'metaTitle', 'metaDesc']));
	}

	public function showVacancies()
	{
		$metaTitle = 'Вакансии | торговый дом УЭТ';
		return view('vacancies', compact(['metaTitle']));
	}

	public function showVacancy()
	{
		$metaTitle = 'Вакансия | торговый дом УЭТ';
		if (basename(url()->current()) === 'active-sales-manager') {
			$metaTitle = 'Активный менеджер по продажам | торговый дом УЭТ';
		} else if (basename(url()->current()) === 'sales-manager') {
			$metaTitle = 'Менеджер по продажам | торговый дом УЭТ';
		}
		return view('vacancy', compact(['metaTitle']));
	}

	public function showVacancyConditions()
	{
		$metaTitle = 'Условия работы | торговый дом УЭТ';
		return view('vacancyConditions', compact(['metaTitle']));
	}

	public function showTDLanding()
	{
		$meta = metaStaticPage::where('page', '=', 'Выгоднее, чем на заводе')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('tdLanding', compact(['metaTitle', 'metaDesc']));
	}

	public function showSpecials()
	{
		$meta = metaStaticPage::where('page', '=', 'Новости производителей')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		$specials = Specials::orderBy('created_at', 'desc')->where('active', '=', 1)->get();
		return view('specials', compact(['specials', 'metaTitle', 'metaDesc']));
	}

	public function showDeal($url)
	{
		// This is a copy of FILTER PAGE without ANY filters
		$FilterClass = new FilterClass();
		$deal = Specials::where('url', '=', $url)->firstOrFail();
		if (!$deal) {
			return redirect('/about/deals');
		}
		$dealGroups = SpecialsGroupConnections::where('special_id', '=', $deal->id)->get();
		$dealProducts = SpecialsProductConnections::where('special_id', '=', $deal->id)->pluck('product_id')->all();
		$forgetCookies = Cookie::get('last_category');
		$productIds = array();
		foreach ($dealGroups as $group) {
			$groupProducts = Groups::where('group_names_id', '=', $group->group_name_id)->pluck('product_id')->all();
			foreach ($groupProducts as $gProduct) {
				$productIds[] = $gProduct;
			}
		}
		$productsIdAvailable = array_merge($dealProducts, $productIds);
		$forgetCookies = Cookie::get('last_category');
		if (strpos($forgetCookies, $url) === false || empty($forgetCookies)) {
			$inStock = 2;
			$minPrice = 0;
			$maxPrice = 100000000;
			$paginate = 10;
			$sort = false;
			Cookie::queue(Cookie::forget('uet_sort'));
			Cookie::queue(Cookie::forget('perpage'));
			Cookie::queue(Cookie::forget('instock'));
			Cookie::queue(Cookie::forget('minprice'));
			Cookie::queue(Cookie::forget('maxprice'));
		} else {
			$inStock = Cookie::get('instock') !== null ? (intval(Cookie::get('instock')) - 1) : 2;
			$minPrice = Cookie::get('minprice') !== null ? intval(Cookie::get('minprice')) : 0;
			$maxPrice = Cookie::get('maxprice') !== null ? intval(Cookie::get('maxprice')) : 100000000;
			$paginate = Cookie::get('perpage') != null ? intval(Cookie::get('perpage')) : 10;
			$sort = Cookie::get('uet_sort') !== null ? Cookie::get('uet_sort') : false;
		}
		Cookie::queue('last_category', $url, 60);
		switch ($sort) {
			case 'priceASC':
				$sortFiled = 'sku.price*currencies.nominal*currencies.value';
				$sortDirection = 'ASC';
				break;
			case 'priceDESC':
				$sortFiled = 'sku.price*currencies.nominal*currencies.value';
				$sortDirection = 'DESC';
				break;
			case 'nameASC':
				$sortFiled = 'products.name';
				$sortDirection = 'ASC';
				break;
			default:
				$sortFiled = 'products.name';
				$sortDirection = 'ASC';
				break;
		}
		$products = $FilterClass->getUnfilteredProductsForDeals($inStock, $productsIdAvailable, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate);
		// Max Possible Price in this Category
		$maxPrice = sku::whereIn('product_id', $productsIdAvailable)->max('price');
		// Amount of Products
		$countedProducts = $products->total();
		$metaTitle = $deal->metaTitle;
		$metaDesc = $deal->metaDescription;
		$h1 = $deal->name;
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
				$old_price = $product->old_price - $product->old_price * $calculatedDiscount / 100;
				$product->old_price = $old_price + $old_price * Auth::user()->country->vat / 100;
				$price = $product->price - $product->price * $calculatedDiscount / 100;
				$product->price = $price + $price * Auth::user()->country->vat / 100;
			}
		} else {
			foreach ($products as $product) {
				$product->old_price = $product->old_price + $product->old_price * 20 / 100;
				$product->price = $product->price + $product->price * 20 / 100;
			}
		}
		$previous_news = Specials::orderBy('created_at', 'desc')->where('id', '!=', $deal->id)->limit(5)->get();
		return view('deal', compact(['deal', 'products', 'countedProducts', 'maxPrice', 'metaTitle', 'metaDesc', 'h1', 'previous_news']));
	}

	public function showContacts()
	{
		$meta = metaStaticPage::where('page', '=', 'Контакты')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('contacts', compact(['metaTitle', 'metaDesc']));
	}
	
	public function showIndividualBusiness()
	{
		$meta = metaStaticPage::where('page', '=', 'Контакты')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('individualBusiness', compact(['metaTitle', 'metaDesc']));
	}

	public function showPickup()
	{
		$meta = metaStaticPage::where('page', '=', 'Пункты самовывоза')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('pickup', compact(['metaTitle', 'metaDesc']));
	}

	public function showCustomers()
	{
		$meta = metaStaticPage::where('page', '=', 'Покупателям')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('customers', compact(['metaTitle', 'metaDesc']));
	}

	public function showHowtobuy()
	{
		$meta = metaStaticPage::where('page', '=', 'Как сделать заказ')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('howtobuy', compact(['metaTitle', 'metaDesc']));
	}

	public function showDelivery()
	{
		$meta = metaStaticPage::where('page', '=', 'Доставка')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		$deliveryCities = Delivery::whereRaw('url <> ""')->get();
		$allDelivery = array();
		foreach ($deliveryCities as $delivery) {
			$firstLetter = mb_substr($delivery->city, 0, 1);
			$allDelivery[$delivery->country][$firstLetter][] = $delivery;
		}
		return view('delivery', compact(['allDelivery', 'metaTitle', 'metaDesc']));
	}

	public function catalog()
	{
		$meta = metaStaticPage::where('page', '=', 'Каталог')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('catalog', compact(['metaTitle', 'metaDesc']));
	}

	public function showDeliveryCity($url)
	{
		if (Delivery::where('url', '=', $url)->firstOrfail()->free_delivery == 1) {
			$freeCities = Delivery::where('free_delivery', '=', 1)->get();
			foreach ($freeCities as $city) {
				if (strpos(\Request::url(), 'delivery/' . $city->url) !== false) {
					$cities = [
						'Екатеринбург',
						'Верхняя Пышма',
						'Среднеуральск',
						'Берёзовский',
						'Монетный',
						'Исток',
						'Арамиль',
						'Верхнее Дуброво',
						'Заречный',
						'Белоярский',
						'Асбест',
						'Двуреченск',
						'Сысерть',
						'Полевской',
						'Дегтярск',
						'Ревда',
						'Первоуральск',
						'Билимбай',
					];
					return view('freeDelivery', compact('cities'));
				}
			}
		}
		$thisCity = Delivery::where('url', '=', $url)->firstOrfail();
		$deliveryCities = Delivery::where('region', '=', $thisCity->region)->where('id', '!=', $thisCity->id)->get();
		$metaTitle = $thisCity->metaTitle;
		$metaDesc = $thisCity->metaDescription;
		return view('deliveryCity', compact(['deliveryCities', 'thisCity', 'metaTitle', 'metaDesc']));
	}

	public function showFreeDelivery()
	{
		return view('freeDelivery');
	}

	public function showHowtopay()
	{
		$meta = metaStaticPage::where('page', '=', 'Оплата')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('howtopay', compact(['metaTitle', 'metaDesc']));
	}

	public function showWarranty()
	{
		$meta = metaStaticPage::where('page', '=', 'Гарантия')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('warranty', compact(['metaTitle', 'metaDesc']));
	}

	public function showPrivacyPolicy()
	{
		$meta = metaStaticPage::where('page', '=', 'Политика защиты и обработки персональных данных')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('privacypolicy', compact(['metaTitle', 'metaDesc']));
	}

	public function showAgreement()
	{
		$meta = metaStaticPage::where('page', '=', 'Согласие на обработку персональных данных')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('agreement', compact(['metaTitle', 'metaDesc']));
	}

	public function showFaq()
	{
		$meta = metaStaticPage::where('page', '=', 'Частые вопросы')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		$faq = FAQCategory::orderBy('sort_position')->with('questions')->get();
		foreach ($faq as $category) {
			foreach ($category->questions as $question) {
				$question->answer = str_replace('sale@uralenergotel.ru', $this->contacts->email, $question->answer);
			}
		}

		return view('faq', compact(['metaTitle', 'metaDesc', 'faq']));
	}

	public function showIndividualLockers()
	{
		$lockers = Locker::where('active', '=', 1)->orderBy('sort_position')->get();
		$meta = metaStaticPage::where('page', '=', 'Сборка шкафов на заказ')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		return view('individualLockers', compact(['lockers', 'metaTitle', 'metaDesc']));
	}

	public function showIndividualLockersPage($url)
	{
		$locker = Locker::where('url', '=', $url)->with('orders')->with('sliders')->with('tables')->with('images')->with('brands')->firstOrFail();
		$staticImages = glob('img/static/ind_lockers/preview/*.*');
		$metaTitle = $locker->meta_title;
		$metaDesc = $locker->meta_description;
		return view('individualLockersPage', compact(['locker', 'staticImages', 'metaTitle', 'metaDesc']));
	}

	public function showNews()
	{
		$meta = metaStaticPage::where('page', '=', 'Новости Уралэнерготел')->first();
		$metaTitle = $meta->metaTitle;
		$metaDesc = $meta->metaDescription;
		$allNews = News::orderBy('created_at', 'DESC')->where('active', '=', 1)->get();
		return view('news', compact(['allNews', 'metaTitle', 'metaDesc']));
	}

	public function showNewsPage($url)
	{
		$news = News::where('url', '=', $url)->firstOrFail();
		$images = glob('storage/news/' . $news->id . '/slider/*.*');
		$previous_news = News::orderBy('created_at', 'desc')->where('id', '!=', $news->id)->limit(5)->get();
		$metaTitle = $news->metaTitle;
		$metaDesc = $news->metaDescription;
		$news->body = str_replace('sale@uralenergotel.ru', $this->contacts->email, $news->body);
		return view('newsPage', compact(['news', 'images', 'previous_news', 'metaTitle', 'metaDesc']));
	}

	public function showSupply()
	{
		return view('supply', [
			'customers' => Customer::orderBy('sort_position')
				->where('active', true)
				->get(),
			'tags' => BrandTag::orderBy('sort_position')->get()
		]);
	}
}
