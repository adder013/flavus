<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App;
use App\User;
use App\Product;
use App\Brands;
use App\Groups;
use App\GroupsBlocks;
use App\Tabs;
use App\Tags;
use App\CategoryGroupsBlocks;
use App\GroupNames;
use App\ProductGroupsBlocks;
use App\MenuOptions;
use App\Contacts;
use App\Categories;
use App\TextOptions;
use App\CalcGroups;
use App\Delivery;
use App\Options;
use App\additionalOptions;
use App\OptionValues;
use App\CustomFields;
use App\sku;
use App\Libraries\FilterClass;
use App\MetaPatterns;
use App\StickersConnection;
use App\Stickers;
use App\ProductFiles;
use App\CartProduct;
use App\BrandDiscount;
use App\Order;
use App\OrderItem;
use DB;
use Cookie;
use Auth;

class ShopController extends AppController
{

    public function showCategory($url)
    {
        $tryingToFilterNothng = strpos($url, '/filters') ? true : false;
        // Detecting if we are filtering
        $checkFilters = explode('filters', $url);
        // In case filters enable get em to array
        $categoryPath = $checkFilters[0];
        if (isset($checkFilters[1])) {
            $receivedFilters = !empty($checkFilters[1]) ? explode('/', trim($checkFilters[1], '/')) : false;
        } else {
            $receivedFilters = false;
        }
        if ($receivedFilters == false && $tryingToFilterNothng == true) {
            return redirect('/category/' . $categoryPath);
        }
        // Detect which category it is
        $detectCategory = $this->detectCategory($categoryPath);
        if (!$detectCategory) {
            return redirect('/catalog');
        }
        // And now get a full category with all subcategories
        $onPageCategories = $this->getLoopCategories($detectCategory->id, false);
        $onPageCategories = $onPageCategories[0];
        $onPageCategories->brandCategories = Categories::orderBy('sort_position')->where('active', '=', 1)->where('parent_id', $onPageCategories->id)->where('brand_id', '!=', null)->get();
        // Get all Categories Id to know which products can be shown
        $categoriesToLook = $this->getSubCategoriesIdWithShowContent($onPageCategories->id);
        $categoriesToLook = explode(', ', $categoriesToLook);
        $forgetCookies = Cookie::get('last_category');
        if (strpos($forgetCookies, $categoryPath) === false || empty($forgetCookies)) {
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
        Cookie::queue('last_category', $categoryPath, 60);
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
                $sortFiled = 'sort_products.sort_position';
                $sortDirection = 'ASC';
                break;
        }
        // Get required paginated products
        $FilterClass = new FilterClass();
        if (!$receivedFilters) {
            $products = $FilterClass->getUnfilteredProducts($inStock, $categoriesToLook, $onPageCategories->id, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate);
        } else {
            $data = $FilterClass->getFilteredProducts($receivedFilters, $inStock, $categoriesToLook, $onPageCategories->id, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate);
            $productsFilteredId = $data['productsID'];
            $products = $data['products'];
        }
        // Max Possible Price in this Category
        $productIds = collect(DB::table('category_product')
            ->select('product_id')
            ->whereIn('category_id', $categoriesToLook)
            ->get())->pluck('product_id')->unique();
        $maxPrice = sku::whereIn('product_id', $productIds)->max('price');
        // Amount of Products
        $countedProducts = $products->total();
        // Get all Options to Filter
        if (!$receivedFilters) {
            $filters = $FilterClass->getFilters($onPageCategories->id, $productIds, $categoryPath);
        } else {
            $filters = $FilterClass->getSelectedFilters($onPageCategories->id, $productIds, $productsFilteredId, $receivedFilters, $categoryPath);
        }
        $metaInsert = $receivedFilters ? $FilterClass->getMeta($receivedFilters, $categoryPath) : '';
        if (!$metaInsert && $receivedFilters != false) {
            return redirect('/category/' . $categoryPath);
        }
        $categoryMetaPatterns = MetaPatterns::where('type', '=', 'Категории')->first();
        $metaTitle = str_replace('  ', ' ', $categoryMetaPatterns->metaTitleStartPoint . ' ' . $onPageCategories->meta_title . ' ' . $onPageCategories->moreinfo . ' ' . $metaInsert . ' ' . $categoryMetaPatterns->metaTitleEndPoint);
        $metaDesc = str_replace('  ', ' ', $categoryMetaPatterns->metaDescriptionStartPoint . ' ' . $onPageCategories->meta_description . ' ' . $metaInsert . ' ' . $categoryMetaPatterns->metaDescriptionEndPoint);
        $h1 = $onPageCategories->name . ', ' . $metaInsert;
        $h1 = trim($h1, ', ');
        if (empty($onPageCategories->parent_id)) {
            $breadcrumb[$onPageCategories->id]['name'] = $onPageCategories->name;
            $breadcrumb[$onPageCategories->id]['url'] = '/category/' . $onPageCategories->url;
        } else {
            $breadcrumb = $this->getLoopParents($onPageCategories, false);
        }
        $desciptionId = array();
        foreach ($breadcrumb as $key => $value) {
            $desciptionId[] = $key;
        }
        $desciptionId = array(end($desciptionId)); // Only this category description
        $mainDescription = $this->getCategoryDescription($desciptionId);
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
        return view('category', compact(['onPageCategories', 'products', 'filters', 'maxPrice', 'countedProducts', 'metaTitle', 'metaDesc', 'breadcrumb', 'mainDescription', 'h1']));
    }

    public function showProduct($url)
    {
        if ($url !== strtolower($url)) {
            return \Redirect::to(strtolower($url), 302);
        }
        $product = DB::table('products')->select(DB::raw('products.*, category_product.category_id as category_id, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.sku_code AS sku_code, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
            ->join('sku', function ($join) {
                $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
            })
            ->join('category_product', function ($join) {
                $join->on('category_product.category_id', '=', DB::raw('(SELECT category_id FROM category_product WHERE category_product.product_id = products.id LIMIT 1)'));
            })
            ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
            ->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
            ->whereRaw("LOWER(products.url) = ?", strtolower($url))
            ->first();
        if (!$product) {
            abort(404);
        }
        $onPageCategories = $this->getLoopCategories($product->category_id, false);
        $onPageCategories = $onPageCategories[0];
        if (empty($onPageCategories->parent_id)) {
            $breadcrumb[$onPageCategories->id]['name'] = $onPageCategories->name;
            $breadcrumb[$onPageCategories->id]['url'] = '/category/' . $onPageCategories->url;
        } else {
            $breadcrumb = $this->getLoopParents($onPageCategories, false);
        }
        $breadcrumb[] = array(
            'name' => $product->name,
            'url' => $product->url
        );
        $img = ProductFiles::where('product_id', '=', $product->id)->where('type', '=', 2)->get();
        // Find Accessories
        $accGroupBlocks = GroupsBlocks::where('product_connect_id', '=', $product->id)->where('type', '=', '1')->pluck('group_names_id')->all();
        $accGroups = Groups::whereIn('group_names_id', $accGroupBlocks)->pluck('product_id')->all();
        $accProducts = ProductGroupsBlocks::where('product_connect_id', '=', $product->id)->where('type', '=', '1')->pluck('product_id')->all();
        $accessories = array_merge($accGroups, $accProducts);
        $accessories = $this->connectedProducts($accessories);
        // Find Products form Related Categories
        $connectedCategories = CategoryGroupsBlocks::where('product_connect_id', '=', $product->id)->where('type', '=', '2')->pluck('category_id')->all();
        $connectedProducts = DB::table('category_product')->whereIn('category_id', $connectedCategories)->pluck('product_id')->all();
        $relatedProducts = $this->connectedProducts($connectedProducts);
        // Find Upselling Products
        $upscGroupBlocks = GroupsBlocks::where('product_connect_id', '=', $product->id)->where('type', '=', '3')->pluck('group_names_id')->all();
        $upsGroups = Groups::whereIn('group_names_id', $upscGroupBlocks)->pluck('product_id')->all();
        $upsProducts = ProductGroupsBlocks::where('product_connect_id', '=', $product->id)->where('type', '=', '3')->pluck('product_id')->all();
        $upselling = array_merge($upsGroups, $upsProducts);
        $upselling = $this->connectedProducts($upselling);
        // Get Files
        $filesPath = ProductFiles::where('type', '=', 1)->where('product_id', '=', $product->id)->pluck('path')->all();
        $files = array();
        $imageExt = [
            'jpg',
            'jpeg',
            'png',
            'svg',
            'bpm'
        ];
        foreach ($filesPath as $path) {
            $baseFileName = preg_split('/\//', $path);
            $userfile_extn = explode(".", end($baseFileName));
            $ext = strtolower(array_pop($userfile_extn));
            if (in_array($ext, $imageExt)) {
                $files[] = array('path' => $path, 'name' => end($baseFileName), 'ext' => $ext, 'image' => true);
            } else {
                $files[] = array('path' => $path, 'name' => end($baseFileName), 'ext' => $ext, 'image' => false);
            }
        }
        // Get Tags
        $tags = Tags::where('product_id', '=', $product->id)->pluck('name')->all();
        // Get Tabs
        $tabs = Tabs::where('product_id', '=', $product->id)->get();
        // Get Text Options
        $additionalOptions = additionalOptions::where('product_id', '=', $product->id)->pluck('option_value_id')->all();
        $txtOpts = array();
        foreach ($additionalOptions as $additionalOption) {
            $optionValues = OptionValues::orderBy('option_id', 'asc')->where('id', '=', $additionalOption)->with('option')->first();
            if (!isset($txtOpts[$optionValues->option->name])) {
                $txtOpts[$optionValues->option->name] = '';
            }
            $txtOpts[$optionValues->option->name] .= $optionValues->value . ', ';
        }
        foreach ($txtOpts as $key => $value) {
            $txtOpts[$key] = rtrim($value, ', ');
        }
        // Building a Calculator Code Name
        $modifications = Product::find($product->id)->skuCalcGroups()->get();
        foreach ($modifications as $key => $group) {
            $modifications[$key]->options = CalcGroups::find($group->id)->skuCalcOptions()->get();
        }
        $metaCategory = $onPageCategories->name;
        $categoryMetaPatterns = MetaPatterns::where('type', '=', 'Товары')->first();
        if (!empty($categoryMetaPatterns->metaTitleStartPoint) && !empty($categoryMetaPatterns->metaTitleEndPoint)) {
            $metaTitle = $categoryMetaPatterns->metaTitleStartPoint . ' ' . $product->meta_title . ' ' . $categoryMetaPatterns->metaTitleEndPoint;
        } elseif (!empty($categoryMetaPatterns->metaTitleStartPoint) && empty($categoryMetaPatterns->metaTitleEndPoint)) {
            $metaTitle = $categoryMetaPatterns->metaTitleStartPoint . ' ' . $product->meta_title;
        } elseif (empty($categoryMetaPatterns->metaTitleStartPoint) && !empty($categoryMetaPatterns->metaTitleEndPoint)) {
            $metaTitle = $product->meta_title . ' ' . $categoryMetaPatterns->metaTitleEndPoint;
        } else {
            $metaTitle = $product->meta_title;
        }
        if (!empty($categoryMetaPatterns->metaDescriptionStartPoint) && !empty($categoryMetaPatterns->metaDescriptionEndPoint)) {
            $metaDesc = $categoryMetaPatterns->metaDescriptionStartPoint . ' ' . $product->meta_description . ' ' . $categoryMetaPatterns->metaDescriptionEndPoint;
        } elseif (!empty($categoryMetaPatterns->metaDescriptionStartPoint) && empty($categoryMetaPatterns->metaDescriptionEndPoint)) {
            $metaDesc = $categoryMetaPatterns->metaDescriptionStartPoint . ' ' . $product->meta_description;
        } elseif (empty($categoryMetaPatterns->metaDescriptionStartPoint) && !empty($categoryMetaPatterns->metaDescriptionEndPoint)) {
            $metaDesc = $product->meta_description . ' ' . $categoryMetaPatterns->metaDescriptionEndPoint;
        } else {
            $metaDesc = $product->meta_description;
        }
        if (isset(Auth::user()->discountLevel->base_discount)) {
            $discount = Auth::user()->discountLevel->base_discount;
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
        } else {
            $product->old_price = $product->old_price + $product->old_price * 20 / 100;
            $product->price = $product->price + $product->price * 20 / 100;
        }
        return view('product', compact(['breadcrumb', 'product', 'img', 'accessories', 'relatedProducts', 'upselling', 'txtOpts', 'tabs', 'tags', 'metaTitle', 'metaDesc', 'metaCategory', 'modifications', 'files']));
    }

    protected function getCategoryDescription($desciptionId)
    {
        $mainDescription = '';
        foreach (array_reverse($desciptionId) as $id) {
            $mainDescription .= Categories::where('id', '=', $id)->pluck('body')->first();
        }
        $mainDescription .= CustomFields::where('name', '=', 'categoriesDesc')->pluck('content')->first();
        return $mainDescription;
    }

    public function refreshFilters(Request $request)
    {
        Cookie::queue(Cookie::forget('uet_sort'));
        Cookie::queue(Cookie::forget('perpage'));
        Cookie::queue(Cookie::forget('instock'));
        Cookie::queue(Cookie::forget('minprice'));
        Cookie::queue(Cookie::forget('maxprice'));
        return redirect()->to($request->refreshed);
    }

    public function changePerPage(Request $request)
    {
        $cookie = cookie('perpage', $request->value, 60);
        return response()->json([
            'success' => true,
        ])->cookie($cookie);;
    }

    public function changeSortMethod(Request $request)
    {
        $cookie = cookie('uet_sort', $request->sort, 60);
        return redirect()->back()->cookie($cookie);
    }

    public function changeInStock(Request $request)
    {
        $optionSwitch = Cookie::get('instock') !== null ? intval(Cookie::get('instock')) : null;
        if ($request->value == $optionSwitch) {
            $cookie = cookie('instock', null, 60);
        } else {
            $cookie = cookie('instock', $request->value, 60);
        }
        return response()->json([
            'success' => true,
        ])->cookie($cookie);
    }

    public function changeView(Request $request)
    {
        $cookie = cookie('view', $request->value, 60);
        return response()->json([
            'success' => true,
        ])->cookie($cookie);
    }

    public function applyPrice(Request $request)
    {
        $min = ($request->minprice < 0) ? 0 : $request->minprice;
        $max = ($request->maxprice < 0) ? 0 : $request->maxprice;
        $cookieMinPrice = cookie('minprice', $min, 60);
        $cookieMaxPrice = cookie('maxprice', $max, 60);
        return response()->json([
            'success' => true,
        ])->cookie($cookieMinPrice)->cookie($cookieMaxPrice);
    }

    public function getCart($session)
    {
        $cartProducts = CartProduct::where('session_id', '=', $session)->with('currency')->get();
        return response()->json($cartProducts, 200);
    }

    public function addToCart(Request $request)
    {
        $productData = Product::where('id', '=', $request->product_id)->firstOrfail();
        // I sure hope you didn't expect me to allow user to change this =D
        $sku = sku::where('sku_code', '=', $request->code)->with('currency')->firstOrfail();
        $product = CartProduct::where('session_id', '=', $request['session'])->where('code', '=', $sku->sku_code)->with('currency')->first();
        if (!$product) {
            $product = new CartProduct;
            $product->quantity = $request->quantity;
        } else {
            $product->quantity = $product->quantity + $request->quantity;
        }
        if (isset(Auth::user()->discountLevel->base_discount)) {
            $discount = Auth::user()->discountLevel->base_discount;
            $brandDiscount = BrandDiscount::where('discount_level_id', '=', Auth::user()->discountLevel->id)->where('brand_id', '=', $productData->brand_id)->first();
            if (!$brandDiscount) {
                $calculatedDiscount = $discount;
            } else {
                $calculatedDiscount = $brandDiscount->discount;
            }
            $personalDiscount = Auth::user()->discount;
            $calculatedDiscount = $personalDiscount + $calculatedDiscount;
            $price = $sku->price - $sku->price * $calculatedDiscount / 100;
            $product->price = $price + $price * Auth::user()->country->vat / 100;
        } else {
            $product->price = $sku->price + $sku->price * 20 / 100;
        }
        $product->session_id = $request['session'];
        $product->name = $productData->name;
        $product->url = $productData->url;
        $product->code = $sku->sku_code;
        $product->currency_id = $sku->currency->id;
        $product->image = $productData->image;
        $product->save();
        $cartProducts = CartProduct::where('session_id', '=', $product->session_id)->with('currency')->get();
        return response()->json($cartProducts, 200);
    }

    public function changeCartItem(Request $request, $id)
    {
        $product = CartProduct::where('id', '=', $id)->first();
        $product->quantity = $request->quantity;
        $product->update();
        return response()->json(null, 200);
    }

    public function deleteCartItem($id)
    {
        CartProduct::where('id', '=', $id)->delete();
        return response()->json(null, 200);
    }

    public function cart()
    {
        $session = session()->getId();
        $products = CartProduct::where('session_id', '=', $session)->with('currency')->get();
        $total = 0;
        $showButton = 0;
        if ($products) {
            foreach ($products as $product) {
                $total += ($product->price * ($product->currency->value * $product->currency->nominal)) * $product->quantity;
                if ($product->price == 0) {
                    $showButton = 1;
                }
            }
        }
        return view('cart', compact(['products', 'total', 'showButton']));
    }

    public function showEmptyCompare()
    {
        $products = array();
        $options = array();
        return view('compare', compact(['options', 'products']));
    }

    public function showCompare($any)
    {
        $productIds = explode(',', $any);
        $selectedFilters = array();
        foreach ($productIds as $id) {
            $additionalOptions = additionalOptions::where('product_id', '=', $id)->pluck('option_value_id')->all();
            foreach ($additionalOptions as $additionalOption) {
                $optionValue = OptionValues::where('id', '=', $additionalOption)->first();
                $option = Options::where('id', '=', $optionValue->option_id)->pluck('name')->first();
                if (!isset($selectedFilters[$option][$id])) {
                    $selectedFilters[$option][$id] = '';
                }
                $selectedFilters[$option][$id] .= $optionValue->value . ', ';
            }
        }
        foreach ($selectedFilters as $name => $filter) {
            foreach ($filter as $id => $value) {
                $selectedFilters[$name][$id] = rtrim($value, ', ');
            }
        }
        $options = array();
        foreach ($selectedFilters as $name => $filter) {
            $check = array_unique($filter);
            if (count($check) != 1) {
                $options[$name] = new \stdClass();
                $options[$name]->options = $filter;
                $options[$name]->diff = true;
            } else {
                $options[$name] = new \stdClass();
                $options[$name]->options = $filter;
                $options[$name]->diff = false;
            }
        }
        $products = DB::table('products')->select(DB::raw('products.*, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.sku_code AS sku_code, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku'))
            ->join('sku', function ($join) {
                $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
            })
            ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->whereIn('products.id', $productIds)
            ->get();
        if (isset(Auth::user()->country)) {
            foreach ($products as $product) {
                $product->price *= auth()->user()->country->vat / 100 + 1;
            }
        } else {
            foreach ($products as $product) {
                $product->price *= 20 / 100 + 1;
            }
        }
        return view('compare', compact(['options', 'products']));
    }

    public function showEmptyBookmark()
    {
        $products = null;
        $metaTitle = 'Отложенные товары';
        return view('bookmark', compact(['metaTitle', 'products']));
    }

    public function showBookmark($any)
    {
        $selectedProducts = explode(',', $any);
        // Get All Products
        $toSearch = array();
        $FilterClass = new FilterClass();
        $products = DB::table('products')->select(DB::raw('products.*, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.sku_code AS sku_code, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
            ->join('sku', function ($join) {
                $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
            })
            ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
            ->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
            ->whereIn('products.id', $selectedProducts)
            ->orderBy('name', 'ASC')
            ->groupBy('products.id')
            ->get();
        $countedProducts = count($products);
        $metaTitle = 'Отложенные товары';
        if (isset(Auth::user()->country)) {
            foreach ($products as $product) {
                $product->price *= auth()->user()->country->vat / 100 + 1;
            }
        } else {
            foreach ($products as $product) {
                $product->price *= 20 / 100 + 1;
            }
        }
        return view('bookmark', compact(['metaTitle', 'products', 'countedProducts']));
    }

    public function cartSuccess(Order $order)
    {
        if ($order->created_at->add(new \DateInterval('P7D')) < now()) {
            return redirect()->to('cart');
        }
        $products = OrderItem::where('order_id', '=', $order->id)->get();
        $orderId = $order->invoice_number;
        $email = User::where('id', '=', $order->user_id)->pluck('email')->first();
        $time = $order->created_at;
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $product->amount;
        }
        if ($products) {
            return view('success', compact(['products', 'total', 'orderId', 'email', 'time']));
        } else {
            return redirect()->to('cart');
        }
    }

    public function showContainers()
    {
        return view('containers');
    }
}
