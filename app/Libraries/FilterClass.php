<?php

namespace App\Libraries;

use App;
use App\Categories;
use App\Product;
use App\CalcGroups;
use App\Filters;
use App\Options;
use App\additionalOptions;
use App\OptionValues;
use App\Brands;
use App\sku;
use App\Stickers;
use App\StickersConnection;
use DB;
use App\Libraries\FilterClass;

class FilterClass
{
    public function getMeta($filters, $path)
    {
        $meta = array();
        foreach ($filters as $received) {
            $received = explode('=', $received);
            $urlFilter = $received[0];
            if (!isset($received[1])) {
                abort(404);
            } else {
                $optionValueFilter = $received[1];
            }
            $optionValueFilter = explode('&', $optionValueFilter);
            foreach ($optionValueFilter as $ov) {
                $optionFilter = Options::where('url', '=', $urlFilter)->first();
                if (!$optionFilter) {
                    if ($path === 0) {
                        abort(404);
                    } else {
                        return false;
                    }
                }
                $ovFilter = OptionValues::where('url', '=', $ov)->where('option_id', '=', $optionFilter->id)->first();
                if (!$ovFilter) {
                    if ($path === 0) {
                        abort(404);
                    } else {
                        return false;
                    }
                }
                $meta[$optionFilter->name][] = $ovFilter->value;
            }
        }
        $metaInsert = '';
        foreach ($meta as $metaName => $metaOpt) {
            $metaInsert .= $metaName.': ';
            foreach ($metaOpt as $value) {
                $metaInsert .= $value.', ';
            }
        }
        $metaInsert = trim($metaInsert, ' ');
        $metaInsert = trim($metaInsert, ',');
        return $metaInsert;
    }

    public function getFilters($categoryId, $productIds, $categoryPath)
    {
        $categoryUrl = '/category/'.$categoryPath;
        $additionalOptionsId = additionalOptions::whereIn('product_id', $productIds)->distinct()->pluck('option_value_id')->all();
        $optionValues = DB::table('option_values')->select(DB::raw('option_values.id, option_values.option_id, option_values.value, option_values.url AS option_value_url, options.name, options.url AS option_url'))
                                                  ->join('options', 'option_values.option_id', '=', 'options.id')
                                                  ->join('filters', 'options.id', '=', 'filters.option_id')
                                                  ->where('filters.category_id', '=', $categoryId)
                                                  ->whereIn('option_values.id', $additionalOptionsId)
												  ->groupBy('option_values.id')
                                                  ->orderBy('filters.sort_position')
												  ->orderByRaw('option_values.value+0, option_values.value')
												  ->get();
		$filters = array();
        foreach ($optionValues as $key => $value) {
            $id = $value->option_id;
            $filters[$id]['name'] = $value->name;
            $filters[$id]['url'] = $value->option_url;
            $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $categoryUrl.'/filters/'.$value->option_url.'='.$value->option_value_url, 'selected' => false, 'disabled' => false);
		}
        return $filters;
    }

    public function getSelectedFilters($categoryId, $productIds, $productsFilteredId, $receivedfilters, $categoryPath)
    {
        $categoryUrl = '/category/'.$categoryPath.'filters/';
        $additionalOptionsId = additionalOptions::whereIn('product_id', $productIds)->distinct()->pluck('option_value_id')->all();
        $canBeSelectedAdditionalOptionsId = additionalOptions::whereIn('product_id', $productsFilteredId)->distinct()->pluck('option_value_id')->all();
        $optionValues = DB::table('option_values')->select(DB::raw('option_values.id, option_values.option_id, option_values.value, option_values.url AS option_value_url, options.name, options.url AS option_url'))
                                                  ->join('options', 'option_values.option_id', '=', 'options.id')
                                                  ->join('filters', 'options.id', '=', 'filters.option_id')
                                                  ->where('filters.category_id', '=', $categoryId)
                                                  ->whereIn('option_values.id', $additionalOptionsId)
												  ->groupBy('option_values.id')
                                                  ->orderBy('filters.sort_position')
                                                  ->orderByRaw('option_values.value+0, option_values.value')
                                                  ->get();
        $optionValuesEnabled = DB::table('option_values')->join('options', 'option_values.option_id', '=', 'options.id')
                                                  ->join('filters', 'options.id', '=', 'filters.option_id')
                                                  ->where('filters.category_id', '=', $categoryId)
                                                  ->whereIn('option_values.id', $canBeSelectedAdditionalOptionsId)
                                                  ->orderBy('filters.sort_position')
                                                  ->orderByRaw('option_values.value+0, option_values.value')
                                                  ->pluck('option_values.id')->all();
        $selectedFilters = array();
        foreach ($receivedfilters as $selectedFilter) {
            $explodeOption = explode('=', $selectedFilter);
            foreach ($explodeOption as $option) {
                if ($option != $explodeOption[0]) {
                    if (strpos($option, '&')) {
                        $explodeMoreOption = explode('&', $option);
                        foreach ($explodeMoreOption as $moreOption) {
                            $selectedFilters[$explodeOption[0]][] = $moreOption;
                        }
                    } else {
                        $selectedFilters[$explodeOption[0]][] = $option;
                    }
                }
            }
        }
        $selectedOVIds = array();
        foreach ($selectedFilters as $filterUrl => $value) {
            $optionId = Options::where('url', '=', $filterUrl)->pluck('id')->first();
            foreach ($value as $url) {
                $getOVid = OptionValues::where('url', '=', $url)->where('option_id', '=', $optionId)->pluck('id')->first();
                $selectedOVIds[] = $getOVid;
            }
        }
        $mainFilter = array();
        foreach ($selectedFilters as $filterUrl => $value) {
            $mainFilter = $filterUrl;
            break;
        }
        $filters = array();
        foreach ($optionValues as $key => $value) {
            $id = $value->option_id;
            $filters[$id]['name'] = $value->name;
            $filters[$id]['url'] = $value->option_url;
            if (in_array($value->id, $optionValuesEnabled)) {
                if (in_array($value->id, $selectedOVIds)) {
                    $path = $selectedFilters;
                    $url = $categoryUrl;
                    foreach ($path as $optionUrl => $optionValues) {
                        if ($optionUrl == $value->option_url) {
                            foreach ($optionValues as $key => $val) {
                                if ($val == $value->option_value_url) {
                                    unset($path[$optionUrl][$key]);
                                }
                            }
                        }
                    }
                    foreach ($path as $optionUrl => $optionValues) {
                        if ($optionValues) {
                            $url .= '/'.$optionUrl.'=';
                            foreach ($optionValues as $val) {
                                $url .= '&'.$val;
                            }
                        }
                    }
                    $url = str_replace('=&', '=', $url);
                    $url = str_replace('//', '/', $url);
                    $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => true, 'disabled' => false);
                } else {
                    $path = $selectedFilters;
                    $path[$value->option_url][] = $value->option_value_url;
                    $url = $categoryUrl;
                    foreach ($path as $optionUrl => $optionValues) {
                        $url .= '/'.$optionUrl.'=';
                        foreach ($optionValues as $val) {
                            $url .= '&'.$val;
                        }
                    }
                    $url = str_replace('=&', '=', $url);
                    $url = str_replace('//', '/', $url);
                    $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => false, 'disabled' => false);
                }
            } else {
                if ($value->option_url == $mainFilter) {
                    if (in_array($value->id, $selectedOVIds)) {
                        $path = $selectedFilters;
                        $url = $categoryUrl;
                        foreach ($path as $optionUrl => $optionValues) {
                            if ($optionUrl == $value->option_url) {
                                foreach ($optionValues as $key => $val) {
                                    if ($val == $value->option_value_url) {
                                        unset($path[$optionUrl][$key]);
                                    }
                                }
                            }
                        }
                        foreach ($path as $optionUrl => $optionValues) {
                            if ($optionValues) {
                                $url .= '/'.$optionUrl.'=';
                                foreach ($optionValues as $val) {
                                    $url .= '&'.$val;
                                }
                            }
                        }
                        $url = str_replace('=&', '=', $url);
                        $url = str_replace('//', '/', $url);
                        $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => true, 'disabled' => false);
                    } else {
                        $path = $selectedFilters;
                        $path[$value->option_url][] = $value->option_value_url;
                        $url = $categoryUrl;
                        foreach ($path as $optionUrl => $optionValues) {
                            $url .= '/'.$optionUrl.'=';
                            foreach ($optionValues as $val) {
                                $url .= '&'.$val;
                            }
                        }
                        $url = str_replace('=&', '=', $url);
                        $url = str_replace('//', '/', $url);
                        $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => false, 'disabled' => false);
                    }
                } else {
                    $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => '/', 'selected' => false, 'disabled' => true);
                }
            }
        }
        return $filters;
    }

    public function getUnfilteredProducts($inStock, $categoriesToLook, $onPageCategoriesId, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate)
    {
        switch($inStock) {
            case 0:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '=';
                break;
            case 1:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '>';
                break;
            default;
                $whereInStock = 'products.id';
                $whereInStockOperator = '>=';
                break;
        }
        $showContent = Categories::whereIn('id', $categoriesToLook)->where('id', '!=', $onPageCategoriesId)->where('show_content', '=', 0)->pluck('id')->all();
        $products = DB::table('products')->select(DB::raw('products.*, categories.show_content, sort_products.sort_position, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
                                         ->join('sort_products', 'products.id', '=', 'sort_products.product_id')
                                         ->join('sku', function ($join) {
                                             $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                         })
                                         ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                         ->join('brands', 'products.brand_id', '=', 'brands.id')
                                         ->join('category_product', 'products.id', '=', 'category_product.product_id')
                                         ->join('categories', 'category_product.category_id', '=', 'categories.id')
                                         ->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
                                         ->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
                                         ->whereIn('categories.id', $categoriesToLook)
                                         ->whereNotIn('categories.id', $showContent)
                                         ->where('sort_products.category_id', '=', $onPageCategoriesId)
                                         ->where('products.published', '=', 1)
                                         ->where($whereInStock, $whereInStockOperator, 0)
                                         ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                         ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                         ->orderByRaw($sortFiled.' '.$sortDirection)
                                         ->groupBy('products.id', 'sort_products.sort_position')
                                         ->paginate($paginate);
        return $products;
    }

    public function getFilteredProducts($filters, $inStock, $categoriesIdToLook, $thisCategoryId, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate)
    {
        // Firstly, lets sort our filters to array
        $selectedFilters = array();
        foreach ($filters as $selectedFilter) {
            $explodeOption = explode('=', $selectedFilter);
            foreach ($explodeOption as $option) {
                if ($option != $explodeOption[0]) {
                    if (strpos($option, '&')) {
                        $explodeMoreOption = explode('&', $option);
                        foreach ($explodeMoreOption as $moreOption) {
                            $selectedFilters[$explodeOption[0]][] = $moreOption;
                        }
                    } else {
                        $selectedFilters[$explodeOption[0]][] = $option;
                    }
                }
            }
        }
        /*
        Now we gonna take the first result as MAIN filter.
        This is required to allow people make multiple selects in this filter,
        even that it wont normally allow em to
        */
        $mainFilter = strtok($filters[0], '=');
        /*
        Lets make an array with selected option values ID except MAIN one - $ovIds
        And get main filter option values ID into - $mainFilterOVIds
        */
        $ovIds = array();
        $mainFilterOVIds = array();
        foreach ($selectedFilters as $filterUrl => $value) {
            $optionId = Options::where('url', '=', $filterUrl)->pluck('id')->first();
            foreach ($value as $url) {
                $getOVid = OptionValues::where('url', '=', $url)->where('option_id', '=', $optionId)->pluck('id')->first();
                if ($filterUrl != $mainFilter) {
                    $ovIds[] = $getOVid;
                } else {
                    $mainFilterOVIds[] = $getOVid;
                }
            }
        }
        /*
        As long as we can select multiple options for MAIN filter (even if only one allowed)
        we have to detect products ID where this requirement is met, so we can build a real SQL request.
        Let's name it - $mainFilterProductsId
        */
        $showContent = Categories::whereIn('id', $categoriesIdToLook)->where('id', '!=', $thisCategoryId)->where('show_content', '=', 0)->pluck('id')->all();
        $mainFilterProductsId = DB::table('products')
                                ->select(DB::raw('products.id'))
                                ->join('additional_options', 'products.id', '=', 'additional_options.product_id')
                                ->join('option_values', 'additional_options.option_value_id', '=', 'option_values.id')
                                ->join('category_product', 'products.id', '=', 'category_product.product_id')
                                ->whereIn('option_values.id', $mainFilterOVIds)
                                ->whereIn('category_product.category_id', $categoriesIdToLook)
                                ->whereNotIn('categories.id', $showContent)
                                ->where('products.published', '=', 1)
                                ->pluck('id')
                                ->all();
         switch($inStock) {
             case 0:
                 $whereInStock = 'products.in_stock';
                 $whereInStockOperator = '=';
                 break;
             case 1:
                 $whereInStock = 'products.in_stock';
                 $whereInStockOperator = '>';
                 break;
             default;
                 $whereInStock = 'products.id';
                 $whereInStockOperator = '>=';
                 break;
         }
        // If more than one filter selected we execute this request
        if ($ovIds) {
            $havingCount = count($ovIds);
            $products = DB::table('products')->select(DB::raw('products.*, sort_products.sort_position, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
                                            ->join('additional_options', 'products.id', '=', 'additional_options.product_id')
                                            ->join('option_values', 'additional_options.option_value_id', '=', 'option_values.id')
                                            ->join('sort_products', 'products.id', '=', 'sort_products.product_id')
                                            ->join('sku', function ($join) {
                                                $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                            })
                                            ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                                            ->join('category_product', 'products.id', '=', 'category_product.product_id')
                                            ->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
                                            ->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
                                            ->whereIn('category_product.category_id', $categoriesIdToLook)
                                            ->whereIn('products.id', $mainFilterProductsId)
                                            ->whereIn('option_values.id', $ovIds)
                                            ->where('sort_products.category_id', '=', $thisCategoryId)
                                            ->where('products.published', '=', 1)
                                            ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                            ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                            ->where($whereInStock, $whereInStockOperator, 0)
                                            ->orderByRaw($sortFiled.' '.$sortDirection)
                                            ->groupBy('products.id', 'sort_products.sort_position')
                                            ->havingRaw('COUNT(DISTINCT option_values.id) = ?', [$havingCount])
                                            ->paginate($paginate);
            $productsID = DB::table('products')->select(DB::raw('products.id'))
                                            ->join('sort_products', 'products.id', '=', 'sort_products.product_id')
                                            ->join('additional_options', 'products.id', '=', 'additional_options.product_id')
                                            ->join('option_values', 'additional_options.option_value_id', '=', 'option_values.id')
                                            ->join('sku', function ($join) {
                                                $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                            })
                                            ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                                            ->join('category_product', 'products.id', '=', 'category_product.product_id')
                                            ->whereIn('category_product.category_id', $categoriesIdToLook)
                                            ->whereIn('products.id', $mainFilterProductsId)
                                            ->whereIn('option_values.id', $ovIds)
                                            ->where('products.published', '=', 1)
                                            ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                            ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                            ->where($whereInStock, $whereInStockOperator, 0)
                                            ->orderByRaw($sortFiled.' '.$sortDirection)
                                            ->groupBy('products.id', 'sort_products.sort_position')
                                            ->havingRaw('COUNT(DISTINCT option_values.id) = ?', [$havingCount])
                                            ->pluck('id')->all();
        } else {
            // In case the only selected filter is MAIN one, we simply get products for ID we already have
            $products = DB::table('products')->select(DB::raw('products.*, sort_products.sort_position, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
                                             ->join('sort_products', 'products.id', '=', 'sort_products.product_id')
                                             ->join('sku', function ($join) {
                                                 $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                             })
                                             ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                             ->join('brands', 'products.brand_id', '=', 'brands.id')
                                             ->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
                                             ->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
                                             ->whereIn('products.id', $mainFilterProductsId)
                                             ->where('sort_products.category_id', '=', $thisCategoryId)
                                             ->where('products.published', '=', 1)
                                             ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                             ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                             ->where($whereInStock, $whereInStockOperator, 0)
                                             ->orderByRaw($sortFiled.' '.$sortDirection)
                                             ->groupBy('products.id', 'sort_products.sort_position')
                                             ->paginate($paginate);
             $productsID =  DB::table('products')->select(DB::raw('products.id'))
                                              ->join('sort_products', 'products.id', '=', 'sort_products.product_id')
                                              ->join('sku', function ($join) {
                                                  $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                              })
                                              ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                              ->join('brands', 'products.brand_id', '=', 'brands.id')
                                              ->whereIn('products.id', $mainFilterProductsId)
                                              ->where('sort_products.category_id', '=', $thisCategoryId)
                                              ->where('products.published', '=', 1)
                                              ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                              ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                              ->where($whereInStock, $whereInStockOperator, 0)
                                              ->orderByRaw($sortFiled.' '.$sortDirection)
                                              ->groupBy('products.id', 'sort_products.sort_position')
                                              ->pluck('id')->all();
        }
        $data['productsID'] = $productsID;
        $data['products'] = $products;
        return $data;
    }

    public function getUnfilteredProductsForBrands($inStock, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate, $productsIdAvailable, $brand)
    {
        switch($inStock) {
            case 0:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '=';
                break;
            case 1:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '>';
                break;
            default;
                $whereInStock = 'products.id';
                $whereInStockOperator = '>=';
                break;
        }
        $products = DB::table('products')->select(DB::raw('products.*, sort_brand_products.sort_position, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
                                         ->join('sort_brand_products', 'products.id', '=', 'sort_brand_products.product_id')
                                         ->join('sku', function ($join) {
                                             $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                         })
                                         ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                         ->join('brands', 'products.brand_id', '=', 'brands.id')
                                         ->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
                                         ->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
                                         ->whereIn('products.id', $productsIdAvailable)
                                         ->where('sort_brand_products.brand_id', '=', $brand->id)
                                         ->where('products.published', '=', 1)
                                         ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                         ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                         ->where($whereInStock, $whereInStockOperator, 0)
										 ->orderByRaw($sortFiled.' '.$sortDirection)
                                         ->groupBy('products.id', 'sort_brand_products.sort_position')
                                         ->paginate($paginate);
        return $products;
    }

    public function getFilteredProductsForBrands($filters, $inStock, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate, $productsIdAvailable, $brand)
    {
        // Firstly, lets sort our filters to array
        $selectedFilters = array();
        foreach ($filters as $selectedFilter) {
            $explodeOption = explode('=', $selectedFilter);
            foreach ($explodeOption as $option) {
                if ($option != $explodeOption[0]) {
                    if (strpos($option, '&')) {
                        $explodeMoreOption = explode('&', $option);
                        foreach ($explodeMoreOption as $moreOption) {
                            $selectedFilters[$explodeOption[0]][] = $moreOption;
                        }
                    } else {
                        $selectedFilters[$explodeOption[0]][] = $option;
                    }
                }
            }
        }
        /*
        Now we gonna take the first result as MAIN filter.
        This is required to allow people make multiple selects in this filter,
        even that it wont normally allow em to
        */
        $mainFilter = strtok($filters[0], '=');
        /*
        Lets make an array with selected option values ID except MAIN one - $ovIds
        And get main filter option values ID into - $mainFilterOVIds
        */
        $ovIds = array();
        $mainFilterOVIds = array();
        foreach ($selectedFilters as $filterUrl => $value) {
            $optionId = Options::where('url', '=', $filterUrl)->pluck('id')->first();
            foreach ($value as $url) {
                $getOVid = OptionValues::where('url', '=', $url)->where('option_id', '=', $optionId)->pluck('id')->first();
                if ($filterUrl != $mainFilter) {
                    $ovIds[] = $getOVid;
                } else {
                    $mainFilterOVIds[] = $getOVid;
                }
            }
        }
        switch($inStock) {
            case 0:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '=';
                break;
            case 1:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '>';
                break;
            default;
                $whereInStock = 'products.id';
                $whereInStockOperator = '>=';
                break;
        }
        $mainFilterProductsId = DB::table('products')->select(DB::raw('products.id'))
                                                     ->join('additional_options', 'products.id', '=', 'additional_options.product_id')
                                                     ->join('option_values', 'additional_options.option_value_id', '=', 'option_values.id')
                                                     ->whereIn('option_values.id', $mainFilterOVIds)
                                                     ->where('products.brand_id', '=', $brand->id)
                                                     ->where('products.published', '=', 1)
                                                     ->pluck('id')->all();

        // If more than one filter selected we execute this request. And yes, $inStock is still a problem to solve ^^
        if ($ovIds) {
            $havingCount = count($ovIds);
            $products = DB::table('products')->select(DB::raw('products.*, sort_brand_products.sort_position, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
                                            ->join('additional_options', 'products.id', '=', 'additional_options.product_id')
                                            ->join('option_values', 'additional_options.option_value_id', '=', 'option_values.id')
                                            ->join('sort_brand_products', 'products.id', '=', 'sort_brand_products.product_id')
                                            ->join('sku', function ($join) {
                                                $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                            })
                                            ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                                            ->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
                                            ->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
                                            ->whereIn('products.id', $mainFilterProductsId)
                                            ->whereIn('option_values.id', $ovIds)
                                            ->where('products.published', '=', 1)
                                            ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                            ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                            ->where($whereInStock, $whereInStockOperator, 0)
                                            ->orderByRaw($sortFiled.' '.$sortDirection)
                                            ->groupBy('products.id', 'sort_brand_products.sort_position')
                                            ->havingRaw('COUNT(DISTINCT option_values.id) = ?', [$havingCount])
                                            ->paginate($paginate);
            $productsID = DB::table('products')->select(DB::raw('products.id'))
                                            ->join('additional_options', 'products.id', '=', 'additional_options.product_id')
                                            ->join('option_values', 'additional_options.option_value_id', '=', 'option_values.id')
                                            ->join('sort_brand_products', 'products.id', '=', 'sort_brand_products.product_id')
                                            ->join('sku', function ($join) {
                                                $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                            })
                                            ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                                            ->whereIn('products.id', $mainFilterProductsId)
                                            ->whereIn('option_values.id', $ovIds)
                                            ->where('sort_brand_products.brand_id', '=', $brand->id)
                                            ->where('products.published', '=', 1)
                                            ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                            ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                            ->where($whereInStock, $whereInStockOperator, 0)
                                            ->orderByRaw($sortFiled.' '.$sortDirection)
                                            ->groupBy('products.id', 'sort_brand_products.sort_position')
                                            ->havingRaw('COUNT(DISTINCT option_values.id) = ?', [$havingCount])
                                            ->pluck('id')->all();
        } else {
            // In case the only selected filter is MAIN one, we simply get products for ID we already have
            $products = DB::table('products')->select(DB::raw('products.*, sort_brand_products.sort_position, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
                                             ->join('sort_brand_products', 'products.id', '=', 'sort_brand_products.product_id')
                                             ->join('sku', function ($join) {
                                                 $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                             })
                                             ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                             ->join('brands', 'products.brand_id', '=', 'brands.id')
                                             ->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
                                             ->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
                                             ->whereIn('products.id', $mainFilterProductsId)
                                             ->where('sort_brand_products.brand_id', '=', $brand->id)
                                             ->where('products.published', '=', 1)
                                             ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                             ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                             ->where($whereInStock, $whereInStockOperator, 0)
                                             ->orderByRaw($sortFiled.' '.$sortDirection)
                                             ->groupBy('products.id', 'sort_brand_products.sort_position')
                                             ->paginate($paginate);
            $productsID = DB::table('products')->select(DB::raw('products.id'))
                                             ->join('sort_brand_products', 'products.id', '=', 'sort_brand_products.product_id')
                                             ->join('sku', function ($join) {
                                                 $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                             })
                                             ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                             ->join('brands', 'products.brand_id', '=', 'brands.id')
                                             ->whereIn('products.id', $mainFilterProductsId)
                                             ->where('sort_brand_products.brand_id', '=', $brand->id)
                                             ->where('products.published', '=', 1)
                                             ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                             ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
                                             ->where($whereInStock, $whereInStockOperator, 0)
                                             ->orderByRaw($sortFiled.' '.$sortDirection)
                                             ->groupBy('products.id', 'sort_brand_products.sort_position')
                                             ->pluck('id')->all();
        }
        $data['productsID'] = $productsID;
        $data['products'] = $products;
        return $data;
    }

    public function getFiltersForBrands($brand, $productIds, $categoriesId, $path)
    {
        $path = '/'.$path;
        $additionalOptionsId = additionalOptions::whereIn('product_id', $productIds)->distinct()->pluck('option_value_id')->all();
        $optionValues = DB::table('option_values')->select(DB::raw('option_values.id, option_values.option_id, option_values.value, option_values.url AS option_value_url, options.name, options.url AS option_url', 'filters.category_id AS cat'))
                                                  ->join('options', 'option_values.option_id', '=', 'options.id')
                                                  ->join('filters', 'options.id', '=', 'filters.option_id')
                                                  ->whereIn('filters.category_id', $categoriesId)
                                                  ->whereIn('option_values.id', $additionalOptionsId)
                                                  ->distinct()
                                                  ->orderBy('filters.sort_position')
                                                  ->orderByRaw('option_values.value+0, option_values.value')
                                                  ->get();
        $filters = array();
        foreach ($optionValues as $key => $value) {
            $id = $value->option_id;
            $filters[$id]['name'] = $value->name;
            $filters[$id]['url'] = $value->option_url;
            $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $path.'/filters/'.$value->option_url.'='.$value->option_value_url, 'selected' => false, 'disabled' => false);
        }
        return $filters;
    }

    public function getSelectedFiltersForBrands($brand, $productsIdAvailable, $productsFilteredId, $categoriesId, $receivedFilters, $pagePath)
    {
        $pagePath = '/'.$pagePath.'filters/';
        $additionalOptionsId = additionalOptions::whereIn('product_id', $productsIdAvailable)->distinct()->pluck('option_value_id')->all();
        $canBeSelectedAdditionalOptionsId = additionalOptions::whereIn('product_id', $productsFilteredId)->distinct()->pluck('option_value_id')->all();
        $optionValues = DB::table('option_values')->select(DB::raw('option_values.id, option_values.option_id, option_values.value, option_values.url AS option_value_url, options.name, options.url AS option_url'))
                                                  ->join('options', 'option_values.option_id', '=', 'options.id')
                                                  ->join('filters', 'options.id', '=', 'filters.option_id')
                                                  ->whereIn('filters.category_id', $categoriesId)
                                                  ->whereIn('option_values.id', $additionalOptionsId)
                                                  ->distinct()
                                                  ->orderBy('filters.sort_position')
                                                  ->orderByRaw('option_values.value+0, option_values.value')
                                                  ->get();
        $optionValuesEnabled = DB::table('option_values')->select(DB::raw('option_values.id, option_values.option_id, option_values.value, option_values.url AS option_value_url, options.name, options.url AS option_url'))
                                                  ->join('options', 'option_values.option_id', '=', 'options.id')
                                                  ->join('filters', 'options.id', '=', 'filters.option_id')
                                                  ->whereIn('filters.category_id', $categoriesId)
                                                  ->whereIn('option_values.id', $canBeSelectedAdditionalOptionsId)
                                                  ->distinct()
                                                  ->orderBy('filters.sort_position')
                                                  ->orderByRaw('option_values.value+0, option_values.value')
                                                  ->pluck('option_values.id')->all();
        $selectedFilters = array();
        foreach ($receivedFilters as $selectedFilter) {
            $explodeOption = explode('=', $selectedFilter);
            foreach ($explodeOption as $option) {
                if ($option != $explodeOption[0]) {
                    if (strpos($option, '&')) {
                        $explodeMoreOption = explode('&', $option);
                        foreach ($explodeMoreOption as $moreOption) {
                            $selectedFilters[$explodeOption[0]][] = $moreOption;
                        }
                    } else {
                        $selectedFilters[$explodeOption[0]][] = $option;
                    }
                }
            }
        }
        $selectedOVIds = array();
        foreach ($selectedFilters as $filterUrl => $value) {
            $optionId = Options::where('url', '=', $filterUrl)->pluck('id')->first();
            foreach ($value as $url) {
                $getOVid = OptionValues::where('url', '=', $url)->where('option_id', '=', $optionId)->pluck('id')->first();
                $selectedOVIds[] = $getOVid;
            }
        }
        $mainFilter = array();
        foreach ($selectedFilters as $filterUrl => $value) {
            $mainFilter = $filterUrl;
            break;
        }
        $filters = array();
        foreach ($optionValues as $key => $value) {
            $id = $value->option_id;
            $filters[$id]['name'] = $value->name;
            $filters[$id]['url'] = $value->option_url;
            if (in_array($value->id, $optionValuesEnabled)) {
                if (in_array($value->id, $selectedOVIds)) {
                    $path = $selectedFilters;
                    $url = $pagePath;
                    foreach ($path as $optionUrl => $optionValues) {
                        if ($optionUrl == $value->option_url) {
                            foreach ($optionValues as $key => $val) {
                                if ($val == $value->option_value_url) {
                                    unset($path[$optionUrl][$key]);
                                }
                            }
                        }
                    }
                    foreach ($path as $optionUrl => $optionValues) {
                        if ($optionValues) {
                            $url .= '/'.$optionUrl.'=';
                            foreach ($optionValues as $val) {
                                $url .= '&'.$val;
                            }
                        }
                    }
                    $url = str_replace('=&', '=', $url);
                    $url = str_replace('//', '/', $url);
                    $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => true, 'disabled' => false);
                } else {
                    $path = $selectedFilters;
                    $path[$value->option_url][] = $value->option_value_url;
                    $url = $pagePath;
                    foreach ($path as $optionUrl => $optionValues) {
                        $url .= '/'.$optionUrl.'=';
                        foreach ($optionValues as $val) {
                            $url .= '&'.$val;
                        }
                    }
                    $url = str_replace('=&', '=', $url);
                    $url = str_replace('//', '/', $url);
                    $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => false, 'disabled' => false);
                }
            } else {
                if ($value->option_url == $mainFilter) {
                    if (in_array($value->id, $selectedOVIds)) {
                        $path = $selectedFilters;
                        $url = $pagePath;
                        foreach ($path as $optionUrl => $optionValues) {
                            if ($optionUrl == $value->option_url) {
                                foreach ($optionValues as $key => $val) {
                                    if ($val == $value->option_value_url) {
                                        unset($path[$optionUrl][$key]);
                                    }
                                }
                            }
                        }
                        foreach ($path as $optionUrl => $optionValues) {
                            if ($optionValues) {
                                $url .= '/'.$optionUrl.'=';
                                foreach ($optionValues as $val) {
                                    $url .= '&'.$val;
                                }
                            }
                        }
                        $url = str_replace('=&', '=', $url);
                        $url = str_replace('//', '/', $url);
                        $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => true, 'disabled' => false);
                    } else {
                        $path = $selectedFilters;
                        $path[$value->option_url][] = $value->option_value_url;
                        $url = $pagePath;
                        foreach ($path as $optionUrl => $optionValues) {
                            $url .= '/'.$optionUrl.'=';
                            foreach ($optionValues as $val) {
                                $url .= '&'.$val;
                            }
                        }
                        $url = str_replace('=&', '=', $url);
                        $url = str_replace('//', '/', $url);
                        $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => false, 'disabled' => false);
                    }
                } else {
                    $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => '/', 'selected' => false, 'disabled' => true);
                }
            }
        }
        return $filters;
    }

    public function getUnfilteredProductsForSearch($inStock, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate, $productsIdAvailable, $query)
    {
        $sorting = DB::table('products')->selectRaw('products.searchable_name, products.id')->whereIn('id', $productsIdAvailable)->get();
        foreach ($sorting as $key => $sort) {
            if (!empty($query)) {
            $checkPosition = strpos(mb_strtolower($sort->searchable_name), mb_strtolower($query));
                if ($checkPosition !== false) {
                    $sort->position = $checkPosition;
                } else {
                    $sort->position = 100;
                }
            } else {
                $sort->position = 100;
            }
        }
        $sorting = $sorting->sortBy('position');
        $productsIdAvailableReordered = array();
        foreach ($sorting as $key => $sort) {
            $productsIdAvailableReordered[] = $sort->id;
        }
        $productsIdAvailableString = implode($productsIdAvailableReordered, ', ');
        $orderBy = !empty($sortFiled) ? $sortFiled.' '.$sortDirection : 'FIELD(products.id, '.$productsIdAvailableString.')';
        switch($inStock) {
            case 0:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '=';
                break;
            case 1:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '>';
                break;
            default;
                $whereInStock = 'products.id';
                $whereInStockOperator = '>=';
                break;
        }
        $products = DB::table('products')->select(DB::raw('products.*, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, GROUP_CONCAT(DISTINCT sku.sku_code ORDER BY sku.price ASC SEPARATOR ", ") AS code, GROUP_CONCAT(DISTINCT sku.price ORDER BY sku.price ASC SEPARATOR ", ") AS price, GROUP_CONCAT(DISTINCT sku.old_price ORDER BY sku.price ASC SEPARATOR ", ") AS old_price, GROUP_CONCAT(DISTINCT sku.sku ORDER BY sku.price ASC SEPARATOR ", ") AS skuName'))
                                         ->join('sku', 'products.id', '=', 'sku.product_id')
                                         ->join('brands', 'products.brand_id', '=', 'brands.id')
                                         ->whereIn('products.id', $productsIdAvailable)
                                         ->where('products.published', '=', 1)
                                         ->where($whereInStock, $whereInStockOperator, 0)
                                         ->where('sku.price', '>=', $minPrice)
                                         ->where('sku.price', '<=', $maxPrice)
                                         ->orderByRaw($orderBy)
                                         ->groupBy('products.id')
                                         ->paginate($paginate);
        foreach ($products as $product) {
            $checkSticker = StickersConnection::where('product_id', '=', $product->id)->first();
            if ($checkSticker) {
                $sticker = Stickers::where('id', '=', $checkSticker->sticker_id)->first();
                $product->sticker_text = $sticker->text;
                $product->sticker_color = $sticker->color;
            }
            $buildPrice = strtok($product->price, ',');
            $buildOldPrice = strtok($product->old_price, ',');
            $code = explode(', ', $product->code);
            $code = $code[0];
            /* This codeBuilder must be here until we switch to full price codes
            $skuCalcGroups = Product::find($product->id)->skuCalcGroups()->get();
            foreach ($skuCalcGroups as $key => $group) {
                $skuCalcProducts = CalcGroups::find($group->id)->skuCalcOptions()->get();
                $codeToBuild = $skuCalcProducts[0]->code;
                $buildPrice += intval($skuCalcProducts[0]->price);
                $buildOldPrice += intval($skuCalcProducts[0]->old_price);
                if (!empty($codeToBuild)) {
                    $code .= '-'.trim($codeToBuild);
                }
            }
            End of codeBuilder */
            $product->currency = sku::where('product_id', '=', $product->id)->pluck('currency')->first();
            $product->price = $buildPrice;
            $product->old_price = $buildOldPrice;
            $product->code = $code;
        }
        return $products;
    }

    public function getFilteredProductsForSearch($receivedFilters, $inStock, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate, $productsIdAvailable)
    {
        // Firstly, lets sort our filters to array
        $selectedFilters = array();
        foreach ($receivedFilters as $selectedFilter) {
            $explodeOption = explode('=', $selectedFilter);
            foreach ($explodeOption as $option) {
                if ($option != $explodeOption[0]) {
                    if (strpos($option, '&')) {
                        $explodeMoreOption = explode('&', $option);
                        foreach ($explodeMoreOption as $moreOption) {
                            $selectedFilters[$explodeOption[0]][] = $moreOption;
                        }
                    } else {
                        $selectedFilters[$explodeOption[0]][] = $option;
                    }
                }
            }
        }
        /*
        Now we gonna take the first result as MAIN filter.
        This is required to allow people make multiple selects in this filter,
        even that it wont normally allow em to
        */
        $mainFilter = strtok($receivedFilters[0], '=');
        /*
        Lets make an array with selected option values ID except MAIN one - $ovIds
        And get main filter option values ID into - $mainFilterOVIds
        */
        $ovIds = array();
        $mainFilterOVIds = array();
        foreach ($selectedFilters as $filterUrl => $value) {
            $optionId = Options::where('url', '=', $filterUrl)->pluck('id')->first();
            foreach ($value as $url) {
                $getOVid = OptionValues::where('url', '=', $url)->where('option_id', '=', $optionId)->pluck('id')->first();
                if ($filterUrl != $mainFilter) {
                    $ovIds[] = $getOVid;
                } else {
                    $mainFilterOVIds[] = $getOVid;
                }
            }
        }
        /*
        As long as we can select multiple options for MAIN filter (even if only one allowed)
        we have to detect products ID where this requirement is met, so we can build a real SQL request.
        Let's name it - $mainFilterProductsId
        */
        $productsIdAvailableString = implode($productsIdAvailable, ', ');
        $orderBy = !empty($sortFiled) ? $sortFiled.' '.$sortDirection : 'FIELD(products.id, '.$productsIdAvailableString.')';
        switch($inStock) {
            case 0:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '=';
                break;
            case 1:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '>';
                break;
            default:
                $whereInStock = 'products.id';
                $whereInStockOperator = '>=';
                break;
        }
        $mainFilterProductsId = DB::table('products')->select(DB::raw('products.id'))
                                                     ->join('additional_options', 'products.id', '=', 'additional_options.product_id')
                                                     ->join('option_values', 'additional_options.option_value_id', '=', 'option_values.id')
                                                     ->whereIn('option_values.id', $mainFilterOVIds)
                                                     ->whereIn('products.id', $productsIdAvailable)
                                                     ->where('products.published', '=', 1)
                                                     ->pluck('id')->all();
        // If more than one filter selected we execute this request. And yes, $inStock is still a problem to solve ^^
        if ($ovIds) {
            $havingCount = count($ovIds);
            $products = DB::table('products')->select(DB::raw('products.*, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, GROUP_CONCAT(DISTINCT sku.sku_code ORDER BY sku.price ASC SEPARATOR ", ") AS code, GROUP_CONCAT(DISTINCT sku.price ORDER BY sku.price ASC SEPARATOR ", ") AS price, GROUP_CONCAT(DISTINCT sku.old_price ORDER BY sku.price ASC SEPARATOR ", ") AS old_price, GROUP_CONCAT(DISTINCT sku.sku ORDER BY sku.price ASC SEPARATOR ", ") AS skuName'))
                                            ->join('additional_options', 'products.id', '=', 'additional_options.product_id')
                                            ->join('option_values', 'additional_options.option_value_id', '=', 'option_values.id')
                                            ->join('sku', 'products.id', '=', 'sku.product_id')
                                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                                            ->whereIn('products.id', $productsIdAvailable)
                                            ->whereIn('option_values.id', $ovIds)
                                            ->where('products.published', '=', 1)
                                            ->where($whereInStock, $whereInStockOperator, 0)
                                            ->where('sku.price', '>=', $minPrice)
                                            ->where('sku.price', '<=', $maxPrice)
                                            ->orderByRaw($orderBy)
                                            ->groupBy('products.id')
                                            ->havingRaw('COUNT(DISTINCT option_values.id) = ?', [$havingCount])
                                            ->paginate($paginate);
            $productsID = DB::table('products')->select(DB::raw('products.*, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, GROUP_CONCAT(DISTINCT sku.sku_code ORDER BY sku.price ASC SEPARATOR ", ") AS code, GROUP_CONCAT(DISTINCT sku.price ORDER BY sku.price ASC SEPARATOR ", ") AS price, GROUP_CONCAT(DISTINCT sku.old_price ORDER BY sku.price ASC SEPARATOR ", ") AS old_price, GROUP_CONCAT(DISTINCT sku.sku ORDER BY sku.price ASC SEPARATOR ", ") AS skuName'))
                                            ->join('additional_options', 'products.id', '=', 'additional_options.product_id')
                                            ->join('option_values', 'additional_options.option_value_id', '=', 'option_values.id')
                                            ->join('sku', 'products.id', '=', 'sku.product_id')
                                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                                            ->whereIn('products.id', $productsIdAvailable)
                                            ->whereIn('option_values.id', $ovIds)
                                            ->where('products.published', '=', 1)
                                            ->where($whereInStock, $whereInStockOperator, 0)
                                            ->where('sku.price', '>=', $minPrice)
                                            ->where('sku.price', '<=', $maxPrice)
                                            ->orderByRaw($orderBy)
                                            ->groupBy('products.id')
                                            ->havingRaw('COUNT(DISTINCT option_values.id) = ?', [$havingCount])
                                            ->pluck('id')->all();
        } else {
        // In case the only selected filter is MAIN one, we simply get products for ID we already have:
            $products = DB::table('products')->select(DB::raw('products.*, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, GROUP_CONCAT(DISTINCT sku.sku_code ORDER BY sku.price ASC SEPARATOR ", ") AS code, GROUP_CONCAT(DISTINCT sku.price ORDER BY sku.price ASC SEPARATOR ", ") AS price, GROUP_CONCAT(DISTINCT sku.old_price ORDER BY sku.price ASC SEPARATOR ", ") AS old_price, GROUP_CONCAT(DISTINCT sku.sku ORDER BY sku.price ASC SEPARATOR ", ") AS skuName'))
                                             ->join('sort_products', 'products.id', '=', 'sort_products.product_id')
                                             ->join('sku', 'products.id', '=', 'sku.product_id')
                                             ->join('brands', 'products.brand_id', '=', 'brands.id')
                                             ->whereIn('products.id', $mainFilterProductsId)
                                             ->where('products.published', '=', 1)
                                             ->where($whereInStock, $whereInStockOperator, 0)
                                             ->where('sku.price', '>=', $minPrice)
                                             ->where('sku.price', '<=', $maxPrice)
                                             ->orderByRaw($orderBy)
                                             ->groupBy('products.id')
                                             ->paginate($paginate);
            $productsID = DB::table('products')->select(DB::raw('products.*, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, GROUP_CONCAT(DISTINCT sku.sku_code ORDER BY sku.price ASC SEPARATOR ", ") AS code, GROUP_CONCAT(DISTINCT sku.price ORDER BY sku.price ASC SEPARATOR ", ") AS price, GROUP_CONCAT(DISTINCT sku.old_price ORDER BY sku.price ASC SEPARATOR ", ") AS old_price, GROUP_CONCAT(DISTINCT sku.sku ORDER BY sku.price ASC SEPARATOR ", ") AS skuName'))
                                             ->join('sort_products', 'products.id', '=', 'sort_products.product_id')
                                             ->join('sku', 'products.id', '=', 'sku.product_id')
                                             ->join('brands', 'products.brand_id', '=', 'brands.id')
                                             ->whereIn('products.id', $mainFilterProductsId)
                                             ->where('products.published', '=', 1)
                                             ->where($whereInStock, $whereInStockOperator, 0)
                                             ->where('sku.price', '>=', $minPrice)
                                             ->where('sku.price', '<=', $maxPrice)
                                             ->orderByRaw($orderBy)
                                             ->groupBy('products.id')
                                             ->pluck('id')->all();
        }
        foreach ($products as $product) {
            $checkSticker = StickersConnection::where('product_id', '=', $product->id)->first();
            if ($checkSticker) {
                $sticker = Stickers::where('id', '=', $checkSticker->sticker_id)->first();
                $product->sticker_text = $sticker->text;
                $product->sticker_color = $sticker->color;
            }
            $buildPrice = strtok($product->price, ',');
            $buildOldPrice = strtok($product->old_price, ',');
            $code = explode(', ', $product->code);
            $code = $code[0];
            // This codeBuilder must be here until we switch to full price codes
            $skuCalcGroups = Product::find($product->id)->skuCalcGroups()->get();
            foreach ($skuCalcGroups as $key => $group) {
                $skuCalcProducts = CalcGroups::find($group->id)->skuCalcOptions()->get();
                $codeToBuild = $skuCalcProducts[0]->code;
                $buildPrice += intval($skuCalcProducts[0]->price);
                $buildOldPrice += intval($skuCalcProducts[0]->old_price);
                if (!empty($codeToBuild)) {
                    $code .= '-'.trim($codeToBuild);
                }
            }
            // End of codeBuilder
            $product->currency = sku::where('product_id', '=', $product->id)->pluck('currency')->first();
            $product->price = $buildPrice;
            $product->old_price = $buildOldPrice;
            $product->code = $code;
        }
        $data['productsID'] = $productsID;
        $data['products'] = $products;
        return $data;
    }

    public function getFiltersForSearch($productIds, $categoriesId, $path)
    {
        $path = '/'.$path;
        $additionalOptionsId = additionalOptions::whereIn('product_id', $productIds)->distinct()->pluck('option_value_id')->all();
        $optionValues = DB::table('option_values')->select(DB::raw('option_values.id, option_values.option_id, option_values.value, option_values.url AS option_value_url, options.name, options.url AS option_url', 'filters.category_id AS cat'))
                                                  ->join('options', 'option_values.option_id', '=', 'options.id')
                                                  ->join('filters', 'options.id', '=', 'filters.option_id')
                                                  ->whereIn('filters.category_id', $categoriesId)
                                                  ->whereIn('option_values.id', $additionalOptionsId)
                                                  ->distinct()
                                                  ->orderBy('filters.sort_position')
                                                  ->orderByRaw('option_values.value+0, option_values.value')
                                                  ->get();
        $filters = array();
        foreach ($optionValues as $key => $value) {
            $id = $value->option_id;
            $filters[$id]['name'] = $value->name;
            $filters[$id]['url'] = $value->option_url;
            $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $path.'/filters/'.$value->option_url.'='.$value->option_value_url, 'selected' => false, 'disabled' => false);
        }
        return $filters;
    }

    public function getSelectedFiltersForSearch($productsIdAvailable, $productsFilteredId, $categoriesId, $receivedFilters, $pagePath)
    {
        $pagePath = '/'.$pagePath.'/filters/';
        $additionalOptionsId = additionalOptions::whereIn('product_id', $productsIdAvailable)->distinct()->pluck('option_value_id')->all();
        $canBeSelectedAdditionalOptionsId = additionalOptions::whereIn('product_id', $productsFilteredId)->distinct()->pluck('option_value_id')->all();
        $optionValues = DB::table('option_values')->select(DB::raw('option_values.id, option_values.option_id, option_values.value, option_values.url AS option_value_url, options.name, options.url AS option_url'))
                                                  ->join('options', 'option_values.option_id', '=', 'options.id')
                                                  ->join('filters', 'options.id', '=', 'filters.option_id')
                                                  ->whereIn('filters.category_id', $categoriesId)
                                                  ->whereIn('option_values.id', $additionalOptionsId)
                                                  ->distinct()
                                                  ->orderBy('filters.sort_position')
                                                  ->orderByRaw('option_values.value+0, option_values.value')
                                                  ->get();
        $optionValuesEnabled = DB::table('option_values')->select(DB::raw('option_values.id, option_values.option_id, option_values.value, option_values.url AS option_value_url, options.name, options.url AS option_url'))
                                                  ->join('options', 'option_values.option_id', '=', 'options.id')
                                                  ->join('filters', 'options.id', '=', 'filters.option_id')
                                                  ->whereIn('filters.category_id', $categoriesId)
                                                  ->whereIn('option_values.id', $canBeSelectedAdditionalOptionsId)
                                                  ->distinct()
                                                  ->orderBy('filters.sort_position')
                                                  ->orderByRaw('option_values.value+0, option_values.value')
                                                  ->pluck('option_values.id')->all();
        $selectedFilters = array();
        foreach ($receivedFilters as $selectedFilter) {
            $explodeOption = explode('=', $selectedFilter);
            foreach ($explodeOption as $option) {
                if ($option != $explodeOption[0]) {
                    if (strpos($option, '&')) {
                        $explodeMoreOption = explode('&', $option);
                        foreach ($explodeMoreOption as $moreOption) {
                            $selectedFilters[$explodeOption[0]][] = $moreOption;
                        }
                    } else {
                        $selectedFilters[$explodeOption[0]][] = $option;
                    }
                }
            }
        }
        $selectedOVIds = array();
        foreach ($selectedFilters as $filterUrl => $value) {
            $optionId = Options::where('url', '=', $filterUrl)->pluck('id')->first();
            foreach ($value as $url) {
                $getOVid = OptionValues::where('url', '=', $url)->where('option_id', '=', $optionId)->pluck('id')->first();
                $selectedOVIds[] = $getOVid;
            }
        }
        $mainFilter = array();
        foreach ($selectedFilters as $filterUrl => $value) {
            $mainFilter = $filterUrl;
            break;
        }
        $filters = array();
        foreach ($optionValues as $key => $value) {
            $id = $value->option_id;
            $filters[$id]['name'] = $value->name;
            $filters[$id]['url'] = $value->option_url;
            if (in_array($value->id, $optionValuesEnabled)) {
                if (in_array($value->id, $selectedOVIds)) {
                    $path = $selectedFilters;
                    $url = $pagePath;
                    foreach ($path as $optionUrl => $optionValues) {
                        if ($optionUrl == $value->option_url) {
                            foreach ($optionValues as $key => $val) {
                                if ($val == $value->option_value_url) {
                                    unset($path[$optionUrl][$key]);
                                }
                            }
                        }
                    }
                    foreach ($path as $optionUrl => $optionValues) {
                        if ($optionValues) {
                            $url .= '/'.$optionUrl.'=';
                            foreach ($optionValues as $val) {
                                $url .= '&'.$val;
                            }
                        }
                    }
                    $url = str_replace('=&', '=', $url);
                    $url = str_replace('//', '/', $url);
                    $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => true, 'disabled' => false);
                } else {
                    $path = $selectedFilters;
                    $path[$value->option_url][] = $value->option_value_url;
                    $url = $pagePath;
                    foreach ($path as $optionUrl => $optionValues) {
                        $url .= '/'.$optionUrl.'=';
                        foreach ($optionValues as $val) {
                            $url .= '&'.$val;
                        }
                    }
                    $url = str_replace('=&', '=', $url);
                    $url = str_replace('//', '/', $url);
                    $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => false, 'disabled' => false);
                }
            } else {
                if ($value->option_url == $mainFilter) {
                    if (in_array($value->id, $selectedOVIds)) {
                        $path = $selectedFilters;
                        $url = $pagePath;
                        foreach ($path as $optionUrl => $optionValues) {
                            if ($optionUrl == $value->option_url) {
                                foreach ($optionValues as $key => $val) {
                                    if ($val == $value->option_value_url) {
                                        unset($path[$optionUrl][$key]);
                                    }
                                }
                            }
                        }
                        foreach ($path as $optionUrl => $optionValues) {
                            if ($optionValues) {
                                $url .= '/'.$optionUrl.'=';
                                foreach ($optionValues as $val) {
                                    $url .= '&'.$val;
                                }
                            }
                        }
                        $url = str_replace('=&', '=', $url);
                        $url = str_replace('//', '/', $url);
                        $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => true, 'disabled' => false);
                    } else {
                        $path = $selectedFilters;
                        $path[$value->option_url][] = $value->option_value_url;
                        $url = $pagePath;
                        foreach ($path as $optionUrl => $optionValues) {
                            $url .= '/'.$optionUrl.'=';
                            foreach ($optionValues as $val) {
                                $url .= '&'.$val;
                            }
                        }
                        $url = str_replace('=&', '=', $url);
                        $url = str_replace('//', '/', $url);
                        $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => $url, 'selected' => false, 'disabled' => false);
                    }
                } else {
                    $filters[$id]['option_value'][] = array('id' => $value->id, 'value' => $value->value, 'url' => '/', 'selected' => false, 'disabled' => true);
                }
            }
        }
        return $filters;
    }

    public function getUnfilteredProductsForDeals($inStock, $productsIdAvailable, $minPrice, $maxPrice, $sortFiled, $sortDirection, $paginate)
    {
        switch($inStock) {
            case 0:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '=';
                break;
            case 1:
                $whereInStock = 'products.in_stock';
                $whereInStockOperator = '>';
                break;
            default;
                $whereInStock = 'products.id';
                $whereInStockOperator = '>=';
                break;
        }
        $products = DB::table('products')->select(DB::raw('products.*, brands.name AS brand_name, brands.url AS brand_url, brands.image AS brand_image, sku.sku_code AS code, currencies.char_code AS currency, currencies.nominal AS currency_nominal, currencies.value AS currency_value, sku.price AS price, sku.old_price AS old_price, sku.sku AS sku, stickers.text AS sticker_text, stickers.color AS sticker_color'))
                                        ->join('sku', function ($join) {
                                            $join->on('sku.id', '=', DB::raw('(SELECT id FROM sku WHERE sku.product_id = products.id ORDER BY sku.price ASC LIMIT 1)'));
                                        })
                                        ->join('currencies', 'sku.currency_id', '=', 'currencies.id')
                                        ->join('brands', 'products.brand_id', '=', 'brands.id')
                                        ->leftJoin('stickers_connections', 'products.id', '=', 'stickers_connections.product_id')
                                        ->leftJoin('stickers', 'stickers_connections.sticker_id', '=', 'stickers.id')
                                        ->whereIn('products.id', $productsIdAvailable)
                                        ->where('products.published', '=', 1)
                                        ->where($whereInStock, $whereInStockOperator, 0)
                                        ->whereRaw('sku.price*currencies.nominal*currencies.value >= ?', $minPrice)
                                        ->whereRaw('sku.price*currencies.nominal*currencies.value <= ?', $maxPrice)
										->orderByRaw($sortFiled.' '.$sortDirection)
                                        ->groupBy('products.id')
                                        ->paginate($paginate);
        return $products;
    }

    public function getCategoriesId($id, $subLvl) {
        switch ($subLvl) {
            case 1:
                $thisCategoryF[] = Categories::where('id', '=', $id)->where('active', '=', 1)->pluck('id')->first();
                $subCategoriesF = Categories::where('parent_id', '=', $thisCategoryF)->where('active', '=', 1)->where('show_content', '=', 1)->pluck('id')->all();
                $subSubCategoriesF = Categories::whereIn('parent_id', $subCategoriesF)->where('active', '=', 1)->where('show_content', '=', 1)->pluck('id')->all();
                $toSearch = array_merge($thisCategoryF, $subCategoriesF, $subSubCategoriesF);
                return $toSearch;
            case 2:
                $thisCategoryF[] = Categories::where('id', '=', $id)->where('active', '=', 1)->pluck('id')->first();
                $subCategoriesF = Categories::where('parent_id', '=', $thisCategoryF)->where('active', '=', 1)->where('show_content', '=', 1)->pluck('id')->all();
                $toSearch = array_merge($thisCategoryF, $subCategoriesF);
                return $toSearch;
            case 3:
                $toSearch[] = Categories::where('id', '=', $id)->where('active', '=', 1)->pluck('id')->first();
                return $toSearch;
            default:
                dd('Выбран несуществующий параметр');
        }
    }

    public function getMaxPrice($preProducts) {
        $maxPrice = array();
        foreach ($preProducts as $id) {
            $search_sku = Product::find($id)->sku()->get();
            $build_price = intval($search_sku[0]->price);
            $sku_calc_groups = Product::find($id)->skuCalcGroups()->get();
            foreach ($sku_calc_groups as $sku_key => $group) {
                $sku_calc_products = CalcGroups::find($group->id)->skuCalcOptions()->get();
                $build_price += intval($sku_calc_products[0]->price);
            }
            $maxPrice[] = $build_price;
        }
        if ($maxPrice) {
            $maxPrice = max($maxPrice);
        } else {
            $maxPrice = 0;
        }
        return $maxPrice;
    }

    public function getFiltersForPage($searchableId, $preProducts) {
        // How to call a Brand url
        $howToBrand = 'Brand';
        // Getting filters
        $addOptId = additionalOptions::whereIn('product_id', $searchableId)->pluck('option_value_id')->all();
        $addOptId = implode(', ', $addOptId);
        $optionValues = DB::select("SELECT option_values.option_id, option_values.value, option_values.url FROM option_values WHERE option_values.id IN ($addOptId)");
        $checkOptVal = array();
        foreach ($optionValues as $value) {
            $checkOptVal[] = $value->option_id;
        }
        $optionNames = Options::orderBy('name')->whereIn('id', $checkOptVal)->where('type', '!=', 3)->get();
        $filters = array();
        foreach ($optionNames as $key => $optionName) {
            $filters[$optionName->name] = array();
            foreach ($optionValues as $optionValue) {
                if ($optionName->id == $optionValue->option_id) {
                    $filters[$optionName->name][$optionValue->value]['name'] = $optionValue->value;
                    $filters[$optionName->name][$optionValue->value]['selected'] = false;
                    $filters[$optionName->name][$optionValue->value]['url'] = $optionName->url.'='.$optionValue->url;
                }
            }
        }
        $preProductsBrands = Product::whereIn('id', $preProducts)->pluck('brand_id')->all();
        $brands = Brands::whereIn('id', $preProductsBrands)->pluck('id')->all();
        $brands = array_unique($brands);
        foreach ($brands as $brandId) {
            $thisBrand = Brands::where('id', '=', $brandId)->first();
            $filters['Производитель'][$thisBrand->name]['name'] = $thisBrand->name;
            $filters['Производитель'][$thisBrand->name]['selected'] = false;
            $filters['Производитель'][$thisBrand->name]['disabled'] = false;
            $filters['Производитель'][$thisBrand->name]['url'] = $howToBrand.'='.$thisBrand->url;
        }
        $sorted = array();
        foreach ($filters as $optionName => $option) {
            $toSort = array();
            foreach ($option as $key => $value) {
                $toSort[] = $key;
            }
            natsort($toSort);
            $sorted[$optionName] = $toSort;
        }
        $flipSorted = array();
        foreach ($sorted as $key => $value) {
            $flipSorted[$key] = array_flip($value);
        }
        $finalSort = array();
        foreach ($filters as $key => $option) {
            foreach ($flipSorted as $fkey => $foption) {
                if ($key === $fkey) {
                    foreach ($foption as $fkey_2 => $foption_2) {
                        foreach ($option as $key_2 => $option_2) {
                            if ($key_2 === $fkey_2) {
                                $finalSort[$fkey][$fkey_2] = $option_2;
                            }
                        }
                    }
                }
            }
        }
        return $finalSort;
    }

    public function visibleFilters($thisCategoryF) {
        $enabledFilterOptions = Filters::orderBy('sort_position')->where('category_id', '=', $thisCategoryF->id)->get();
        $toShow = array();
        foreach ($enabledFilterOptions as $option) {
            $toShow[] = Options::where('id', '=', $option->option_id)->first();
        }
        return $toShow;
    }

    // When someone starts to filter Options

    public function selectedFilters($any) {
        $receivedFilters = explode('/', $any);
        $selectedFilters = array();
        foreach ($receivedFilters as $selectedFilter) {
            $explodeOption = explode('=', $selectedFilter);
            foreach ($explodeOption as $option) {
                if ($option != $explodeOption[0]) {
                    if (strpos($option, '&')) {
                        $explodeMoreOption = explode('&', $option);
                        foreach ($explodeMoreOption as $moreOption) {
                            $selectedFilters[$explodeOption[0]][] = $moreOption;
                        }
                    } else {
                        $selectedFilters[$explodeOption[0]][] = $option;
                    }
                }
            }
        }
        return $selectedFilters;
    }

    public function filteredProducts($majorFiltersProducts, $otherOptionFilters, $allBrands, $categoryProductsId, $selectedFilters) {
        if (!empty($otherOptionFilters)) {
            $otherOptionProducts = array();
            $intersect = array();
            foreach ($otherOptionFilters as $key => $ov) {
                foreach ($ov as $option) {
                    $getAdditionalOptions = DB::select("SELECT additional_options.product_id FROM additional_options WHERE additional_options.option_value_id = $option->id AND additional_options.product_id IN ($categoryProductsId)");
                    foreach ($getAdditionalOptions as $ao) {
                        $getProduct = DB::table('products')
                                     ->select(DB::raw('id'))
                                     ->where('id', '=', $ao->product_id)
                                     ->pluck('id')->all();
                        $otherOptionProducts[] = $getProduct[0];
                        $intersect[$option->id][] = $getProduct[0];
                    }
                }
            }
            $mustRepeat = count($otherOptionFilters);
            if ($mustRepeat > 1) {
                $getSame = array_count_values($intersect);
                $requiredLoopId = array();
                foreach ($getSame as $key => $repeated) {
                    if ($repeated == $mustRepeat) {
                        $requiredLoopId[] = $key;
                    }
                }
                $otherOptionProductsFixed = array();
                foreach ($requiredLoopId as $getProductId) {
                    $otherOptionProductsFixed[] = Product::where('id', '=', $getProductId)->first();
                }
                $otherOptionProducts = $otherOptionProductsFixed;
            }
            $compareBeforeBrand = array_intersect($otherOptionProducts, $majorFiltersProducts);
        } else {
            $compareBeforeBrand = $majorFiltersProducts;
        }
        $brandProducts = array();
        foreach ($allBrands as $key => $brand) {
            foreach ($selectedFilters as $fkey => $possiblefilter) {
                if ($fkey == $key) {
                    foreach ($brand as $br) {
                        foreach ($possiblefilter as $pf) {
                            if ($br == $pf) {
                                $getBrand = DB::select("SELECT brands.id FROM brands WHERE brands.url = $pf");
                                foreach ($getBrand as $allBrandsHere) {
                                    $brandIds[] = $allBrandsHere;
                                }
                                $brandIds = implode(', ', $brandIds);
                                $getProducts = DB::select("SELECT products.id FROM products WHERE products.brand_id IN ($brandIds)");
                                foreach ($getProducts as $product) {
                                    $brandProducts[] = $product;
                                }
                            }
                        }
                    }
                }
            }
        }
        // Products that will be displayed - $finalCompare
        if (!empty($brandProducts)) {
            $finalCompare = array_intersect($compareBeforeBrand, $brandProducts);
        } else {
            $finalCompare = $compareBeforeBrand;
        }
        return $finalCompare;
    }

    public function optionsToShow($allOptions, $availableOptions, $selectedFilters, $majorSearch, $any) {
        $availableFiltersWithout = array();
        foreach ($selectedFilters as $key => $value) {
            if ($key == $majorSearch) {
                $availableFiltersWithout[$key] = $value;
            }
        }
        $optionsToShow = array();
        foreach ($allOptions as $key => $option) {
            if ($key != $majorSearch) {
                $optionsToShow[$key] = array();
                foreach ($option as $op) {
                    $thisOptionIsSelected = 0;
                    foreach ($selectedFilters as $selectedKey => $selected) {
                        if ($key == $selectedKey) {
                            foreach ($selected as $sl) {
                                if ($sl == $op) {
                                    $thisOptionIsSelected = 1;
                                }
                            }
                        }
                    }
                    switch($thisOptionIsSelected) {
                        case 0:
                            $optionsToShow[$key][$op]['selected'] = false;
                            $optionsToShow[$key][$op]['disabled'] = true;
                            foreach ($availableOptions as $fkey => $filterAvailable) {
                                if ($fkey == $key) {
                                    foreach ($filterAvailable as $fa) {
                                        if ($fa == $op) {
                                            $optionsToShow[$key][$op]['disabled'] = false;
                                            // URL Building
                                            $newPath = '';
                                            $pathPassed = 0;
                                            foreach ($selectedFilters as $skey => $value) {
                                                if ($key == $skey) {
                                                    $newPath .= $skey.'=';
                                                    $newPath .= implode('&', $value);
                                                    $newPath .= '&'.$op;
                                                    $newPath .= '/';
                                                } else {
                                                    $newPath .= $skey.'=';
                                                    $newPath .= implode('&', $value);
                                                    $newPath .= '/';
                                                    if (!(substr_count($any, $key) > 0)) {
                                                        if ($pathPassed == 0) {
                                                            $pathPassed = 1;
                                                            $newPath .= $key.'='.$op;
                                                            $newPath .= '/';
                                                        }
                                                    }
                                                }
                                            }
                                            $optionsToShow[$key][$op]['url'] = $newPath;
                                        }
                                    }
                                }
                            }
                            break;
                        case 1:
                            $optionsToShow[$key][$op]['selected'] = true;
                            $optionsToShow[$key][$op]['disabled'] = true;
                            foreach ($availableOptions as $fkey => $filterAvailable) {
                                if ($fkey == $key) {
                                    foreach ($filterAvailable as $fa) {
                                        if ($fa == $op) {
                                            $optionsToShow[$key][$op]['disabled'] = false;
                                            // URL Building
                                            $newPath = '';
                                            foreach ($selectedFilters as $skey => $value) {
                                                if ($key == $skey) {
                                                    $tempVal = $value;
                                                    $toRemove = array_search($op, $tempVal);
                                                    unset($tempVal[$toRemove]);
                                                    if (!empty($tempVal)) {
                                                        $newPath .= $skey.'=';
                                                        $newPath .= implode('&', $tempVal);
                                                        $newPath .= '/';
                                                    }
                                                } else {
                                                    $newPath .= $skey.'=';
                                                    $newPath .= implode('&', $value);
                                                    $newPath .= '/';
                                                }
                                            }
                                            $optionsToShow[$key][$op]['url'] = $newPath;
                                        }
                                    }
                                }
                            }
                            break;
                    }
                }
            } else {
                $optionsToShow[$key] = array();
                foreach ($option as $op) {
                    $thisOptionIsSelected = 0;
                    foreach ($selectedFilters as $selectedKey => $selected) {
                        if ($key == $selectedKey) {
                            foreach ($selected as $sl) {
                                if ($sl == $op) {
                                    $thisOptionIsSelected = 1;
                                }
                            }
                        }
                    }
                    switch($thisOptionIsSelected) {
                        case 0:
                            $optionsToShow[$key][$op]['selected'] = false;
                            $optionsToShow[$key][$op]['disabled'] = false;
                            // URL Building
                            $newPath = '';
                            foreach ($selectedFilters as $skey => $value) {
                                if ($key == $skey) {
                                    $newPath .= $skey.'=';
                                    $newPath .= implode('&', $value);
                                    $newPath .= '&'.$op;
                                    $newPath .= '/';
                                } else {
                                    $newPath .= $skey.'=';
                                    $newPath .= implode('&', $value);
                                    $newPath .= '/';
                                }
                            }
                            $optionsToShow[$key][$op]['url'] = $newPath;
                            break;
                        case 1:
                            $optionsToShow[$key][$op]['selected'] = true;
                            $optionsToShow[$key][$op]['disabled'] = false;
                            // URL Building
                            $newPath = '';
                            foreach ($selectedFilters as $skey => $value) {
                                if ($key == $skey) {
                                    $tempVal = $value;
                                    $toRemove = array_search($op, $tempVal);
                                    unset($tempVal[$toRemove]);
                                    if (!empty($tempVal)) {
                                        $newPath .= $skey.'=';
                                        $newPath .= implode('&', $tempVal);
                                        $newPath .= '/';
                                    }
                                } else {
                                    $newPath .= $skey.'=';
                                    $newPath .= implode('&', $value);
                                    $newPath .= '/';
                                }
                            }
                            $optionsToShow[$key][$op]['url'] = $newPath;
                            break;
                    }
                }
            }
        }
        $sorted = array();
        foreach ($optionsToShow as $optionName => $option) {
            $toSort = array();
            foreach ($option as $key => $value) {
                $toSort[] = $key;
            }
            natsort($toSort);
            $sorted[$optionName] = $toSort;
        }
        $flipSorted = array();
        foreach ($sorted as $key => $value) {
            $flipSorted[$key] = array_flip($value);
        }
        $finalSort = array();
        foreach ($optionsToShow as $key => $option) {
            foreach ($flipSorted as $fkey => $foption) {
                if ($key === $fkey) {
                    foreach ($foption as $fkey_2 => $foption_2) {
                        foreach ($option as $key_2 => $option_2) {
                            if ($key_2 === $fkey_2) {
                                $finalSort[$fkey][$fkey_2] = $option_2;
                            }
                        }
                    }
                }
            }
        }
        return $finalSort;
    }
}
