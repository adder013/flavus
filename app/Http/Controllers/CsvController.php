<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App;
use App\User;
use App\Delivery;
use App\Categories;
use App\Product;
use App\sku;
use App\Brands;
use App\Options;
use App\OptionValues;
use App\additionalOptions;
use App\UploadProductsLogs;
use App\UploadCalculatorLogs;
use App\Tabs;
use App\CalcGroups;
use App\ProductFiles;
use App\CalcOptions;
use App\Stickers;
use App\StickersConnection;
use App\csvUploads;
use App\csvCategoriesUploads;
use App\GroupsBlocks;
use App\GroupNames;
use App\ProductGroupsBlocks;
use App\CategoryGroupsBlocks;
use App\SortProduct;
use App\SortBrandProduct;
use App\Libraries\csvClass;
use App\DatabaseLog;
use Carbon\Carbon;
use App\Currency;
use App\Email;
use Bukashk0zzz\YmlGenerator\Model\Category;

class CsvController extends Controller
{
    public function importCrmConfigurator(Request $request)
    {
        $uploaded_file = $request->csv;
        $file = fopen($uploaded_file, "r");
        $header = null;
        $data = array();
        while (($row = fgetcsv($file, 100000, ',')) !== false) {
            if (!$header) {
                $header = $row;
                foreach ($header as $key => $value) {
                    $header[$key] = mb_strtolower($value);
                }
            } else {
                $csv[] = array_combine($header, $row);
            }
        }
        $productId = Product::where('name', '=', $csv[0]['name'])->pluck('id')->first();
        $checkLastSKU = sku::orderBy('sku', 'desc')->limit(1)->pluck('sku')->first();
        if (!$checkLastSKU) {
            $newNum = 0;
        } else {
            $newNum = ltrim($checkLastSKU, 'У');
        }
        foreach ($csv as $line) {
            $number = str_pad(($newNum + 1), 8, '0', STR_PAD_LEFT);
            $newNum++;
            $price = $line['price'];
            if ($line['mixed_currency_value'] != '0.00') {
                $mixCurrency = Currency::where('id', '=', $line['mixed_currency_id'])->first();
                $price = $line['mixed_currency_value'] * ($mixCurrency->value / $mixCurrency->nominal);
                $price = $price + $line['price'];
            }
            $sku = new sku();
            $sku->product_id = $productId;
            $sku->sku = 'У'.$number;
            $sku->sku_code = $line['code'];
            $sku->currency_id = $line['currency_id'];
            $sku->price = $price + ($price / 100 * $line['markup']);
            $sku->mrp = $line['mrp'];
            $sku->msp = $line['msp'];
            $sku->save();
        }
    }

    public function importEmails(Request $request)
    {
        Email::truncate();
        $uploaded_file = $request->csv;
        $file = fopen($uploaded_file, "r");
        $header = null;
        $data = array();
        while (($row = fgetcsv($file, 100000, ',')) !== false) {
            if (!$header) {
                $header = $row;
                foreach ($header as $key => $value) {
                    $header[$key] = mb_strtolower($value);
                }
            } else {
                $csv[] = array_combine($header, $row);
            }
        }
        foreach ($csv as $key => $value) {
            $email = new Email();
            $email->source = $value['source'] == '' ? null : $value['source'];
            $email->medium = $value['medium'] == '' ? null : $value['medium'];
            $email->campaign = $value['campaign'] == '' ? null : $value['campaign'];
            $email->email = $value['email'] == '' ? null : $value['email'];
            $email->term = $value['term'] == '' ? null : $value['term'];
            $email->content = $value['content'] == '' ? null : $value['content'];
            $email->type = $value['type'] == '' ? null : $value['type'];
            $email->updated_at = $value['updated_at'] == '' ? null : $value['updated_at'];
            $email->created_at = $value['created_at'] == '' ? null : $value['created_at'];
            $email->save();
        }
    }

    private function csvCategoriesConvert($header, $csvLines)
    {
        $id = array_search(strtolower('id'), array_map('strtolower', $header));
        $parent_id = array_search(strtolower('parent_id'), array_map('strtolower', $header));
        $url = array_search(strtolower('url'), array_map('strtolower', $header));
        $name = array_search(mb_strtolower('наименование'), array_map('mb_strtolower', $header));
        $status = array_search(mb_strtolower('статус'), array_map('mb_strtolower', $header));
        $showMainCategory = array_search(mb_strtolower('отображать содержимое в основной категории'), array_map('mb_strtolower', $header));
        $hide = array_search(strtolower('hide'), array_map('strtolower', $header));
        $brand_id = array_search(strtolower('Бренд'), array_map('strtolower', $header));
        $csv = array();
        $catIds = array();
        $catUrlIds = array();
        $error = false;
        $existsCategoriesId = Categories::pluck('id')->all();
        foreach ($csvLines as $row => $line) {
            if (is_array($line) && $row != 0) {
                foreach ($line as $key => $lineValue) {
                    if ($key === $id) {
                        $existsCategoriesId[] = intval($lineValue);
                    }
                }
            }
        }
        $existsCategoriesId = array_unique($existsCategoriesId);
        foreach ($csvLines as $row => $line) {
            $newLine = array();
            if (is_array($line) && $row != 0) {
                foreach ($line as $key => $lineValue) {
                    if ($key === $id) {
                        if (intval($lineValue) !== 0 && !in_array($lineValue, $catIds)) {
                            $newLine[] = array('text' => intval($lineValue), 'error' => false);
                        } else {
                            $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                            $error = true;
                        }
                        $catIds[] = $lineValue;
                    } elseif ($key === $parent_id && ($id === 0 || $id != '')) {
                        if (intval($lineValue) !== 0 && intval($lineValue) != intval($line[$id]) && in_array(intval($lineValue), $existsCategoriesId)) {
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        } else {
                            if (empty($lineValue)) {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                        }
                    } elseif ($key === $name) {
                        if ($lineValue != '') {
                            $lineValue = preg_replace('/[!]/', '', $lineValue);
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        } else {
                            $lineValue = preg_replace('/[!]/', '', $lineValue);
                            $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                            $error = true;
                        }
                    } elseif ($key === $url) {
                        if (Parent::hasSpecialCharacters($lineValue) === true && !in_array($line[$parent_id].$lineValue, $catUrlIds)) {
                            $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                        } else {
                            $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                            $error = true;
                        }
                        $catUrlIds[] = $line[$parent_id].$lineValue;
                    } elseif ($key == $status || $key == $showMainCategory || $key == $hide) {
                        if ($lineValue == '0' || $lineValue == '1' || $lineValue == '') {
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        } else {
                            $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                            $error = true;
                        }
                    } elseif ($key == $brand_id) {
                        if ($lineValue != '') {
                            if (Brands::where('name', $lineValue)->first()) {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                        } else {
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        }
                    } else {
                        $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                    }
                }
            } elseif ($row == 0) {
                foreach ($line as $key => $lineValue) {
                    if ($id !== false && $parent_id !== false && $url !== false && $name !== false && $status !== false && $showMainCategory !== false && $hide !== false) {
                        $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                    } else {
                        $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                        $error = true;
                    }
                }
            }
            $csv[] = $newLine;
        }
        return array($csv, $error);
    }

    protected function prepareCategories(Request $request)
    {
        $csvFile = $request->file('files');
        $start = 0;
        for ($i = 0; $i < count($csvFile); $i++) {
            $fileHandle = fopen($csvFile[$i], 'r');
            while (!feof($fileHandle)) {
                if ($start == 0) {
                    $csvLines[] = fgetcsv($fileHandle, 100000);
                } else {
                    $csvLines[0] = fgetcsv($fileHandle, 100000);
                    $start = 0;
                }
            }
            $start = 1;
            fclose($fileHandle);
        }
        $header = $csvLines[0];
        $data = $this->csvCategoriesConvert($header, $csvLines);
        $csv = $data[0];
        $error = $data[1];
        return response()->json([
            'csv' => $csv,
            'errors' => $error,
        ]);
    }

    protected function checkCategories(Request $request)
    {
        $header = array();
        foreach ($request->categoriesHeader as $line) {
            $header[] = $line[0]['text'];
        }
        $csvLines[] = $header;
        foreach ($request->categories as $body) {
            $toCategory = array();
            foreach ($body as $line) {
                $toCategory[] = $line['text'];
            }
            if (!empty($toCategory)) {
                $csvLines[] = $toCategory;
            }
        }
        $data = $this->csvCategoriesConvert($header, $csvLines);
        $csv = $data[0];
        $error = $data[1];
        return response()->json([
            'csv' => $csv,
            'errors' => $error,
        ]);
    }

    protected function uploadCategory(Request $request)
    {
        $header = array();
        foreach ($request->categoriesHeader as $categoryheader) {
            $header[] = mb_strtolower($categoryheader[0]['text']);
        }
        $body = array();
        foreach ($request->categories as $categoryBody) {
            $body[] = $categoryBody['text'];
        }
        $csvLine = array_combine($header, $body);
        try {
            $category = Categories::where('id', '=', $csvLine['id'])->first();
            if (!$category) {
                $category = new Categories();
            }
            foreach ($csvLine as $property => $value) {
                switch ($property) {
                    case 'id':
                        $category->id = $value;
                        break;
                    case 'parent_id':
                        $category->parent_id = $value;
                        break;
                    case 'наименование':
                        $category->name = $value;
                        break;
                    case 'url':
                        $category->url = $value;
                        break;
                    case 'изображение':
                        $category->image = $value;
                        break;
                    case 'meta title':
                        $category->meta_title = $value;
                        break;
                    case 'meta description':
                        $category->meta_description = $value;
                        break;
                    case 'статус':
                        $category->active = $value;
                        break;
                    case 'отображать содержимое в основной категории':
                        $category->show_content = $value;
                        break;
                    case 'hide':
                        $category->show_menu = $value == 0 ? 1 : 0;
                        break;
                    case 'описание':
                        $category->body = $value;
                        break;
                    case 'sort_position':
                        $category->sort_position = $value;
                        break;
                    case 'бренд':
                        if ($value) {
                            $category->brand_id = Brands::where('name', $value)->first()->id;
                        }
                        break;
                    default:
                        break;
                }
            }
            if (empty($category->parent_id)) {
                $category->depth = 1;
            } else {
                $category->depth = Parent::categoryDepth($category->parent_id);
            }
            $category->save();
            // Log this Action
            $log = new DatabaseLog();
            $dateTime = Carbon::now();
            $log->date = $dateTime->toDateString();
            $log->time = $dateTime->toTimeString();
            $log->item = $category->name;
            $log->item_url = $category->url;
            $log->action = 'csv импорт категорий';
            $log->user = User::where('id', '=', $request->user)->pluck('name')->first();
            $log->save();
            return response()->json(null, 200);
        } catch (\Exception $e) {
            return response()->json(null, 400);
        }
    }

    private function loopSearch($id, $name)
    {
        $parent_id = Categories::where('id', '=', $id)->pluck('parent_id')->first();
        $category = Categories::where('name', '=', $name)->where('parent_id', '=', $id)->first();
        if (empty($category)) {
            return $this->loopSearch($parent_id, $name);
        } else {
            return $category->id;
        }
    }

    private function csvProductsConvert($header, $csvLines)
    {
        $name = array_search(mb_strtolower('наименование'), array_map('mb_strtolower', $header));
        $brand = array_search(mb_strtolower('производитель'), array_map('mb_strtolower', $header));
        $url = array_search(strtolower('url'), array_map('strtolower', $header));
        $subSku = array_search(mb_strtolower('дополнительный артикул'), array_map('mb_strtolower', $header));
        $sku = array_search(mb_strtolower('артикул'), array_map('mb_strtolower', $header));
        $sku_code = array_search(mb_strtolower('код товара'), array_map('mb_strtolower', $header));
        $currency = array_search(mb_strtolower('валюта'), array_map('mb_strtolower', $header));
        $price = array_search(mb_strtolower('цена'), array_map('mb_strtolower', $header));
        $old_price = array_search(mb_strtolower('старая цена'), array_map('mb_strtolower', $header));
        $can_buy = array_search(mb_strtolower('доступен для заказа'), array_map('mb_strtolower', $header));
        $status = array_search(mb_strtolower('статус'), array_map('mb_strtolower', $header));
        $in_stock = array_search(mb_strtolower('в наличии'), array_map('mb_strtolower', $header));
        $production = array_search(mb_strtolower('срок изготовления'), array_map('mb_strtolower', $header));
        $delivery = array_search(mb_strtolower('доставка'), array_map('mb_strtolower', $header));
        $sticker = array_search(mb_strtolower('наклейка'), array_map('mb_strtolower', $header));
        $tags = array_search(mb_strtolower('теги'), array_map('mb_strtolower', $header));
        $short_info = array_search(mb_strtolower('краткая информация'), array_map('mb_strtolower', $header));
        $description = array_search(mb_strtolower('описание'), array_map('mb_strtolower', $header));
        $meta_title = array_search(mb_strtolower('meta title'), array_map('mb_strtolower', $header));
        $meta_description = array_search(mb_strtolower('meta description'), array_map('mb_strtolower', $header));
        $csv = array();
        $sameSkus = array();
        $sameUrls = array();
        $error = false;
        $categoryId = null;
        $currentDepth = 0;
        foreach ($csvLines as $row => $line) {
            $newLine = array();
            if (is_array($line) && $row != 0) {
                $lineValue = $line[$name];
                $isCategory = Categories::where('name', '=', trim($lineValue, '!'))->first();
                if ($isCategory) {
                    if (empty($categoryId)) {
                        $category = Categories::where('name', '=', trim($lineValue, '!'))->where('depth', '=', 1)->first();
                        if ($category) {
                            $categoryId = $category->id;
                        }
                    } else {
                        if (mb_substr($lineValue, 0, 1, 'UTF-8') == '!') {
                            $category = Categories::where('name', '=', trim($lineValue, '!'))->where('parent_id', '=', $categoryId)->first();
                            if (empty($category)) {
                                $categoryId = $this->loopSearch($categoryId, trim($lineValue, '!'));
                            } else {
                                $categoryId = $category->id;
                            }
                        } else {
                            $category = Categories::where('name', '=', trim($lineValue, '!'))->where('depth', '=', 1)->first();
                            if ($category) {
                                $categoryId = $category->id;
                            }
                        }
                    }
                } else {
                    foreach ($line as $key => $lineValue) {
                        if ($key === $name) {
                            if ($lineValue != '') {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                        } elseif ($key === $brand) {
                            $brandFound = Brands::where('name', '=', $lineValue)->pluck('id')->first();
                            if ($brandFound) {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                        } elseif ($key === $url) {
                            if (Parent::hasSpecialCharacters(strtolower(trim(strtolower($lineValue), ' '))) === true && (!in_array($lineValue, $sameUrls) || $line[$subSku] !== false)) {
                                $checkURL = Product::where('url', '=', trim(strtolower($lineValue), ' '))->first();
                                if (empty($checkURL)) {
                                    $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => false, 'loading' => 'waiting');
                                } else {
                                    if ($lineValue == $line[$url]) {
                                        $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => false, 'loading' => 'waiting');
                                    } else {
                                        $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => true, 'loading' => 'waiting');
                                        $error = true;
                                    }
                                }
                            } else {
                                $sameName =
                                $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                            $sameUrls[] = $lineValue;
                        } elseif ($key === $sku) {
                            if ((mb_strpos($lineValue, 'У') === 0 && mb_strlen($lineValue) == 7) || $lineValue == '') {
                                if ($lineValue == '') {
                                    $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                                } else {
                                    $checkSKU = sku::where('sku', '=', trim($lineValue, ' '))->pluck('product_id')->first();
                                    if ($checkSKU) {
                                        $checkProductName = Product::where('id', '=', $checkSKU)->pluck('id')->first();
                                        if ($checkProductName && !in_array($lineValue, $sameSkus)) {
                                            $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                                        } else {
                                            $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                                            $error = true;
                                        }
                                    } elseif (!$checkSKU && !in_array($lineValue, $sameSkus)) {
                                        $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                                    } else {
                                        $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                                    }
                                }
                            } else {
                                $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                            $sameSkus[] = $lineValue;
                        } elseif ($key === $currency) {
                            $availableCurrencies = Currency::pluck('char_code')->all();
                            if (in_array(trim($lineValue, ' '), $availableCurrencies)) {
                                $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                            } else {
                                $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                        } elseif ($key === $price) {
                            $floatPrice = str_replace(',', '.', $lineValue);
                            if (is_numeric($floatPrice)) {
                                $float  = number_format($floatPrice, 2, '.', '');
                                $newLine[] = array('text' => trim($float, ' '), 'error' => false, 'loading' => 'waiting');
                            } else {
                                $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                        } elseif ($key === $old_price) {
                            $floatPrice = str_replace(',', '.', $lineValue);
                            if (is_numeric($floatPrice)) {
                                $float  = number_format($floatPrice, 2, '.', '');
                                $newLine[] = array('text' => trim($float, ' '), 'error' => false, 'loading' => 'waiting');
                            } else {
                                if ($lineValue == '') {
                                    $newLine[] = array('text' => trim($float, ' '), 'error' => false, 'loading' => 'waiting');
                                } else {
                                    $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                                    $error = true;
                                }
                            }
                        } elseif ($key === $can_buy || $key === $status) {
                            if ($lineValue == '0' || $lineValue == '1' || $lineValue == '') {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                        } elseif ($key === $in_stock) {
                            if ($lineValue == '0' || intval($lineValue) > 0) {
                                $newLine[] = array('text' => intval($lineValue), 'error' => false, 'loading' => 'waiting');
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                        } elseif ($key === $sticker) {
                            if ($lineValue != '') {
                                $checkSticker = Stickers::where('text', '=', $lineValue)->pluck('id')->first();
                                if ($checkSticker) {
                                    $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                                } else {
                                    $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                    $error = true;
                                }
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            }
                        } else {
                            $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                        }
                    }
                    $categoryPreName = Categories::where('id', '=', $categoryId)->first();
                    $spaces = '';
                    if (isset($categoryPreName->depth)) {
                        for ($i = 1; $i < $categoryPreName->depth; $i++) {
                            $spaces .= '----';
                        }
                        if ($categoryPreName->depth == 1) {
                            $space = '';
                        } else {
                            $space = ' ';
                        }
                        $categoryName = $spaces.$space.$categoryPreName->name;
                        array_unshift($newLine, array('text' => array('name' => $categoryName, 'id' => $categoryPreName->id), 'error' => false, 'loading' => 'waiting'));
                    } else {
                        array_unshift($newLine, array('text' => array('name' => '', 'id' => 0), 'error' => true, 'loading' => 'waiting'));
                    }
                }
            } elseif ($row == 0) {
                foreach ($line as $key => $lineValue) {
                    if ($url !== false && $name != false && $brand != false && $sku != false && $sku_code != false && $currency != false && $price != false
                        && $can_buy != false && $status != false && $in_stock != false && $short_info != false && $description != false
                        && $meta_title != false && $meta_description != false) {
                        $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                    } else {
                        $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                        $error = true;
                    }
                }
                array_unshift($newLine, array('text' => 'Категория', 'error' => false, 'loading' => 'waiting'));
            }
            $csv[] = $newLine;
        }
        foreach ($csv as $key => $line) {
            foreach ($line as $lineKey => $value) {
                $csv[$key][$lineKey]['click'] = false;
            }
        }
        return array($csv, $error);
    }

    private function csvCheckedProductsConvert($header, $csvLines)
    {
        $category = array_search(mb_strtolower('категория'), array_map('mb_strtolower', $header));
        $name = array_search(mb_strtolower('наименование'), array_map('mb_strtolower', $header));
        $brand = array_search(mb_strtolower('производитель'), array_map('mb_strtolower', $header));
        $subSku = array_search(mb_strtolower('дополнительный артикул'), array_map('mb_strtolower', $header));
        $url = array_search(strtolower('url'), array_map('strtolower', $header));
        $sku = array_search(mb_strtolower('артикул'), array_map('mb_strtolower', $header));
        $sku_code = array_search(mb_strtolower('код товара'), array_map('mb_strtolower', $header));
        $currency = array_search(mb_strtolower('валюта'), array_map('mb_strtolower', $header));
        $noTax = array_search(mb_strtolower('цена'), array_map('mb_strtolower', $header));
        $tax = array_search(mb_strtolower('цена, с ндс'), array_map('mb_strtolower', $header));
        $price = $noTax ? $noTax : $tax;
        $old_price = array_search(mb_strtolower('старая цена'), array_map('mb_strtolower', $header));
        $can_buy = array_search(mb_strtolower('доступен для заказа'), array_map('mb_strtolower', $header));
        $status = array_search(mb_strtolower('статус'), array_map('mb_strtolower', $header));
        $in_stock = array_search(mb_strtolower('в наличии'), array_map('mb_strtolower', $header));
        $production = array_search(mb_strtolower('срок изготовления'), array_map('mb_strtolower', $header));
        $delivery = array_search(mb_strtolower('доставка'), array_map('mb_strtolower', $header));
        $sticker = array_search(mb_strtolower('наклейка'), array_map('mb_strtolower', $header));
        $tags = array_search(mb_strtolower('теги'), array_map('mb_strtolower', $header));
        $short_info = array_search(mb_strtolower('краткая информация'), array_map('mb_strtolower', $header));
        $description = array_search(mb_strtolower('описание'), array_map('mb_strtolower', $header));
        $meta_title = array_search(mb_strtolower('meta title'), array_map('mb_strtolower', $header));
        $meta_description = array_search(mb_strtolower('meta description'), array_map('mb_strtolower', $header));
        $csv = array();
        $sameSkus = array();
        $sameUrls = array();
        $error = false;
        $categoryId = null;
        $currentDepth = 0;
        foreach ($csvLines as $row => $line) {
            $newLine = array();
            if (is_array($line) && $row != 0) {
                foreach ($line as $key => $lineValue) {
                    if ($key === $category) {
                        if (isset($lineValue['name']) && isset($lineValue['id'])) {
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        } else {
                            if (!isset($line[$subSku])) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } elseif ($line[$subSku] != 1) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            }
                        }
                    } elseif ($key === $name) {
                        if ($lineValue != '') {
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        } else {
                            if (!isset($line[$subSku])) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } elseif ($line[$subSku] != 1) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            }
                        }
                    } elseif ($key === $brand) {
                        $brandFound = Brands::where('name', '=', $lineValue)->pluck('id')->first();
                        if ($brandFound) {
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        } else {
                            if (!isset($line[$subSku])) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } elseif ($line[$subSku] != 1) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            }
                        }
                    } elseif ($key === $url) {
                        if (Parent::hasSpecialCharacters(strtolower(trim(strtolower($lineValue), ' '))) === true && (!in_array($lineValue, $sameUrls) || $line[$subSku] !== false)) {
                            $checkURL = Product::where('url', '=', trim(strtolower($lineValue), ' '))->first();
                            if (empty($checkURL)) {
                                $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => false, 'loading' => 'waiting');
                            } else {
                                if ($lineValue == $line[$url]) {
                                    $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => false, 'loading' => 'waiting');
                                } else {
                                    if (!isset($line[$subSku])) {
                                        $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => true, 'loading' => 'waiting');
                                        $error = true;
                                    } elseif ($line[$subSku] != 1) {
                                        $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => true, 'loading' => 'waiting');
                                        $error = true;
                                    } else {
                                        $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => false, 'loading' => 'waiting');
                                    }
                                }
                            }
                        } else {
                            if (!isset($line[$subSku])) {
                                $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } elseif ($line[$subSku] != 1) {
                                $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } else {
                                $newLine[] = array('text' => trim(strtolower($lineValue), ' '), 'error' => false, 'loading' => 'waiting');
                            }
                        }
                        $sameUrls[] = $lineValue;
                    } elseif ($key === $sku) {
                        if ((mb_strpos($lineValue, 'У') === 0 && mb_strlen($lineValue) == 9) || $lineValue == '') {
                            if ($lineValue == '') {
                                $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                            } else {
                                $checkSKU = sku::where('sku', '=', trim($lineValue, ' '))->first();
                                if (!empty($checkSKU)) {
                                    $checkProductName = Product::where('id', '=', $checkSKU->product_id)->pluck('name')->first();
                                    if (($checkProductName == $line[$name] || $checkSKU->sku_code == $line[$sku_code]) && !in_array($lineValue, $sameSkus)) {
                                        $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                                    } else {
                                        $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                                        $error = true;
                                    }
                                } elseif (!$checkSKU && !in_array($lineValue, $sameSkus)) {
                                    $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                                } else {
                                    $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                                }
                            }
                        } else {
                            $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                            $error = true;
                        }
                        $sameSkus[] = $lineValue;
                    } elseif ($key === $currency) {
                        $availableCurrencies = Currency::pluck('char_code')->all();
                        if (in_array(trim($lineValue, ' '), $availableCurrencies)) {
                            $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                        } else {
                            $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                            $error = true;
                        }
                    } elseif ($key === $price) {
                        $floatPrice = str_replace(',', '.', $lineValue);
                        if (is_numeric($floatPrice)) {
                            $float  = number_format($floatPrice, 2, '.', '');
                            $newLine[] = array('text' => trim($float, ' '), 'error' => false, 'loading' => 'waiting');
                        } else {
                            $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                            $error = true;
                        }
                    } elseif ($key === $old_price) {
                        $floatPrice = str_replace(',', '.', $lineValue);
                        if (is_numeric($floatPrice)) {
                            $float  = number_format($floatPrice, 2, '.', '');
                            $newLine[] = array('text' => trim($float, ' '), 'error' => false, 'loading' => 'waiting');
                        } else {
                            if ($lineValue == '') {
                                $newLine[] = array('text' => trim($float, ' '), 'error' => false, 'loading' => 'waiting');
                            } else {
                                $newLine[] = array('text' => trim($lineValue, ' '), 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            }
                        }
                    } elseif ($key === $can_buy || $key === $status) {
                        if ($lineValue == '0' || $lineValue == '1' || $lineValue == '') {
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        } else {
                            if (!isset($line[$subSku])) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } elseif ($line[$subSku] != 1) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            }
                        }
                    } elseif ($key === $in_stock) {
                        if ($lineValue == '0' || intval($lineValue) > 0) {
                            $newLine[] = array('text' => intval($lineValue), 'error' => false, 'loading' => 'waiting');
                        } else {
                            if (!isset($line[$subSku])) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } elseif ($line[$subSku] != 1) {
                                $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                $error = true;
                            } else {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            }
                        }
                    } elseif ($key === $sticker) {
                        if ($lineValue != '') {
                            $checkSticker = Stickers::where('text', '=', $lineValue)->pluck('id')->first();
                            if ($checkSticker) {
                                $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                            } else {
                                if (!isset($line[$subSku])) {
                                    $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                    $error = true;
                                } elseif ($line[$subSku] != 1) {
                                    $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                                    $error = true;
                                } else {
                                    $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                                }
                            }
                        } else {
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        }
                    } else {
                        $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                    }
                }
            } elseif ($row == 0) {
                foreach ($line as $key => $lineValue) {
                    if ($url !== false && $name != false && $brand != false && $sku != false && $sku_code != false && $currency != false && $price != false
                        && $can_buy != false && $status != false && $in_stock != false && $short_info != false && $description != false
                        && $meta_title != false && $meta_description != false) {
                        $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                    } else {
                        $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                        $error = true;
                    }
                }
            }
            $csv[] = $newLine;
        }
        foreach ($csv as $key => $line) {
            foreach ($line as $lineKey => $value) {
                $csv[$key][$lineKey]['click'] = false;
            }
        }
        return array($csv, $error);
    }

    protected function prepareProducts(Request $request)
    {
        $csvFile = $request->file('files');
        $start = 0;
        for ($i = 0; $i < count($csvFile); $i++) {
            $fileHandle = fopen($csvFile[$i], 'r');
            while (!feof($fileHandle)) {
                if ($start == 0) {
                    $csvLines[] = fgetcsv($fileHandle, 1000000);
                } else {
                    $csvLines[0] = fgetcsv($fileHandle, 1000000);
                    $start = 0;
                }
            }
            $start = 1;
            fclose($fileHandle);
        }
        $header = $csvLines[0];
        $data = $this->csvProductsConvert($header, $csvLines);
        $csv = $data[0];
        $error = $data[1];
        return response()->json([
            'csv' => $csv,
            'errors' => $error,
        ]);
    }

    protected function checkProducts(Request $request)
    {
        $header = array();
        foreach ($request->productsHeader as $line) {
            $header[] = $line[0]['text'];
        }
        $csvLines[] = $header;
        foreach ($request->products as $body) {
            $toProduct = array();
            foreach ($body as $line) {
                $toProduct[] = $line['text'];
            }
            if (!empty($toProduct)) {
                $csvLines[] = $toProduct;
            }
        }
        $data = $this->csvCheckedProductsConvert($header, $csvLines);
        $csv = $data[0];
        $error = $data[1];
        return response()->json([
            'csv' => $csv,
            'errors' => $error,
        ]);
    }

    protected function uploadProduct(Request $request)
    {
        $header = array();
        for ($i = 0; $i < count($request->productsHeader); $i++) {
            switch (mb_strtolower($request->productsHeader[$i][0]['text'])) {
                case 'категория':
                    $header[] = 'category';
                    break;
                case 'наименование':
                    $header[] = 'name';
                    break;
                case 'артикул':
                    $header[] = 'sku';
                    break;
                case 'код товара':
                    $header[] = 'skucode';
                    break;
                case 'дополнительный артикул':
                    $header[] = 'subsku';
                    break;
                default:
                    $header[] = mb_strtolower($request->productsHeader[$i][0]['text']).'_'.$i;
                    break;
            }
        }
        $body = array();
        foreach ($request->products as $productBody) {
            if (isset($productBody['text']['id'])) {
                $body[] = $productBody['text']['id'];
            } else {
                $body[] = $productBody['text'];
            }
        }
        $csvLine = array_combine($header, $body);
        try {
            $firstImage = false;
            $product = Product::where('name', '=', $csvLine['name'])->first();
            $sku = sku::where('sku_code', '=', $csvLine['skucode'])->orWhere('sku', '=', $csvLine['sku'])->first();
            $deleteMe = false;
            if (!$sku && $product) {
                $sku = new sku();
            } elseif ($sku && !$product) {
                if ($request->type == 1) {
                    $product = new Product();
                    $checkForLastSku = sku::where('product_id', '=', $sku->product_id)->get();
                    if (count($checkForLastSku) < 2) {
                        $deleteMe = $sku->product_id;
                    }
                } else {
                    $product = Product::where('id', '=', $sku->product_id)->first();
                }
            } elseif (!$sku && !$product) {
                $product = new Product();
                $sku = new sku();
            } elseif ($sku && $product) {
                if ($request->type == 1) {
                    if ($sku->product_id != $product->id) {
                        $checkForLastSku = sku::where('product_id', '=', $sku->product_id)->get();
                        if (count($checkForLastSku) < 2) {
                            $deleteMe = $sku->product_id;
                        }
                    }
                }
            }
            $category_id = 0;
            foreach ($csvLine as $property => $value) {
                $property = explode('_', $property);
                $property = $property[0];
                switch ($property) {
                    case 'category':
                        $category_id = $value;
                        break;
                    case 'name':
                        $product->name = trim($value);
                        break;
                    case 'url':
                        $product->url = $value;
                        break;
                    case 'производитель':
                        $brand = Brands::where('name', '=', $value)->pluck('id')->first();
                        $product->brand_id = $brand;
                        break;
                    case 'url':
                        $product->url = $value;
                        break;
                    case 'доступен для заказа':
                        $product->can_buy = $value;
                        break;
                    case 'в наличии':
                        $product->in_stock = $value;
                        break;
                    case 'статус':
                        $product->published = $value;
                        break;
                    case 'срок изготовления':
                        $product->production = $value;
                        break;
                    case 'доставка':
                        $product->delivery = $value;
                        break;
                    case 'краткая информация':
                        $product->short_description = $value;
                        break;
                    case 'описание':
                        $product->description = $value;
                        break;
                    case 'изображения':
                        if (!$firstImage) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $product->image = $truePath;
                            $firstImage = true;
                        }
                        break;
                    case 'meta title':
                        $product->meta_title = $value;
                        break;
                    case 'meta description':
                        $product->meta_description = $value;
                        break;
                    case 'sku':
                        if (empty($value)) {
                            if (!isset($sku->sku)) {
                                $checkLastSKU = sku::orderBy('sku', 'desc')->limit(1)->pluck('sku')->first();
                                if (!$checkLastSKU) {
                                    $sku->sku = 'У00000001';
                                } else {
                                    $newNum = ltrim($checkLastSKU, 'У');
                                    $number = str_pad(($newNum + 1), 8, '0', STR_PAD_LEFT);
                                    $sku->sku = 'У'.$number;
                                }
                            }
                        } else {
                            $sku->sku = $value;
                        }
                        break;
                    case 'skucode':
                        $sku->sku_code = $value;
                        break;
                    case 'валюта':
                        $currencyId = Currency::where('char_code', '=', $value)->pluck('id')->first();
                        $sku->currency_id = $currencyId;
                        break;
                    case 'цена':
                        $sku->price = $value;
                        break;
                    case 'цена, с ндс':
                        $sku->price = $value / 120 * 100;
                        break;
                    case 'старая цена':
                        $sku->old_price = $value;
                        break;
                    case 'наценка':
                        $sku->markup = $value;
                        break;
                    default:
                        break;
                }
            }
            if (!isset($csvLine['subsku'])) {
                $product->save();
            } elseif ($csvLine['subsku'] != 1) {
                $product->save();
            }
            $product->categories()->syncWithoutDetaching($category_id);
            $sku->product_id = $product->id;
            $sku->save();
            $product = Product::where('id', '=', $product->id)->first();
            if (!isset($csvLine['subsku'])) {
                GroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                ProductGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                CategoryGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                Tabs::where('product_id', '=', $product->id)->delete();
                additionalOptions::where('product_id', '=', $product->id)->delete();
                ProductFiles::where('product_id', '=', $product->id)->delete();
                StickersConnection::where('product_id', '=', $product->id)->delete();
            } elseif ($csvLine['subsku'] != 1) {
                GroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                ProductGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                CategoryGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                Tabs::where('product_id', '=', $product->id)->delete();
                additionalOptions::where('product_id', '=', $product->id)->delete();
                ProductFiles::where('product_id', '=', $product->id)->delete();
                StickersConnection::where('product_id', '=', $product->id)->delete();
            }
            foreach ($csvLine as $property => $value) {
                $property = explode('_', $property);
                $property = $property[0];
                switch ($property) {
                    case 'наклейка':
                        StickersConnection::where('product_id', '=', $product->id)->delete();
                        if (!empty($value)) {
                            $stickerGroupId = Stickers::where('text', '=', $value)->pluck('id')->first();
                            if ($stickerGroupId) {
                                $sticker = new StickersConnection();
                                $sticker->product_id = $product->id;
                                $sticker->sticker_id = $stickerGroupId;
                                $sticker->save();
                            }
                        }
                        break;
                    case 'изображения':
                        if (!empty($value)) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $newFileConnection = new ProductFiles();
                            $newFileConnection->product_id = $product->id;
                            $newFileConnection->path = $truePath;
                            $newFileConnection->type = 2;
                            $newFileConnection->save();
                        }
                        break;
                    case 'документация':
                        if (!empty($value)) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $newFileConnection = new ProductFiles();
                            $newFileConnection->product_id = $product->id;
                            $newFileConnection->path = $truePath;
                            $newFileConnection->type = 1;
                            $newFileConnection->save();
                        }
                        break;
                    case 'форма заказа':
                        if (!empty($value)) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $tab = new Tabs();
                            $tab->product_id = $product->id;
                            $tab->name = 'Форма заказа';
                            $tab->url = 'howtoorder';
                            $tab->body = $truePath;
                            $checkPosition = Tabs::where('product_id', '=', $product->id)->count();
                            $tab->sort_position = $checkPosition + 1;
                            $tab->save();
                        }
                        break;
                    case 'режимы работы':
                        if (!empty($value)) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $tab = new Tabs();
                            $tab->product_id = $product->id;
                            $tab->name = 'Режимы работы';
                            $tab->url = 'work_mode';
                            $tab->body = $truePath;
                            $checkPosition = Tabs::where('product_id', '=', $product->id)->count();
                            $tab->sort_position = $checkPosition + 1;
                            $tab->save();
                        }
                        break;
                    case 'способы регулировки мощности':
                        if (!empty($value)) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $tab = new Tabs();
                            $tab->product_id = $product->id;
                            $tab->name = 'Способы регулировки мощности';
                            $tab->url = 'work_mode';
                            $tab->body = $truePath;
                            $checkPosition = Tabs::where('product_id', '=', $product->id)->count();
                            $tab->sort_position = $checkPosition + 1;
                            $tab->save();
                        }
                        break;
                    case 'диаграммы работы':
                        if (!empty($value)) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $tab = new Tabs();
                            $tab->product_id = $product->id;
                            $tab->name = 'Диаграммы работы';
                            $tab->url = 'diagram';
                            $tab->body = $truePath;
                            $checkPosition = Tabs::where('product_id', '=', $product->id)->count();
                            $tab->sort_position = $checkPosition + 1;
                            $tab->save();
                        }
                        break;
                    case 'схема подключения':
                        if (!empty($value)) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $tab = new Tabs();
                            $tab->product_id = $product->id;
                            $tab->name = 'Схема подключения';
                            $tab->url = 'installationscheme';
                            $tab->body = $truePath;
                            $checkPosition = Tabs::where('product_id', '=', $product->id)->count();
                            $tab->sort_position = $checkPosition + 1;
                            $tab->save();
                        }
                        break;
                    case 'модификации':
                        if (!empty($value)) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $tab = new Tabs();
                            $tab->product_id = $product->id;
                            $tab->name = 'Модификации';
                            $tab->url = 'modifications';
                            $tab->body = $truePath;
                            $checkPosition = Tabs::where('product_id', '=', $product->id)->count();
                            $tab->sort_position = $checkPosition + 1;
                            $tab->save();
                        }
                        break;
                    case 'функциональная схема':
                        if (!empty($value)) {
                            // Fixing path (you can safely delete this if you want)
                            if (strpos(mb_strtolower($value), 'storage/uploads') === false) {
                                if (strpos(mb_strtolower($value), 'storage/products') !== false) {
                                    $truePath = str_replace("products", 'uploads/products', $value);
                                } else {
                                    $truePath = str_replace("products", 'storage/uploads/products', $value);
                                }
                            } else {
                                $truePath = $value;
                            }
                            $tab = new Tabs();
                            $tab->product_id = $product->id;
                            $tab->name = 'Функциональная схема';
                            $tab->url = 'functionalscheme';
                            $tab->body = $truePath;
                            $checkPosition = Tabs::where('product_id', '=', $product->id)->count();
                            $tab->sort_position = $checkPosition + 1;
                            $tab->save();
                        }
                        break;
                    case 'аксессуар группа':
                        if (!empty($value)) {
                            $checkGroupNameId = GroupNames::where('name', '=', $value)->pluck('id')->first();
                            if (!empty($checkGroupNameId)) {
                                $productGroupsBlocks = new GroupsBlocks();
                                $productGroupsBlocks->product_connect_id = $product->id;
                                $productGroupsBlocks->type = 1;
                                $productGroupsBlocks->group_names_id = $checkGroupNameId;
                                $productGroupsBlocks->save();
                            }
                        }
                        break;
                    case 'аксессуар товар':
                        if (!empty($value)) {
                            $connectProductId = Product::where('url', '=', $value)->pluck('id')->first();
                            if (!empty($connectProductId)) {
                                $productGroupsBlocks = new ProductGroupsBlocks();
                                $productGroupsBlocks->product_connect_id = $product->id;
                                $productGroupsBlocks->type = 1;
                                $productGroupsBlocks->product_id = $connectProductId;
                                $productGroupsBlocks->save();
                            }
                        }
                        break;
                    case 'сопутствующие категории':
                        if (!empty($value)) {
                            $connectCategoryId = Categories::where('name', '=', $value)->pluck('id')->first();
                            if (!empty($connectCategoryId)) {
                                $categoryGroupsBlocks = new CategoryGroupsBlocks();
                                $categoryGroupsBlocks->product_connect_id = $product->id;
                                $categoryGroupsBlocks->type = 2;
                                $categoryGroupsBlocks->category_id = $connectCategoryId;
                                $categoryGroupsBlocks->save();
                            }
                        }
                        break;
                    case 'сопутствующие товары':
                        if (!empty($value)) {
                            $connectProductId = Product::where('url', '=', $value)->pluck('id')->first();
                            if (!empty($connectProductId)) {
                                $productGroupsBlocks = new ProductGroupsBlocks();
                                $productGroupsBlocks->product_connect_id = $product->id;
                                $productGroupsBlocks->type = 3;
                                $productGroupsBlocks->product_id = $connectProductId;
                                $productGroupsBlocks->save();
                            }
                        }
                        break;
                    case 'группа сопутствующих товаров':
                        if (!empty($value)) {
                            $checkGroupNameId = GroupNames::where('name', '=', $value)->pluck('id')->first();
                            if (!empty($checkGroupNameId)) {
                                $productGroupsBlocks = new GroupsBlocks();
                                $productGroupsBlocks->product_connect_id = $product->id;
                                $productGroupsBlocks->type = 3;
                                $productGroupsBlocks->group_names_id = $checkGroupNameId;
                                $productGroupsBlocks->save();
                            }
                        }
                        break;
                    case 'производитель':
                        if (!empty($value)) {
                            $brand = Brands::where('id', '=', $product->brand_id)->first();
                            $option = Options::where('name', '=', 'Производитель')->first();
                            $ov = OptionValues::where('value', '=', $value)->where('option_id', '=', $option->id)->first();
                            if (empty($ov)) {
                                $ov = new OptionValues();
                                $ov->option_id = $option->id;
                                $ov->value = $value;
                                $ov->url = $brand->url;
                                $ov->save();
                            }
                            // Wait a minute, let's check if this connection exists
                            $checkAO = additionalOptions::where('product_id', '=', $product->id)->where('option_value_id', '=', $ov->id)->first();
                            if (empty($checkAO)) {
                                $ao = new additionalOptions();
                                $ao->product_id = $product->id;
                                $ao->option_value_id = $ov->id;
                                $ao->save();
                            }
                        }
                        break;
                    default:
                        $getAllOptions = Options::all();
                        foreach ($getAllOptions as $option) {
                            if (mb_strtolower($property) == mb_strtolower($option->name) && !empty($value)) {
                                $ov = OptionValues::where('value', '=', $value)->where('option_id', '=', $option->id)->first();
                                if (empty($ov)) {
                                    $ov = new OptionValues();
                                    $ov->option_id = $option->id;
                                    $ov->value = $value;
                                    $ov->url = $value;
                                    $ov->save();
                                }
                                // Wait a minute, let's check if this connection exists
                                $checkAO = additionalOptions::where('product_id', '=', $product->id)->where('option_value_id', '=', $ov->id)->first();
                                if (empty($checkAO)) {
                                    $ao = new additionalOptions();
                                    $ao->product_id = $product->id;
                                    $ao->option_value_id = $ov->id;
                                    $ao->save();
                                }
                            }
                        }
                        break;
                }
            }
            foreach ($product->categories as $category) {
                $parentCategories = $this->getParentCategories($category->id);
                $idsString = $this->getSubCategoriesId($category->id);
                $categoriesParentId = explode(', ', $parentCategories);
                $categoriesSubId = explode(', ', $idsString);
                $categoriesId = array_unique(array_merge($categoriesParentId, $categoriesSubId));
                $countProds = Categories::find($category->id)->products->count();
                // $countProds = Product::whereIn('category_id', $categoriesId)->count();
                foreach ($categoriesId as $id) {
                    $check = SortProduct::where('category_id', '=', $id)->where('product_id', '=', $product->id)->first();
                    if (empty($check)) {
                        $newSort = new SortProduct();
                        $newSort->category_id = $id;
                        $newSort->product_id = $product->id;
                        $newSort->sort_position = $countProds;
                        $newSort->save();
                    }
                }
            }
            $countProdsInBrand = Product::where('brand_id', '=', $product->brand_id)->count();
            $checkSortBrands = SortBrandProduct::where('brand_id', '=', $product->brand_id)->where('product_id', '=', $product->id)->first();
            if (empty($checkSortBrands)) {
                $newSort = new SortBrandProduct();
                $newSort->brand_id = $product->brand_id;
                $newSort->product_id = $product->id;
                $newSort->sort_position = $countProdsInBrand;
                $newSort->save();
            }
            if ($deleteMe) {
                Product::where('id', '=', $deleteMe)->delete();
            }
            // Log this Action
            $log = new DatabaseLog();
            $dateTime = Carbon::now();
            $log->date = $dateTime->toDateString();
            $log->time = $dateTime->toTimeString();
            $log->item = $product->name;
            $log->item_url = $product->url;
            $log->action = 'csv импорт товаров';
            $log->user = User::where('id', '=', $request->user)->pluck('name')->first();
            $log->save();
            return response()->json($sku->sku, 200);
        } catch (\Exception $e) {
            return response()->json(null, 400);
        }
    }

    private function csvModificationsConvert($header, $csvLines)
    {
        $name = array_search(mb_strtolower('наименование'), array_map('mb_strtolower', $header));
        $option_type = array_search(mb_strtolower('тип опции'), array_map('mb_strtolower', $header));
        $option_value = array_search(mb_strtolower('значение опции'), array_map('mb_strtolower', $header));
        $option_code = array_search(mb_strtolower('код опции'), array_map('mb_strtolower', $header));
        $csv = array();
        $error = false;
        ;
        foreach ($csvLines as $row => $line) {
            $newLine = array();
            if (is_array($line) && $row != 0) {
                foreach ($line as $key => $lineValue) {
                    if ($key === $name) {
                        $product = Product::where('name', '=', $lineValue)->pluck('id')->first();
                        if ($lineValue != '' && $product) {
                            $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                        } else {
                            $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                            $error = true;
                        }
                    } else {
                        $newLine[] = array('text' => trim($lineValue, ' '), 'error' => false, 'loading' => 'waiting');
                    }
                }
            } elseif ($row == 0) {
                foreach ($line as $key => $lineValue) {
                    if ($name !== false && $option_type !== false && $option_value !== false && $option_code !== false) {
                        $newLine[] = array('text' => $lineValue, 'error' => false, 'loading' => 'waiting');
                    } else {
                        $newLine[] = array('text' => $lineValue, 'error' => true, 'loading' => 'waiting');
                        $error = true;
                    }
                }
            }
            $csv[] = $newLine;
        }
        return array($csv, $error);
    }

    protected function prepareModifications(Request $request)
    {
        $csvFile = $request->file('files');
        $start = 0;
        for ($i = 0; $i < count($csvFile); $i++) {
            $fileHandle = fopen($csvFile[$i], 'r');
            while (!feof($fileHandle)) {
                if ($start == 0) {
                    $csvLines[] = fgetcsv($fileHandle, 100000);
                } else {
                    $csvLines[0] = fgetcsv($fileHandle, 100000);
                    $start = 0;
                }
            }
            $start = 1;
            fclose($fileHandle);
        }
        $header = $csvLines[0];
        $data = $this->csvModificationsConvert($header, $csvLines);
        $csv = $data[0];
        $error = $data[1];
        return response()->json([
            'csv' => $csv,
            'errors' => $error,
        ]);
    }

    protected function checkModifications(Request $request)
    {
        $header = array();
        foreach ($request->modificationsHeader as $line) {
            $header[] = $line[0]['text'];
        }
        $csvLines[] = $header;
        foreach ($request->modifications as $body) {
            $toModification = array();
            foreach ($body as $line) {
                $toModification[] = $line['text'];
            }
            if (!empty($toModification)) {
                $csvLines[] = $toModification;
            }
        }
        $data = $this->csvModificationsConvert($header, $csvLines);
        $csv = $data[0];
        $error = $data[1];
        return response()->json([
            'csv' => $csv,
            'errors' => $error,
        ]);
    }

    protected function uploadModifications(Request $request)
    {
        $header = array();
        foreach ($request->modificationsHeader as $line) {
            $header[] = mb_strtolower($line[0]['text']);
        }
        $body = array();
        foreach ($request->modifications as $line) {
            $body[] = $line['text'];
        }
        $csvLine = array_combine($header, $body);
        foreach ($csvLine as $property => $value) {
            $productId = Product::where('name', '=', $csvLine['наименование'])->pluck('id')->first();
            $group = CalcGroups::where('name', '=', $csvLine['тип опции'])->where('product_id', '=', $productId)->first();
            if (!$group) {
                $group = new CalcGroups();
                $group->product_id = $productId;
                $checkPosition = CalcGroups::where('product_id', '=', $productId)->count();
                $group->sort_position = $checkPosition + 1;
                $group->name = $csvLine['тип опции'];
            }
            $group->save();
            $option = CalcOptions::where('calc_group_id', '=', $group->id)->where('name', '=', $csvLine['значение опции'])->first();
            if (!$option) {
                $option = new CalcOptions();
                $option->calc_group_id = $group->id;
                $option->name = $csvLine['значение опции'];
                $checkPosition = CalcOptions::where('calc_group_id', '=', $group->id)->count();
                $option->sort_position = $checkPosition + 1;
                $option->code = $csvLine['код опции'];
            }
            $option->save();
        }
        return response()->json(null, 200);
    }

    public function csvCategoriesUpload(Request $request)
    {
        csvCategoriesUploads::truncate();
        $uploaded_file = $request->file('csv-categories-file');
        $file = fopen($uploaded_file, "r");
        $header = null;
        $data = array();
        while (($row = fgetcsv($file, 100000, ',')) !== false) {
            if (!$header) {
                $header = $row;
                foreach ($header as $key => $value) {
                    $header[$key] = mb_strtolower($value);
                }
            } else {
                if (count($header) != count($row)) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Ошибка в загружаемом файле! Попробуйте пересохранить файл в кодировке UTF-8.',
                    ]);
                } else {
                    $csv[] = array_combine($header, $row);
                }
            }
        }
        $firstCategory = null;
        $secondCategory = null;
        $current_category_name = null;
        $last_category_name = null;
        $current_category_id = null;
        $category_id = 1;
        foreach ($csv as $csv_product) {
            if (mb_substr($csv_product['наименование'], 0, 2, 'UTF-8') == '!!') {
                $category_level = 3;
                $depth = 3;
                $last_category_name = csvCategoriesUploads::where('id', '=', $secondCategory)->pluck('name')->first();
                $current_category_name = ltrim($csv_product['наименование'], '!');
                $category_id += 1;
            } elseif (mb_substr($csv_product['наименование'], 0, 1, 'UTF-8') == '!') {
                $category_level = 2;
                $depth = 2;
                $last_category_name = csvCategoriesUploads::where('id', '=', $firstCategory)->pluck('name')->first();
                $current_category_name = ltrim($csv_product['наименование'], '!');
                $secondCategory = $category_id;
                $category_id += 1;
            } else {
                $category_level = 1;
                $depth = 1;
                $current_category_name = ltrim($csv_product['наименование'], '!');
                $firstCategory = $category_id;
                $category_id += 1;
            }
            switch ($category_level) {
                case 1:
                    $newLine = new csvCategoriesUploads();
                    foreach ($csv_product as $key => $value) {
                        switch ($key) {
                            case 'id':
                                $newLine->id = $value;
                                break;
                            case 'наименование':
                                $newLine->name = $current_category_name;
                                $newLine->depth = $depth;
                                break;
                            case 'статус':
                                $newLine->active = $value;
                                break;
                            case 'изображение':
                                $newLine->image = $value;
                                break;
                            case 'отображать содержимое в основной категории':
                                $newLine->show_content = $value;
                                break;
                            case 'hide':
                                if (empty($value)) {
                                    $newLine->show_menu = 1;
                                } else {
                                    $newLine->show_menu = 0;
                                }
                                break;
                            case 'url':
                                $newLine->url = $value;
                                break;
                            case 'описание':
                                if (!empty($value)) {
                                    $newLine->body = $value;
                                } else {
                                    $newLine->body = null;
                                }
                                break;
                            case 'meta title':
                                $newLine->meta_title = $value;
                                break;
                            case 'meta description':
                                $newLine->meta_description = $value;
                                break;
                            case 'sort_position':
                                $newLine->sort_position = $value;
                                break;
                            case 'бренд':
                                $newLine->brand_id = Brands::where('name', $value)->first()->id;
                                break;
                            default:
                                break;
                        }
                    }
                    $newLine->save();
                    break;
                case 2:
                    $newLine = new csvCategoriesUploads();
                    foreach ($csv_product as $key => $value) {
                        switch ($key) {
                            case 'id':
                                $newLine->id = $value;
                                break;
                            case 'parent_id':
                                $newLine->parent_id = $value;
                                break;
                            case 'наименование':
                                $newLine->name = $current_category_name;
                                $newLine->parent_name = $last_category_name;
                                $newLine->depth = $depth;
                                break;
                            case 'статус':
                                $newLine->active = $value;
                                break;
                            case 'отображать содержимое в основной категории':
                                $newLine->show_content = $value;
                                break;
                            case 'hide':
                                if (empty($value)) {
                                    $newLine->show_menu = 1;
                                } else {
                                    $newLine->show_menu = 0;
                                }
                                break;
                            case 'url':
                                $newLine->url = $value;
                                break;
                            case 'описание':
                                if (!empty($value)) {
                                    $newLine->body = $value;
                                } else {
                                    $newLine->body = null;
                                }
                                break;
                            case 'meta title':
                                $newLine->meta_title = $value;
                                break;
                            case 'meta description':
                                $newLine->meta_description = $value;
                                break;
                            case 'sort_position':
                                $newLine->sort_position = $value;
                                break;
                            case 'бренд':
                                $newLine->brand_id = Brands::where('name', $value)->first()->id;
                                break;
                            default:
                                break;
                        }
                    }
                    $newLine->save();
                    break;
                case 3:
                    $newLine = new csvCategoriesUploads();
                    foreach ($csv_product as $key => $value) {
                        switch ($key) {
                            case 'id':
                                $newLine->id = $value;
                                break;
                            case 'parent_id':
                                $newLine->parent_id = $value;
                                break;
                            case 'наименование':
                                $newLine->name = $current_category_name;
                                $newLine->parent_name = $last_category_name;
                                $newLine->depth = $depth;
                                break;
                            case 'статус':
                                $newLine->active = $value;
                                break;
                            case 'отображать содержимое в основной категории':
                                $newLine->show_content = $value;
                                break;
                            case 'hide':
                                if (empty($value)) {
                                    $newLine->show_menu = 1;
                                } else {
                                    $newLine->show_menu = 0;
                                }
                                break;
                            case 'url':
                                $newLine->url = $value;
                                break;
                            case 'описание':
                                if (!empty($value)) {
                                    $newLine->body = $value;
                                } else {
                                    $newLine->body = null;
                                }
                                break;
                            case 'meta title':
                                $newLine->meta_title = $value;
                                break;
                            case 'meta description':
                                $newLine->meta_description = $value;
                                break;
                            case 'sort_position':
                                $newLine->sort_position = $value;
                                break;
                            case 'бренд':
                                $newLine->brand_id = Brands::where('name', $value)->first()->id;
                                break;
                            default:
                                break;
                        }
                    }
                    $newLine->save();
                    break;
            }
        }
        $response = csvCategoriesUploads::all();
        return response()->json([
            'success' => true,
            'data' => $response,
        ]);
    }

    public function csvProductsUpload(Request $request)
    {
        csvUploads::truncate();
        $uploaded_files = $request->file('csv-file');
        foreach ($uploaded_files as $uploaded_file) {
            csvUploads::truncate();
            $file = fopen($uploaded_file, "r");
            $header = null;
            $data = array();
            while (($row = fgetcsv($file, 100000, ',')) !== false) {
                if (!$header) {
                    $header = $row;
                    $num = 0;
                    $lastHeader = null;
                    foreach ($header as $key => $value) {
                        $value = trim($value, ' ');
                        if ($lastHeader == $value) {
                            $lastHeader = $value;
                            $header[$key] = mb_strtolower($lastHeader).'_'.$num;
                            $num += 1;
                        } else {
                            $header[$key] = mb_strtolower($value);
                            $lastHeader = $value;
                        }
                    }
                } else {
                    if (count($header) != count($row)) {
                        return response()->json([
                            'success' => false,
                            'message' => 'Ошибка в загружаемом файле! Попробуйте пересохранить файл в кодировке UTF-8.',
                        ]);
                    } else {
                        $csv[] = array_combine($header, $row);
                    }
                }
            }
            $firstCategoty = null;
            $secondCategry = null;
            $current_category_name = null;
            $last_category_name = null;
            $current_category_id = null;
            $depth = 1;
            $productId = 1;
            $lastItem = array();
            foreach ($csv as $csv_product) {
                $category_level = 0;
                $hasPrice = 1;
                if (isset($csv_product['валюта'])) {
                    $hasPrice = $csv_product['валюта'];
                }
                if ($hasPrice == null) {
                    if (mb_substr($csv_product['наименование'], 0, 2, 'UTF-8') == '!!') {
                        $category_level = 3;
                        $depth = 3;
                        $last_category_name = $current_category_name;
                        $current_category_name = ltrim($csv_product['наименование'], '!');
                        $current_category_id = Categories::where('name', '=', $current_category_name)->where('parent_id', '=', $secondCategry)->pluck('id')->first();
                    } elseif (mb_substr($csv_product['наименование'], 0, 1, 'UTF-8') == '!') {
                        $category_level = 2;
                        $depth = 2;
                        $last_category_name = $current_category_name;
                        $current_category_name = ltrim($csv_product['наименование'], '!');
                        $current_category_id = Categories::where('name', '=', $current_category_name)->where('parent_id', '=', $firstCategoty)->pluck('id')->first();
                        $secondCategry = $current_category_id;
                    } else {
                        $category_level = 1;
                        $depth = 1;
                        $current_category_name = ltrim($csv_product['наименование'], '!');
                        $last_category_name = ltrim($csv_product['наименование'], '!');
                        $current_category_id = Categories::where('name', '=', $current_category_name)->where('depth', '=', 1)->pluck('id')->first();
                        $firstCategoty = $current_category_id;
                    }
                }
                switch ($category_level) {
                    case 0:
                        $newLine = new csvUploads();
                        $options = array();
                        foreach ($csv_product as $key => $value) {
                            $newLine->category = $current_category_name;
                            if (!empty($current_category_id)) {
                                $newLine->category_id = $current_category_id;
                            } else {
                                $newLine->category_id = 0;
                            }
                            switch ($key) {
                                case 'наименование':
                                    $newLine->name = $value;
                                    $newLine->child = $productId;
                                    $productId += 1;
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->child = $lastItem->child;
                                            $productId -= 1;
                                        }
                                    }
                                    break;
                                case 'производитель':
                                    $newLine->brand = $value;
                                    $brand = Brands::where('name', '=', $value)->pluck('id')->first();
                                    if (!empty($brand)) {
                                        $newLine->brand_id = $brand;
                                    } else {
                                        $newLine->brand_id = 0;
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->brand = '';
                                            $newLine->brand_id = $lastItem->brand_id;
                                        }
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name != $newLine->name) {
                                            $key = explode('_', $key);
                                            $key = $key[0];
                                            $options[$key][] = $value;
                                        }
                                    } else {
                                        $key = explode('_', $key);
                                        $key = $key[0];
                                        if (!empty($value)) {
                                            $options[$key][] = $value;
                                        } else {
                                            $options[$key][] = null;
                                        }
                                    }
                                    break;
                                case 'url':
                                    if (!empty($value)) {
                                        $newLine->url = $value;
                                    }
                                    break;
                                case 'код артикула':
                                    if (!empty($value)) {
                                        $newLine->sku = $value;
                                    }
                                    break;
                                case 'наименование артикула':
                                    if (!empty($value)) {
                                        $newLine->sku_name = $value;
                                    }
                                    break;
                                case 'код товара':
                                    if (!empty($value)) {
                                        $newLine->sku_code = $value;
                                    }
                                    break;
                                case 'валюта':
                                    if (!empty($value)) {
                                        $newLine->currency = $value;
                                    }
                                    break;
                                case 'цена':
                                    if (!empty($value)) {
                                        $newLine->price = str_replace(',', '.', $value);
                                    } else {
                                        $newLine->price = 0;
                                    }
                                    break;
                                case 'цена, с ндс':
                                    if (!empty($value)) {
                                        $newLine->price = str_replace(',', '.', ($value / 120 * 100));
                                    } else {
                                        $newLine->price = 0;
                                    }
                                    break;
                                case 'старая цена':
                                    if (!empty($value)) {
                                        $newLine->old_price = str_replace(',', '.', $value);
                                    }
                                    break;
                                case 'доступен для заказа':
                                    if (!empty($value)) {
                                        $newLine->can_buy = 1;
                                    } else {
                                        $newLine->can_buy = 0;
                                    }
                                    break;
                                case 'статус':
                                    if (!empty($value)) {
                                        $newLine->status = 1;
                                    } else {
                                        $newLine->status = 0;
                                    }
                                    break;
                                case 'в наличии':
                                    $newLine->in_stock = $value;
                                    if ($value == '') {
                                        $newLine->in_stock = 1;
                                    }
                                    break;
                                case 'срок изготовления':
                                    if (!empty($value)) {
                                        $newLine->production = $value;
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->production = '';
                                        }
                                    }
                                    break;
                                case 'доставка':
                                    if (!empty($value)) {
                                        $newLine->delivery = $value;
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->delivery = '';
                                        }
                                    }
                                    break;
                                case 'наклейка':
                                    $newLine->sticker = $value;
                                    $sticker = Stickers::where('text', '=', $value)->pluck('id')->first();
                                    if (!empty($sticker)) {
                                        $newLine->sticker_id = $sticker;
                                    } else {
                                        $newLine->sticker_id = 0;
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->sticker = $lastItem->sticker;
                                            $newLine->sticker_id = $lastItem->sticker_id;
                                        }
                                    }
                                    break;
                                case 'теги':
                                    if (!empty($value)) {
                                        $newLine->tags = $value;
                                    }
                                    break;
                                case 'краткая информация':
                                    if (!empty($value)) {
                                        $newLine->short_info = $value;
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->short_info = '';
                                        }
                                    }
                                    break;
                                case 'краткое описание':
                                    if (!empty($value)) {
                                        $newLine->short_info = $value;
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->short_info = '';
                                        }
                                    }
                                    break;
                                case 'описание':
                                    if (!empty($value)) {
                                        $newLine->description = $value;
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->description = '';
                                        }
                                    }
                                    break;
                                case 'заголовок':
                                    if (!empty($value)) {
                                        $newLine->meta_title = $value;
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->meta_title = '';
                                        }
                                    }
                                    break;
                                case 'meta description':
                                    if (!empty($value)) {
                                        $newLine->meta_description = $value;
                                    }
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name == $newLine->name) {
                                            $newLine->meta_description = '';
                                        }
                                    }
                                    break;
                                case 'отображать содержимое в основной категории':
                                    break;
                                case 'основной артикул':
                                    break;
                                case 'hide':
                                    break;
                                case 'sort_position':
                                    break;
                                default:
                                    if (!empty($lastItem)) {
                                        if ($lastItem->name != $newLine->name) {
                                            $key = explode('_', $key);
                                            $key = $key[0];
                                            $options[$key][] = $value;
                                        }
                                    } else {
                                        $key = explode('_', $key);
                                        $key = $key[0];
                                        if (!empty($value)) {
                                            $options[$key][] = $value;
                                        } else {
                                            $options[$key][] = null;
                                        }
                                    }
                                    break;
                            }
                        }
                        $newLine->options = json_encode($options);
                        $newLine->save();
                        $lastItem = $newLine;
                        break;
                }
            }
        }
        $response = csvUploads::all();
        return response()->json([
            'success' => true,
            'data' => $response,
        ]);
    }

    public function uploadCategoryX()
    {
        $csvCategory = csvCategoriesUploads::first();
        if (empty($csvCategory)) {
            return response()->json([
                'continue' => false,
            ]);
        }
        switch ($csvCategory->depth) {
            case 1:
                $checkExists = Categories::where('id', '=', $csvCategory->id)->first();
                if (empty($checkExists)) {
                    $category = new Categories();
                    $category->id = $csvCategory->id;
                    $category->depth = 1;
                    $category->name = $csvCategory->name;
                    $category->image = $csvCategory->image;
                    $category->active = $csvCategory->active;
                    $category->show_content = $csvCategory->show_content;
                    $category->show_menu = $csvCategory->show_menu;
                    $category->url = $csvCategory->url;
                    $category->body = $csvCategory->body;
                    $category->metaTitle = $csvCategory->meta_title;
                    $category->metaDescription = $csvCategory->meta_description;
                    $category->sort_position = 1;
                    $category->save();
                } else {
                    $checkExists->depth = 1;
                    $checkExists->name = $csvCategory->name;
                    $checkExists->image = $csvCategory->image;
                    $checkExists->active = $csvCategory->active;
                    $checkExists->show_content = $csvCategory->show_content;
                    $checkExists->show_menu = $csvCategory->show_menu;
                    $checkExists->url = $csvCategory->url;
                    $checkExists->body = $csvCategory->body;
                    $checkExists->metaTitle = $csvCategory->meta_title;
                    $checkExists->metaDescription = $csvCategory->meta_description;
                    $checkExists->save();
                }
                break;
            case 2:
                $checkExists = Categories::where('id', '=', $csvCategory->id)->first();
                if (empty($checkExists)) {
                    $category = new Categories();
                    $category->id = $csvCategory->id;
                    $category->parent_id = $csvCategory->parent_id;
                    $category->depth = 2;
                    $category->name = $csvCategory->name;
                    $category->active = $csvCategory->active;
                    $category->show_content = $csvCategory->show_content;
                    $category->show_menu = $csvCategory->show_menu;
                    $category->url = $csvCategory->url;
                    $category->body = $csvCategory->body;
                    $category->metaTitle = $csvCategory->meta_title;
                    $category->metaDescription = $csvCategory->meta_description;
                    $category->sort_position = 1;
                    $category->save();
                } else {
                    $checkExists->depth = 2;
                    $checkExists->parent_id = $csvCategory->parent_id;
                    $checkExists->name = $csvCategory->name;
                    $checkExists->active = $csvCategory->active;
                    $checkExists->show_content = $csvCategory->show_content;
                    $checkExists->show_menu = $csvCategory->show_menu;
                    $checkExists->url = $csvCategory->url;
                    $checkExists->body = $csvCategory->body;
                    $checkExists->metaTitle = $csvCategory->meta_title;
                    $checkExists->metaDescription = $csvCategory->meta_description;
                    $checkExists->save();
                }
                break;
            case 3:
                $checkExists = Categories::where('id', '=', $csvCategory->id)->first();
                if (empty($checkExists)) {
                    $category = new Categories();
                    $category->id = $csvCategory->id;
                    $category->parent_id = $csvCategory->parent_id;
                    $category->depth = 3;
                    $category->name = $csvCategory->name;
                    $category->active = $csvCategory->active;
                    $category->show_content = $csvCategory->show_content;
                    $category->show_menu = $csvCategory->show_menu;
                    $category->url = $csvCategory->url;
                    $category->body = $csvCategory->body;
                    $category->metaTitle = $csvCategory->meta_title;
                    $category->metaDescription = $csvCategory->meta_description;
                    $category->sort_position = 1;
                    $category->save();
                } else {
                    $checkExists->depth = 3;
                    $checkExists->parent_id = $csvCategory->parent_id;
                    $checkExists->name = $csvCategory->name;
                    $checkExists->active = $csvCategory->active;
                    $checkExists->show_content = $csvCategory->show_content;
                    $checkExists->show_menu = $csvCategory->show_menu;
                    $checkExists->url = $csvCategory->url;
                    $checkExists->body = $csvCategory->body;
                    $checkExists->metaTitle = $csvCategory->meta_title;
                    $checkExists->metaDescription = $csvCategory->meta_description;
                    $checkExists->save();
                }
                break;
        }
        $log = new DatabaseLog();
        $dateTime = Carbon::now();
        $log->date = $dateTime->toDateString();
        $log->time = $dateTime->toTimeString();
        $log->item = $csvCategory->name;
        $log->item_url = $csvCategory->url;
        $log->action = 'csv импорт категорий';
        $log->user = \Auth::user()->name;
        $log->save();
        $csvCategory->delete();
        return response()->json([
            'continue' => true,
        ]);
    }

    public function uploadDeliveryDB(Request $request)
    {
        $uploaded_file = $request->file('file-upload');
        $file = fopen($uploaded_file, "r");
        $header = null;
        $data = array();
        while (($row = fgetcsv($file, 1000, ',')) !== false) {
            if (!$header) {
                $header = $row;
                for ($i = 0; $i < count($header); $i++) {
                    $header[$i] = $header[$i].'_'.$i;
                }
            } else {
                $csv[] = array_combine($header, $row);
            }
        }
        foreach ($csv as $csv_product) {
            $delivery = new Delivery();
            $ifCityExists = Delivery::where('city', '=', $csv_product['Город_2'])->first();
            foreach ($csv_product as $key => $value) {
                if ($ifCityExists) {
                    if (strpos(mb_strtolower($key), 'страна') !== false) {
                        $ifCityExists->country = $value;
                    }
                    if (strpos(mb_strtolower($key), 'регион') !== false) {
                        $ifCityExists->region = $value;
                    }
                    if (strpos(mb_strtolower($key), 'город') !== false) {
                        $ifCityExists->city = $value;
                    }
                    if (strpos(mb_strtolower($key), 'отображать в подвале') !== false) {
                        $ifCityExists->active = $value;
                    }
                    if (strpos(mb_strtolower($key), 'url') !== false) {
                        $ifCityExists->url = $value;
                    }
                    if (strpos(mb_strtolower($key), 'title') !== false) {
                        $ifCityExists->metaTitle = $value;
                    }
                    if (strpos(mb_strtolower($key), 'description') !== false) {
                        $ifCityExists->metaDescription = $value;
                    }
                    if (strpos(mb_strtolower($key), 'h2') !== false) {
                        $ifCityExists->address_header = $value;
                    }
                    if (strpos(mb_strtolower($key), 'деловые линии') !== false) {
                        $ifCityExists->address_dl = $value;
                    }
                    if (strpos(mb_strtolower($key), 'dpd') !== false) {
                        $ifCityExists->address_dpd = $value;
                    }
                } else {
                    if (strpos(mb_strtolower($key), 'страна') !== false) {
                        $delivery->country = $value;
                    }
                    if (strpos(mb_strtolower($key), 'регион') !== false) {
                        $delivery->region = $value;
                    }
                    if (strpos(mb_strtolower($key), 'город') !== false) {
                        $delivery->city = $value;
                    }
                    if (strpos(mb_strtolower($key), 'отображать в подвале') !== false) {
                        $delivery->active = $value;
                    }
                    if (strpos(mb_strtolower($key), 'url') !== false) {
                        $delivery->url = $value;
                    }
                    if (strpos(mb_strtolower($key), 'title') !== false) {
                        $delivery->metaTitle = $value;
                    }
                    if (strpos(mb_strtolower($key), 'description') !== false) {
                        $delivery->metaDescription = $value;
                    }
                    if (strpos(mb_strtolower($key), 'h2') !== false) {
                        $delivery->address_header = $value;
                    }
                    if (strpos(mb_strtolower($key), 'деловые линии') !== false) {
                        $delivery->address_dl = $value;
                    }
                    if (strpos(mb_strtolower($key), 'dpd') !== false) {
                        $delivery->address_dpd = $value;
                    }
                }
            }
            if ($ifCityExists) {
                $ifCityExists->save();
            } else {
                $delivery->save();
            }
        }
        return redirect()->back()->with('success', 'Города успешно обновлены.');
    }

    public function uploadCalculator(Request $request)
    {
        try {
            UploadCalculatorLogs::truncate();
            $uploaded_file = $request->file('file-upload-calculator');
            $file = fopen($uploaded_file, "r");
            $header = null;
            $data = array();
            while (($row = fgetcsv($file, 1000, ',')) !== false) {
                if (!$header) {
                    $header = $row;
                    for ($i = 0; $i < count($header); $i++) {
                        $header[$i] = $header[$i].'_'.$i;
                    }
                } else {
                    if (count($header) != count($row)) {
                        return response()->json([
                            'success' => false,
                            'message' => 'Ошибка в загружаемом файле! Попробуйте пересохранить файл в кодировке UTF-8.',
                        ]);
                    } else {
                        $csv[] = array_combine($header, $row);
                    }
                }
            }
            foreach ($csv as $csv_product) {
                $product = Product::where('name', '=', $csv_product['Наименование_0'])->first();
                if (empty($product)) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Вы пытаетесь привязать опции к несуществующему товару. Создайте товар с наименованием "'.$csv_product['Наименование_0'].'", чтобы продолжить',
                    ]);
                }
                $group = new CalcGroups();
                $group->product_id = $product->id;
                $option = new CalcOptions();
                $existsOption = 0;
                foreach ($csv_product as $key => $value) {
                    if (strpos(mb_strtolower($key), 'тип опции') !== false) {
                        $ifExistsGroup = CalcGroups::where('name', '=', $value)->where('product_id', '=', $product->id)->first();
                        $group->name = $value;
                        $existsOption = 0;
                        if (empty($ifExistsGroup)) {
                            $checkPosition = CalcGroups::where('product_id', '=', $product->id)->get();
                            $checkPosition = count($checkPosition);
                            $group->sort_position = $checkPosition + 1;
                            $newLog = new UploadCalculatorLogs();
                            $newLog->type = 1;
                            $newLog->connect_id = $group->product_id;
                            $newLog->updated = 0;
                            $newLog->save();
                            $group->save();
                        } else {
                            $newLog = new UploadCalculatorLogs();
                            $newLog->type = 1;
                            $newLog->connect_id = $group->product_id;
                            $newLog->updated = 1;
                            $newLog->save();
                        }
                    }
                    if (strpos(mb_strtolower($key), 'опция') !== false) {
                        $getGroup = CalcGroups::where('name', '=', $group->name)->where('product_id', '=', $product->id)->first();
                        $ifExistsOption = CalcOptions::where('calc_group_id', '=', $getGroup->id)->where('name', '=', $value)->first();
                        if (empty($ifExistsOption)) {
                            $option->calc_group_id = $getGroup->id;
                            $option->name = $value;
                            $checkPosition = CalcOptions::where('calc_group_id', '=', $getGroup->id)->get();
                            $checkPosition = count($checkPosition);
                            $option->sort_position = $checkPosition + 1;
                        } else {
                            $existsOption = $ifExistsOption;
                        }
                    }
                    if (strpos(mb_strtolower($key), 'код опции') !== false) {
                        if ($existsOption != null) {
                            $existsOption->code = $value;
                        } else {
                            $option->code = $value;
                        }
                    }
                    if (strpos(mb_strtolower($key), 'цена') !== false) {
                        if (!empty($value)) {
                            if ($value != 'по запросу') {
                                if ($existsOption != null) {
                                    $existsOption->price = $value;
                                } else {
                                    $option->price = $value;
                                }
                            } else {
                                if ($existsOption != null) {
                                    $existsOption->price = 0;
                                } else {
                                    $option->price = 0;
                                }
                            }
                        } else {
                            if ($existsOption != null) {
                                $existsOption->price = 0;
                            } else {
                                $option->price = 0;
                            }
                        }
                    }
                }
                if ($existsOption != null) {
                    $newLog = new UploadCalculatorLogs();
                    $newLog->type = 2;
                    $newLog->connect_id = $existsOption->id;
                    $newLog->updated = 1;
                    $newLog->save();
                    $existsOption->save();
                } else {
                    $newLog = new UploadCalculatorLogs();
                    $newLog->type = 2;
                    $newLog->connect_id = $option->calc_group_id;
                    $newLog->updated = 0;
                    $newLog->save();
                    $option->save();
                }
            }
        } catch (\Exception $e) {
            Product::truncate();
            return response()->json([
                'success' => false,
                'message' => 'Не установлен ElasticSearch. Загрузка невозможна.',
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Опции для товаров загружены.',
        ]);
    }

    public function checkUploadedCalculator()
    {
        $logs = UploadCalculatorLogs::all();
        $data = array();
        $thisGroup = '';
        foreach ($logs as $log) {
            switch ($log->type) {
                case 1:
                    $getGroup = CalcGroups::where('id', '=', $log->connect_id)->first();
                    $getProduct = Product::where('id', '=', $getGroup->product_id)->first();
                    $thisGroup = $getGroup->name;
                    $name = '-';
                    $code = '-';
                    $price = '-';
                    $data[] = array('updated' => $log->updated, 'product' => $getProduct->name, 'group' => $thisGroup, 'option' => $name, 'option_code' => $code, 'option_price' => $price);
                    break;
                case 2:
                    $getOption = CalcOptions::where('id', '=', $log->connect_id)->first();
                    $getGroup = CalcGroups::where('id', '=', $getOption->calc_group_id)->first();
                    $getProduct = Product::where('id', '=', $getGroup->product_id)->first();
                    if (empty($getOption->name)) {
                        $getOption->name = '-';
                    }
                    if (empty($getOption->code)) {
                        $getOption->code = '-';
                    }
                    if (empty($getOption->price)) {
                        $getOption->price = '-';
                    } else {
                        $getOption->price = number_format($getOption->price, 2, ',', ' ').' руб';
                    }
                    $data[] = array('updated' => $log->updated, 'product' => $getProduct->name, 'group' => $thisGroup, 'option' => $getOption->name, 'option_code' => $getOption->code, 'option_price' => $getOption->price);
                    break;
            }
        }
        return response()->json([
            'success' => true,
            'logs' => $data,
        ]);
    }
}
