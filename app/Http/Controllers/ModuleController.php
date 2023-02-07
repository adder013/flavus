<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\View;
use App\MenuOptions;
use App\Contacts;
use App\Partners;
use App\Locker;
use App\Brands;
use App\LockersOrders;
use App\LockersTable;
use App\LockersSliders;
use App\Stickers;
use App\StickersConnection;
use App\Specials;
use App\SpecialsGroupConnections;
use App\SpecialsProductConnections;
use App\Product;
use App\GroupNames;
use App\Delivery;
use App\News;
use App\HomeBrands;
use App\Redirects;
use App\CustomFields;
use App\HomePageSliders;
use App\LockersBrandImages;
use App\BrandTag;
use App\BrandIndustry;
use App\Customer;
use App\FAQCategory;
use App\FAQ;
use App\Http\Requests\GetProductDescriptionRequest;
use App\Http\Requests\SaveProductDescriptionRequest;
use DB;
use Illuminate\Pagination\Paginator;

class ModuleController extends DashboardController
{
    public function __construct()
    {
        $this->middleware('auth');
        chdir('..');
        $currentDirectory = getcwd();
        View::share([
            'currentDirectory' => $currentDirectory,
        ]);
    }

    public function showAll()
    {
        return view('dashboard.modules');
    }

    public function showMenu()
    {
        return view('dashboard.moduleMenu');
    }

    public function homeBrands()
    {
        return view('dashboard.moduleHomeBrands');
    }

    public function showSeo()
    {
        return view('dashboard.moduleSEO');
    }

    public function showRedirect()
    {
        return view('dashboard.moduleRedirect');
    }

    public function showMetrics()
    {
        return view('dashboard.moduleMetrics');
    }

    public function showSlider()
    {
        $sliders = HomePageSliders::all();
        return view('dashboard.moduleSlider', compact(['sliders']));
    }

    public function getHomePageSliders()
    {
        $sliders = HomePageSliders::orderBy('sort_position')->get();
        return json_encode($sliders);
    }

    public function addHomePageSlider(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Недопустимый формат изображения. Используйте png|jpg|bmp',
            ]);
        }
        if ($request->alt) {
            $slider = new HomePageSliders();
            $slider->alt = $request->alt;
            $slider->url = $request->url;
            if (empty($request->newImage)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Изображение не выбрано, попробуйте снова',
                ]);
            }
            $request->newImage->store('sliders/', 'public');
            $slider->image = '/storage/sliders/'.$request->newImage->hashName();
            $slider->save();
        }
        return response()->json([
            'success' => true,
            'message' => 'Слайдер добавлен',
        ]);
    }

    public function updateHomePageSlider(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);
        if ($validator->fails() && !empty($request->newImage)) {
            return response()->json([
                'success' => false,
                'message' => 'Недопустимый формат изображения. Используйте png|jpg|bmp',
            ]);
        }
        $slider = HomePageSliders::where('id', '=', $request->id)->first();
        if ($request->alt) {
            $slider->alt = $request->alt;
        }
        if ($request->url) {
            $slider->url = $request->url;
        }
        if ($request->newImage) {
            $request->newImage->store('sliders/', 'public');
            $deletePrevious = $slider->image;
            if (!empty($deletePrevious)) {
                File::delete(public_path().$deletePrevious);
            }
            $slider->image = '/storage/sliders/'.$request->newImage->hashName();
        }
        $slider->save();
        return response()->json([
            'success' => true,
            'message' => 'Слайдер обновлен',
        ]);
    }

    public function deleteHomePageSlider(Request $request)
    {
        $image = HomePageSliders::where('id', '=', $request->id)->pluck('image')->first();
        File::delete(public_path().$image);
        HomePageSliders::where('id', '=', $request->id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Слайдер удален',
        ]);
    }

    public function changeSortHomePageSliders(Request $request)
    {
        $sliders = $request->sliders;
        foreach ($sliders as $key => $slider) {
            $sliderUpdate = HomePageSliders::where('id', '=', $slider['id'])->first();
            $sliderUpdate->sort_position = $key + 1;
            $sliderUpdate->save();
        }
    }

    public function getMetrics()
    {
        $metrics = CustomFields::where('name', '=', 'metrics')->pluck('content')->first();
        return json_encode($metrics);
    }

    public function updateMetrics(Request $request)
    {
        $metrics = CustomFields::where('name', '=', 'metrics')->first();
        $metrics->content = $request->metrics;
        $metrics->save();
        return response()->json([
            'success' => true,
            'message' => 'Успешно обновлено',
        ]);
    }

    public function getPagesSEO()
    {
        $allSeo = metaStaticPage::all();
        return json_encode($allSeo);
    }

    public function getRedirectsData()
    {
        $data['total'] = Redirects::all()->count();
        $data['currentPage'] = 1;
        if (\Session::get('perPage') != null) {
            $data['perPage'] = \Session::get('perPage');
        } else {
            $data['perPage'] = 10;
        }
        return json_encode($data);
    }

    public function getRedirects(Request $request)
    {
        $currentPage = $request->input('currentPage');
        $perPage = $request->input('perPage');
        if (intval($perPage) > 20000) {
            $redirects = Redirects::orderBy('id', 'desc')->get();
        } else {
            Paginator::currentPageResolver(function () use ($currentPage) {
                return $currentPage;
            });
            $redirects = Redirects::orderBy('id', 'desc')->paginate($perPage);
        }
        \Session::put('perPage', $perPage);
        return json_encode($redirects);
    }

    public function searchRedirects(Request $request)
    {
        $query = $request->input('query');
        $currentPage = $request->input('currentPage');
        $data['info']['perPage'] = $request->input('perPage');
        $total = DB::table('redirects')->where(DB::raw('CONCAT(`from`, " ", `to`)'), 'LIKE', '%'.$query.'%')->count();
        $data['info']['total'] = $total;
        if (($currentPage*$data['info']['perPage'] - $data['info']['perPage']) > $total) {
            $currentPage = 1;
        }
        $totalPages = ceil($total/$data['info']['perPage']);
        if ($currentPage > $totalPages) {
            if ($currentPage > 1) {
                $currentPage -= 1;
            }
        }
        $data['info']['currentPage'] = $currentPage;
        Paginator::currentPageResolver(function () use ($currentPage) {
            return $currentPage;
        });
        $data['items'] = DB::table('redirects')->orderBy('id', 'desc')->where(DB::raw('CONCAT(`from`, " ", `to`)'), 'LIKE', '%'.$query.'%')->paginate($data['info']['perPage']);
        if (empty($data['items'])) {
            $data['items'] = DB::table('redirects')->orderBy('id', 'desc')->where(DB::raw('CONCAT(`from`, " ", `to`)'), 'LIKE', '%'.$query.'%')->paginate(intval($data['info']['perPage'] - 1));
            $data['info']['currentPage'] -= 1;
        }
        return json_encode($data);
    }

    public function showRobots()
    {
        return view('dashboard.moduleRobots');
    }

    public function getRobots()
    {
        $robots = file(public_path().'/robots.txt');
        $robotsString = '';
        foreach ($robots as $value) {
            $robotsString .= $value;
        }
        return response()->json($robotsString);
    }

    public function updateRobots(Request $request)
    {
        try {
            $robots = fopen(public_path().'/robots.txt', 'w+');
            fwrite($robots, $request->robots);
            fclose($robots);
            return response()->json([
                'success' => true,
                'message' => 'Успешно обновлено',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка при записи файла',
            ]);
        }
    }

    public function updateRedirects(Request $request)
    {
        $redirect = Redirects::where('id', '=', $request->id)->first();
        $redirect->status_code = $request->code;
        $redirect->from = $request->from;
        $redirect->to = $request->to;
        $redirect->save();
        return response()->json([
            'success' => true
        ]);
    }

    public function deleteRedirect(Request $request)
    {
        Redirects::where('id', '=', $request->id)->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function deleteRedirects(Request $request)
    {
        Redirects::whereIn('id', $request->id)->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function addRedirect(Request $request)
    {
        $sameRedirect = Redirects::where('from', '=', $request->from)->first();
        if (empty($sameRedirect)) {
            $from = ltrim($request->from, '/');
            $from = '/'.$from;
            $to = ltrim($request->to, '/');
            if (strpos($to, url('/')) !== false) {
                $to = ltrim($request->to, 'http://');
                $to = ltrim($request->to, 'https://');
                $to = substr($to, strpos($to, '/') + 1);
            }
            $to = '/'.$to;
            $redirect = new Redirects();
            if (!$request->code) {
                return response()->json([
                    'success' => false,
                    'message' => 'Укажите код ответа для редиректа'
                ]);
            }
            $redirect->status_code = $request->code;
            $redirect->from = $from;
            $redirect->to = $to;
            $redirect->save();
            return response()->json([
                'success' => true,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Этот путь уже редиректится в другое место'
            ]);
        }
    }

    public function getHomePageBrands()
    {
        $homeBrands = HomeBrands::all();
        $data = new \stdClass();
        $blocksAmount = 18;
        $data->brands = Brands::all();
        for ($i = 1; $i < $blocksAmount; $i++) {
            $data->info['b'.$i] = HomeBrands::where('block_id', '=', $i)->first();
            if (empty($data->info['b'.$i])) {
                $data->info['b'.$i] = 'Не выбрано';
            } else {
                $thisBrand = Brands::where('id', '=', $data->info['b'.$i]->brand_id)->first();
                $data->info['b'.$i] = $thisBrand->name;
            }
        }
        return json_encode($data);
    }
    public function changeHomeBrands(Request $request)
    {
        $blocksAmount = 18;
        for ($i = 1; $i < $blocksAmount; $i++) {
            $check = HomeBrands::where('block_id', '=', $i)->first();
            if (empty($check)) {
                $initialSetup = new HomeBrands();
                $initialSetup->block_id = $i;
                $getBrand = Brands::where('name', '=', $request->brands['b'.$i])->first();
                if (!empty($getBrand)) {
                    $initialSetup->brand_id = $getBrand->id;
                    $initialSetup->save();
                }
            } else {
                $getBrand = Brands::where('name', '=', $request->brands['b'.$i])->first();
                if (!empty($getBrand)) {
                    $check->brand_id = $getBrand->id;
                    $check->save();
                }
            }
        }
    }

    public function addMenu(Request $request)
    {
        $newMenu = new MenuOptions();
        $newMenu->name = $request->name;
        $newMenu->url = $request->url;
        $checkPosition = MenuOptions::where('depth', '=', 1)->get();
        $checkPosition = count($checkPosition);
        $newMenu->sort_position = $checkPosition + 1;
        $newMenu->depth = 1;
        $newMenu->save();
    }

    public function addSubMenu(Request $request)
    {
        $newMenu = new MenuOptions();
        $newMenu->name = $request->name;
        $newMenu->url = $request->url;
        $checkPosition = MenuOptions::where('parent_id', '=', $request->parent_id)->get();
        $checkPosition = count($checkPosition);
        $newMenu->parent_id = $request->parent_id;
        $newMenu->sort_position = $checkPosition + 1;
        $newMenu->depth = 2;
        $newMenu->save();
    }

    public function getMenuLinks()
    {
        $data = array();
        $menu_links = MenuOptions::orderBy('sort_position')->where('depth', '=', 1)->get();
        foreach ($menu_links as $key => $value) {
            $menu_links[$key]->newName = '';
            $menu_links[$key]->newUrl = '';
        }
        $data['menu_links'] = $menu_links;
        $data['sub_menu_links'] = MenuOptions::orderBy('sort_position')->where('depth', '=', 2)->get();
        return json_encode($data);
    }

    public function deleteMenu(Request $request)
    {
        MenuOptions::where('id', '=', $request->id)->delete();
    }

    public function deleteSubMenu(Request $request)
    {
        $menuOptions = MenuOptions::where('id', '=', $request->id)->get();
        foreach ($menuOptions as $menu) {
            MenuOptions::where('parent_id', '=', $menu->id)->delete();
        }
        MenuOptions::where('id', '=', $request->id)->delete();
    }

    public function changeSortMenu(Request $request)
    {
        $thisMenu = $request->menu_links;
        $thisSubMenu = $request->sub_menu_links;
        foreach ($thisMenu as $key => $menu) {
            $searchMenu = MenuOptions::where('id', '=', $menu['id'])->first();
            $searchMenu->sort_position = $key + 1;
            $searchMenu->save();
        }
        foreach ($thisSubMenu as $key => $subMenu) {
            $searchMenu = MenuOptions::where('id', '=', $subMenu['id'])->first();
            $searchMenu->sort_position = $key + 1;
            $searchMenu->save();
        }
    }

    public function showContacts()
    {
        $contacts = Contacts::first();
        return view('dashboard.moduleContacts', compact(['contacts']));
    }

    public function showPartners()
    {
        $partners = Partners::all();
        return view('dashboard.modulePartners', compact(['partners']));
    }

    public function deletePartner(Request $request)
    {
        Partners::where('id', '=', $request->id)->delete();
        return redirect()->back()->with('success', 'Партнер успешно удален');
    }

    public function addPartner(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
            'newCertificate' => 'mimes:jpg,jpeg,bmp,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Недопустимый формат изображения. Используйте png|jpg|bmp');
        } else {
            if ($request->name) {
                $partner = new Partners();
                if ($request->newImage) {
                    $request->newImage->store('files/partners/previews/', 'public');
                    $partner->image = '/storage/files/partners/previews/'.$request->newImage->hashName();
                }
                if ($request->newCertificate) {
                    $request->newCertificate->store('files/partners/certificates/', 'public');
                    $partner->certificate = '/storage/files/partners/certificates/'.$request->newCertificate->hashName();
                }
            }
        }
        if ($request->name) {
            $partner->name = $request->name;
            $partner->body = $request->desc;
            $partner->save();
        }
        return redirect()->back()->with('success', 'Партнер успешно добавлен');
    }

    public function updatePartner(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
            'newCertificate' => 'mimes:jpg,jpeg,bmp,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Недопустимый формат изображения. Используйте png|jpg|bmp');
        } else {
            $partner = Partners::where('id', '=', $request->id)->firstOrFail();
            if ($request->newImage) {
                $request->newImage->store('files/partners/previews/', 'public');
                $deletePrevious = $partner->image;
                if (!empty($deletePrevious)) {
                    File::delete(public_path().$deletePrevious);
                }
                $partner->image = '/storage/files/partners/previews/'.$request->newImage->hashName();
            }
            if ($request->newCertificate) {
                $request->newCertificate->store('files/partners/certificates/', 'public');
                $deletePrevious_2 = $partner->certificate;
                if (!empty($deletePrevious_2)) {
                    File::delete(public_path().$deletePrevious_2);
                }
                $partner->certificate = '/storage/files/partners/certificates/'.$request->newCertificate->hashName();
            }
        }
        if ($request->name) {
            $partner->name = $request->name;
        }
        $partner->body = $request->desc;
        $partner->save();
        return redirect()->back()->with('success', 'Информация о партнере успешно обновлена');
    }

    public function editContacts(Request $request)
    {
        $contacts = Contacts::first();
        if (empty($contacts)) {
            $contacts = new Contacts();
        }
        $contacts->name = $request->name;
        $contacts->legal_address = $request->legal_address;
        $contacts->post_address = $request->post_address;
        $contacts->main_address = $request->main_address;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->bank_info = $request->bank_info;
        $contacts->work_hours = $request->work_hours;
        $contacts->phone_msk = $request->phone_msk;
        $contacts->storage_address = $request->storage_address;
        $contacts->storage_phone = $request->storage_phone;
        $contacts->save();
        return redirect()->back()->with('success', 'Контакты успешно обновлены.');
    }

    public function addLocker(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Недопустимый формат изображения. Используйте png|jpg|bmp');
        }
        if ($request->name) {
            $locker = new Lockers();
            $locker->name = $request->name;
            $locker->url = $request->url;
            if (empty($request->newImage)) {
                return redirect()->back()->with('error', 'Изображение не выбрано, попробуйте снова');
            }
            $locker->image = '';
            $locker->active = 0;
            $sort = 1;
            $checkPosition = Locker::orderBy('id', 'desc')->limit(1)->first();
            if (!empty($checkPosition->id)) {
                $sort = $checkPosition->sort_position + 1;
            }
            $locker->sort_position = $sort;
            $locker->save();
            $addImg = Locker::where('url', '=', $request->url)->firstOrfail();
            $request->newImage->store('lockers/'.$addImg->id.'/', 'public');
            $addImg->image = '/storage/lockers/'.$addImg->id.'/'.$request->newImage->hashName();
            $addImg->save();
        }
        return redirect()->back()->with('success', 'Шкаф индивидуальной сборки успешно добавлен');
    }

    public function getLockersOptions($id)
    {
        $data = array();
        $data['orders'] = LockersOrders::orderBy('sort_position')->where('locker_id', '=', $id)->get();
        $data['table'] = LockersTable::orderBy('sort_position')->where('locker_id', '=', $id)->get();
        return json_encode($data);
    }


    public function enableLocker(Request $request)
    {
        $locker = Locker::where('id', '=', $request->id)->first();
        $locker->active = $request->checked;
        $locker->save();
    }

    public function updateLocker(Request $request)
    {
        $locker = Locker::where('id', '=', $request->id)->firstOrFail();
        if ($request->name) {
            $locker->name = $request->name;
        }
        if ($request->url) {
            $checkForSameUrl = Locker::where('url', '=', $request->url)->first();
            if (empty($checkForSameUrl) || $locker->url == $request->url) {
                $locker->url = $request->url;
            } else {
                return redirect()->back()->with('error', 'Данный URL уже используется!');
            }
        }
        if ($request->metaTitle) {
            $locker->metaTitle = $request->metaTitle;
        }
        if ($request->metaDescription) {
            $locker->metaDescription = $request->metaDescription;
        }
        $locker->save();
        return redirect('/dashboard/modules/lockers/'.$request->url)->with('success', 'Обновлено');
    }

    public function updateSlider(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Недопустимый формат изображения. Используйте png|jpg|bmp');
        }
        $slider = LockersSliders::where('id', '=', $request->id)->firstOrFail();
        if ($request->name) {
            $slider->name = $request->name;
        }
        if ($request->customer) {
            $slider->customer = $request->customer;
        }
        if ($request->description) {
            $slider->description = $request->description;
        }
        if ($request->newImage) {
            $request->newImage->store('lockers/'.$slider->locker_id.'/slider/', 'public');
            $deletePrevious = $slider->image;
            if (!empty($deletePrevious)) {
                File::delete(public_path().$deletePrevious);
            }
            $slider->image = '/storage/lockers/'.$slider->locker_id.'/slider/'.$request->newImage->hashName();
        }
        $slider->save();
        return redirect()->back()->with('success', 'Слайд обновлен');
    }

    public function addLockerOrder(Request $request)
    {
        $newLockerOrder = new LockersOrders();
        $newLockerOrder->order_option = $request->name;
        $newLockerOrder->locker_id = $request->locker_id;
        $checkPosition = LockersOrders::where('locker_id', '=', $request->locker_id)->get();
        $checkPosition = count($checkPosition);
        $newLockerOrder->sort_position = $checkPosition + 1;
        $newLockerOrder->save();
    }

    public function addLockerTable(Request $request)
    {
        $newLockerTable = new LockersTable();
        $newLockerTable->year = $request->year;
        $newLockerTable->customer = $request->customer;
        $newLockerTable->object = $request->object;
        $newLockerTable->item = $request->item;
        $newLockerTable->locker_id = $request->locker_id;
        $checkPosition = LockersTable::where('locker_id', '=', $request->locker_id)->get();
        $checkPosition = count($checkPosition);
        $newLockerTable->sort_position = $checkPosition + 1;
        $newLockerTable->save();
    }

    public function changeSortLockersOptions(Request $request)
    {
        $orders = $request->locker_orders;
        $table = $request->locker_table;
        if ($orders) {
            foreach ($orders as $key => $value) {
                $search = LockersOrders::where('id', '=', $value['id'])->first();
                $search->sort_position = $key + 1;
                $search->save();
            }
        }
        if ($table) {
            foreach ($table as $key => $value) {
                $search = LockersTable::where('id', '=', $value['id'])->first();
                $search->sort_position = $key + 1;
                $search->save();
            }
        }
    }

    public function deleteLockerOrder(Request $request)
    {
        LockersOrders::where('id', '=', $request->id)->delete();
    }

    public function deleteLockerTable(Request $request)
    {
        $locker = Locker::where('id', '=', $request->id)->first();
        $hasImage = $locker->image;
        if (!empty($hasImage)) {
            File::delete(public_path().$hasImage);
        }
        LockersTable::where('id', '=', $request->id)->delete();
    }

    public function addLockerSlider(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Недопустимый формат изображения. Используйте png|jpg|bmp');
        }
        if ($request->name) {
            $locker = new LockersSliders();
            $locker->locker_id = $request->id;
            $locker->name = $request->name;
            $locker->customer = $request->customer;
            $locker->description = $request->description;
            if (empty($request->newImage)) {
                return redirect()->back()->with('error', 'Изображение не выбрано, попробуйте снова');
            }
            $locker->image = '';
            $sort = 1;
            $checkPosition = LockersSliders::orderBy('id', 'desc')->limit(1)->first();
            if (!empty($checkPosition->id)) {
                $sort = $checkPosition->sort_position + 1;
            }
            $locker->sort_position = $sort;
            $locker->save();
            $addImg = LockersSliders::where('name', '=', $request->name)->firstOrfail();
            $request->newImage->store('lockers/'.$request->id.'/slider/', 'public');
            $addImg->image = '/storage/lockers/'.$request->id.'/slider/'.$request->newImage->hashName();
            $addImg->save();
        }
        return redirect()->back()->with('success', 'Слайд успешно добавлен');
    }

    public function deleteSlider(Request $request)
    {
        LockersSliders::where('id', '=', $request->slider_id)->delete();
    }

    public function deleteLocker(Request $request)
    {
        $locker = Locker::where('id', '=', $request->locker_id)->first();
        File::deleteDirectory(public_path('storage/lockers/'.$request->locker_id));
        LockersOrders::where('id', '=', $locker->locker_id)->delete();
        LockersSliders::where('id', '=', $locker->locker_id)->delete();
        LockersTable::where('id', '=', $locker->locker_id)->delete();
        Locker::where('id', '=', $request->locker_id)->delete();
    }

    public function uploadLockerPreviewImgs(Request $request)
    {
        request()->file('file')->store('lockers/'.$request->id.'/preview/', 'public');
    }

    public function uploadLockerBrandsImgs(Request $request)
    {
        $name = request()->file('file')->getClientOriginalName();
        request()->file('file')->storeAs('lockers/'.$request->id.'/brands/', $name, 'public');
        $lockerImg = new LockersBrandImages();
        $lockerImg->locker_id = $request->id;
        $lockerImg->image_path = '/storage/lockers/'.$request->id.'/brands/'.$name;
        $lockerImg->save();
    }

    public function updateLockerAltBrandImg(Request $request)
    {
        $lockerImg = LockersBrandImages::where('id', '=', $request->img_id)->first();
        $lockerImg->alt_name = $request->alt_name;
        $lockerImg->url = $request->url;
        $lockerImg->save();
    }

    public function getLockerPreviewImages($id)
    {
        chdir('public');
        $img = glob('storage/lockers/'.$id.'/preview/*.*');
        chdir('..');
        return json_encode($img);
    }

    public function getLockerBrandImages($id)
    {
        $img = LockersBrandImages::where('locker_id', '=', $id)->get();
        return json_encode($img);
    }

    public function deleteLockerPreviewImg(Request $request)
    {
        $file = $request->img;
        $file = preg_replace('/^.*\/\s*/', '', $request->img);
        $fullPath = public_path().'/storage/lockers/'.$request->id.'/preview/'.$file;
        File::delete($fullPath);
    }

    public function deleteLockerBrandImg(Request $request)
    {
        LockersBrandImages::where('id', '=', $request->img_id)->delete();
        File::delete(public_path().$request->img_path);
    }

    public function showStickers()
    {
        $stickers = Stickers::all();
        return view('dashboard.moduleStickers', compact(['stickers']));
    }

    public function addSticker(Request $request)
    {
        $sticker = new Stickers();
        $sticker->color = $request->color;
        $sticker->text = $request->name;
        $sticker->save();
        return redirect()->back();
    }

    public function editSticker(Request $request)
    {
        $sameName = Stickers::where('text', '=', $request->name)->first();
        if ($sameName) {
            $sticker = Stickers::where('id', '=', $request->id)->first();
            if ($sameName->text == $sticker->text) {
                $sticker->color = $request->color;
                $sticker->text = $request->name;
                $sticker->save();
                return redirect()->back()->with('success', 'Стикер обновлен');
            } else {
                return redirect()->back()->with('error', 'Стикер с таким названием уже существует');
            }
        } else {
            $sticker = Stickers::where('id', '=', $request->id)->firstOrFail();
            $sticker->color = $request->color;
            $sticker->text = $request->name;
            $sticker->save();
            return redirect()->back()->with('success', 'Стикер обновлен');
        }
    }

    public function deleteSticker(Request $request)
    {
        Stickers::where('id', '=', $request->sticker_id)->delete();
    }

    public function showSpecials()
    {
        $specials = Specials::all();
        return view('dashboard.moduleSpecials', compact(['specials']));
    }

    public function addSpecial(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Недопустимый формат изображения. Используйте png|jpg|bmp');
        }
        if ($request->name) {
            $special = new Specials();
            $special->name = $request->name;
            $special->url = $request->url;
            if (empty($request->newImage)) {
                return redirect()->back()->with('error', 'Изображение не выбрано, попробуйте снова');
            }
            $special->image = '';
            $special->active = 0;
            $special->h2 = $request->h2;
            $special->short_description = $request->short_description;
            $special->description = $request->description;
            $special->metaTitle = $request->metaTitle;
            $special->metaDescription = $request->metaDescription;
            $special->save();
            $addImg = Specials::where('url', '=', $request->url)->firstOrfail();
            $request->newImage->store('specials/'.$addImg->id.'/', 'public');
            $addImg->image = '/storage/specials/'.$addImg->id.'/'.$request->newImage->hashName();
            $addImg->save();
        }
        return redirect()->back()->with('success', 'Акция добавлена');
    }

    public function editSpecial($url)
    {
        $special = Specials::where('url', '=', $url)->first();
        return view('dashboard.moduleEditSpecials', compact(['special']));
    }

    public function getSpecialsData($special_id)
    {
        $special = Specials::where('id', '=', $special_id)->first();
        if ($special->sticker_id != 0) {
            $StickerSel = Stickers::where('id', '=', $special->sticker_id)->first();
            $special->noStickers = 0;
        } else {
            $special->noStickers = 1;
        }
        $stickers = Stickers::all();
        $stickerNames = array();
        foreach ($stickers as $key => $stickerName) {
            $stickerNames[$key]['id'] = $stickerName->id;
            $stickerNames[$key]['text'] = $stickerName->text;
            if (isset($StickerSel)) {
                if ($stickerName->text == $StickerSel->text) {
                    $stickerNames[$key]['selected'] = 1;
                    $special->stickerSelected = $stickerName->id;
                } else {
                    $stickerNames[$key]['selected'] = 0;
                }
            } else {
                $stickerNames[$key]['selected'] = 0;
                $special->stickerSelected = 0;
            }
        }
        $special->stickers = $stickerNames;
        return json_encode($special);
    }

    public function updateSpecialSticker(Request $request)
    {
        $special = Specials::where('id', '=', $request->special_id)->first();
        $special->sticker_id = $request->sticker_id;
        $special->save();
    }

    public function enableSpecial(Request $request)
    {
        $special = Specials::where('id', '=', $request->special_id)->first();
        $special->active = $request->enable;
        $special->save();
    }

    public function getSpecialsProducts($id)
    {
        $special = Specials::where('id', '=', $id)->first();
        $connectedGroups = SpecialsGroupConnections::where('special_id', '=', $id)->get();
        $groups = array();
        foreach ($connectedGroups as $group) {
            $groups[] = $group->group_name_id;
        }
        $groupNames = GroupNames::whereIn('id', $groups)->get();
        $connectedProducts = SpecialsProductConnections::where('special_id', '=', $id)->get();
        $products = array();
        foreach ($connectedProducts as $product) {
            $products[] = $product->product_id;
        }
        $productNames = Product::whereIn('id', $products)->get();
        $data = array();
        foreach ($groupNames as $name) {
            $data[] = array('id' => $name->id, 'name' => $name->name, 'type' => 'Группа');
        }
        foreach ($productNames as $name) {
            $data[] = array('id' => $name->id, 'name' => $name->name, 'type' => 'Товар');
        }
        return json_encode($data);
    }

    public function getProductsForSpecials()
    {
        $RequestedProducts = Product::all();
        foreach ($RequestedProducts as $key => $value) {
            $search_sku = Product::find($value->id)->sku()->get();
            $Skus = array();
            foreach ($search_sku as $sku) {
                $Skus[] = $sku->sku;
            }
            $Skus = implode(", ", $Skus);
            $RequestedProducts[$key]->sku = $Skus;
        }
        return json_encode($RequestedProducts);
    }

    public function getGroupsForSpecials()
    {
        $groups = GroupNames::all();
        return json_encode($groups);
    }

    public function addProductToSpecialConnection(Request $request)
    {
        foreach ($request->products as $product_id) {
            $connectionExists = SpecialsProductConnections::where('special_id', '=', $request->special_id)->where('product_id', '=', $product_id)->first();
            if (empty($connectionExists)) {
                $productGroupsBlocks = new SpecialsProductConnections();
                $productGroupsBlocks->special_id = $request->special_id;
                $productGroupsBlocks->product_id = $product_id;
                $productGroupsBlocks->save();
            }
        }
    }

    public function addGroupToSpecialConnection(Request $request)
    {
        foreach ($request->groups as $group) {
            $connectionExists = SpecialsGroupConnections::where('special_id', '=', $request->special_id)->where('group_name_id', '=', $group)->first();
            if (empty($connectionExists)) {
                $productGroupsBlocks = new SpecialsGroupConnections();
                $productGroupsBlocks->special_id = $request->special_id;
                $productGroupsBlocks->group_name_id = $group;
                $productGroupsBlocks->save();
            }
        }
    }

    public function deleteSpecialConnection(Request $request)
    {
        $products = array();
        $groups = array();
        foreach ($request->items as $item) {
            if ($item[1] == "Товар") {
                $products[] = $item[0];
            } else {
                $groups[] = $item[0];
            }
        }
        SpecialsGroupConnections::whereIn('group_name_id', $groups)->where('special_id', '=', $request->special_id)->delete();
        SpecialsProductConnections::whereIn('product_id', $products)->where('special_id', '=', $request->special_id)->delete();
    }

    public function deleteSpecial(Request $request)
    {
        File::deleteDirectory(public_path('storage/specials/'.$request->special_id));
        SpecialsGroupConnections::where('special_id', '=', $request->special_id)->delete();
        SpecialsProductConnections::where('special_id', '=', $request->special_id)->delete();
        Specials::where('id', '=', $request->special_id)->delete();
    }

    public function updateSpecial(Request $request)
    {
        $special = Specials::where('id', '=', $request->id)->firstOrFail();
        if ($request->name) {
            $special->name = $request->name;
        }
        if ($request->url) {
            $checkForSameUrl = Specials::where('url', '=', $request->url)->first();
            if (empty($checkForSameUrl) || $special->url == $request->url) {
                $special->url = $request->url;
            } else {
                return redirect()->back()->with('error', 'Данный URL уже используется!');
            }
        }
        if ($request->h2) {
            $special->h2 = $request->h2;
        }
        if ($request->short_description) {
            $special->short_description = $request->short_description;
        }
        if ($request->description) {
            $special->description = $request->description;
        }
        if ($request->metaTitle) {
            $special->metaTitle = $request->metaTitle;
        }
        if ($request->metaDescription) {
            $special->metaDescription = $request->metaDescription;
        }
        $special->save();
        return redirect('/dashboard/modules/specials/'.$request->url)->with('success', 'Обновлено');
    }

    public function showDelivery()
    {
        return view('dashboard.moduleDelivery');
    }

    public function addDelivery(Request $request)
    {
        $delivery = new Delivery();
        if ($request->country) {
            $delivery->country = $request->country;
        } else {
            return redirect()->back()->with('error', 'Укажите страну.');
        }
        if ($request->region) {
            $delivery->region = $request->region;
        } else {
            return redirect()->back()->with('error', 'Укажите регион.');
        }
        if ($request->city) {
            $delivery->city = $request->city;
        } else {
            return redirect()->back()->with('error', 'Укажите город.');
        }
        $delivery->url = $request->url;
        if ($request->active != null) {
            $delivery->active = 1;
        } else {
            $delivery->active = 0;
        }
        $delivery->metaTitle = $request->metaTitle;
        $delivery->metaDescription = $request->metaDescription;
        $delivery->address = $request->address;
        $delivery->save();
        return redirect()->back()->with('success', 'Город успешно добавлен');
    }

    public function getDeliveryData()
    {
        $delivery = Delivery::all();
        return json_encode($delivery);
    }

    public function updateCity(Request $request)
    {
        $delivery = Delivery::where('id', '=', $request->delivery['id'])->first();
        if ($request->delivery['country']) {
            $delivery->country = $request->delivery['country'];
        } else {
            return redirect()->back()->with('error', 'Укажите страну.');
        }
        if ($request->delivery['region']) {
            $delivery->region = $request->delivery['region'];
        } else {
            return redirect()->back()->with('error', 'Укажите регион.');
        }
        if ($request->delivery['city']) {
            $delivery->city = $request->delivery['city'];
        } else {
            return redirect()->back()->with('error', 'Укажите город.');
        }
        $delivery->url = $request->delivery['url'];
        $delivery->active = $request->delivery['active'];
        $delivery->metaTitle = $request->delivery['metaTitle'];
        $delivery->metaDescription = $request->delivery['metaDescription'];
        $delivery->address = $request->delivery['address'];
        $delivery->save();
    }

    public function deleteCity(Request $request)
    {
        Delivery::where('id', '=', $request->id)->delete();
    }

    public function showNews()
    {
        $allNews = News::all();
        return view('dashboard.moduleNews', compact(['allNews']));
    }

    public function addNews(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'newImage' => 'mimes:jpg,jpeg,bmp,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Недопустимый формат изображения. Используйте png|jpg|bmp');
        }
        if ($request->title) {
            $news = new News();
            $news->title = $request->title;
            $news->body = $request->body;
            if ($request->url) {
                $news->url = $request->url;
            } else {
                return redirect()->back()->with('error', 'Не указан URL страницы');
            }
            if (empty($request->newImage)) {
                return redirect()->back()->with('error', 'Изображение не выбрано, попробуйте снова');
            }
            $news->image = '';
            if ($request->active != null) {
                $news->active = 1;
            } else {
                $news->active = 0;
            }
            $news->preview = $request->preview;
            $news->metaTitle = $request->metaTitle;
            $news->metaDescription = $request->metaDescription;
            $news->save();
            $addImg = News::where('url', '=', $request->url)->firstOrfail();
            $request->newImage->store('news/'.$addImg->id.'/', 'public');
            $addImg->image = '/storage/news/'.$addImg->id.'/'.$request->newImage->hashName();
            $addImg->save();
            return redirect()->back()->with('success', 'Новость добавлена');
        } else {
            return redirect()->back()->with('error', 'Не указан Title новости');
        }
    }

    public function editNews($url)
    {
        $news = News::where('url', '=', $url)->first();
        return view('dashboard.moduleEditNews', compact(['news']));
    }
    public function uploadNewsPreviewImgs(Request $request)
    {
        request()->file('file')->store('news/'.$request->id.'/slider/', 'public');
    }

    public function getNewsPreviewImages($id)
    {
        chdir('public');
        $img = glob('storage/news/'.$id.'/slider/*.*');
        chdir('..');
        return json_encode($img);
    }

    public function deleteNewsPreviewImg(Request $request)
    {
        $file = $request->img;
        $file = preg_replace('/^.*\/\s*/', '', $request->img);
        $fullPath = public_path().'/storage/news/'.$request->id.'/slider/'.$file;
        File::delete($fullPath);
    }

    public function updateNews(Request $request)
    {
        $news = News::where('id', '=', $request->id)->firstOrFail();
        if ($request->title) {
            $news->title = $request->title;
        }
        if ($request->url) {
            $checkForSameUrl = News::where('url', '=', $request->url)->first();
            if (empty($checkForSameUrl) || $news->url == $request->url) {
                $news->url = $request->url;
            } else {
                return redirect()->back()->with('error', 'Данный URL уже используется!');
            }
        }
        if ($request->preview) {
            $news->preview = $request->preview;
        }
        if ($request->metaTitle) {
            $news->body = $request->body;
        }
        if ($request->metaTitle) {
            $news->metaTitle = $request->metaTitle;
        }
        if ($request->metaDescription) {
            $news->metaDescription = $request->metaDescription;
        }
        $news->save();
        return redirect('/dashboard/modules/news/'.$request->url)->with('success', 'Обновлено');
    }

    public function enableNews(Request $request)
    {
        $news = News::where('id', '=', $request->id)->first();
        $news->active = $request->checked;
        $news->save();
    }
    
    // Brands tags
    public function showBrandsTags()
    {
        return view('dashboard.moduleBrandsTags');
    }

    public function getBrandsTags(Request $request)
    {
        $data = array();
        $brands_tags = BrandTag::orderBy('sort_position')->get();
        if ($request->brand_id) {
            $connected_tags = $this->getConnectedBrandsTags($request);
            foreach ($brands_tags as $brands_tag) {
                $brands_tag->connected = false;
            }
            foreach ($connected_tags as $connected_tag) {
                foreach ($brands_tags as $brands_tag) {
                    if ($connected_tag->id == $brands_tag->id) {
                        $brands_tag->connected = true;
                    }
                }
            }
        }
        $data['brands_tags'] = $brands_tags;
        return response()->json($data, 200);
    }

    public function getConnectedBrandsTags(Request $request)
    {
        $brands_tags = Brands::select('id', 'name', 'sort_position')
            ->where('id', '=', $request->brand_id)
            ->first()
            ->tags()
            ->get();
        return $brands_tags;
    }

    public function addBrandsTag(Request $request)
    {
        $newBrandsTag = new BrandTag();
        $newBrandsTag->name = $request->name;
        $newBrandsTag->sort_position = (BrandTag::count()) + 1;
        $newBrandsTag->save();
    }

    public function deleteBrandsTag(Request $request)
    {
        BrandTag::where('id', '=', $request->id)->delete();
        return response()->json(['success' => true]);
    }

    public function changeBrandsTagsSort(Request $request)
    {
        $thisBrandsTags = $request->brands_tags;
        foreach ($thisBrandsTags as $key => $tag) {
            $searchBrandsTag = BrandTag::where('id', '=', $tag['id'])->first();
            $searchBrandsTag->sort_position = $key + 1;
            $searchBrandsTag->save();
        }
    }

    public function getBrandsIndustries(Request $request)
    {
        $data = array();
        $brands_industries = BrandIndustry::select(
            'id',
            'name',
            'sort_position'
        )->orderBy('sort_position')->get();
        if ($request->brand_id) {
            $connected_industries = $this
                ->getConnectedBrandsIndustries($request);
            foreach ($brands_industries as $brands_industry) {
                $brands_industry->connected = false;
            }
            foreach ($connected_industries as $connected_industry) {
                foreach ($brands_industries as $brands_industry) {
                    if ($connected_industry->id == $brands_industry->id) {
                        $brands_industry->connected = true;
                    }
                }
            }
        }
        $data['brands_industries'] = $brands_industries;
        return response()->json($data, 200);
    }

    public function getConnectedBrandsIndustries(Request $request)
    {
        $brands_industries = Brands::select('id', 'name', 'sort_position')
            ->where('id', '=', $request->brand_id)
            ->first()
            ->industries()
            ->get();
        return $brands_industries;
    }

    public function addBrandsIndustry(Request $request)
    {
        $newBrandsIndustry = new BrandIndustry();
        $newBrandsIndustry->name = $request->name;
        $newBrandsIndustry->sort_position = (BrandIndustry::count()) + 1;
        $newBrandsIndustry->save();
    }

    public function deleteBrandsIndustry(Request $request)
    {
        BrandIndustry::where('id', '=', $request->id)->delete();
        return response()->json(['success' => true]);
    }

    public function changeBrandsIndustriesSort(Request $request)
    {
        $thisBrandsIndustries = $request->brands_industries;
        foreach ($thisBrandsIndustries as $key => $tag) {
            $searchBrandsIndustry = BrandIndustry::where('id', '=', $tag['id'])
                ->first();
            $searchBrandsIndustry->sort_position = $key + 1;
            $searchBrandsIndustry->save();
        }
    }

    public function updateBrandsTag()
    {
        BrandTag::find(request()->tag['id'])->update([
            'name' => request()->tag['name'],
            'url' => request()->tag['url'],
            'description' => request()->tag['description']
        ]);
    }

    // FAQ
    public function showFaq()
    {
        return view('dashboard.moduleFaq');
    }

    public function getFaqCategories()
    {
        $data = FAQCategory::orderBy('sort_position')->get();
        return response()->json($data, 200);
    }

    public function getFaqQuestions()
    {
        $data = array();
        $questions = FAQ::orderBy('sort_position')->get();
        foreach ($questions as $question) {
            $data[$question->faq_category_id][] = $question;
        }
        return response()->json($data, 200);
    }

    public function changeFaqCategoriesSort(Request $request)
    {
        $faqCategories = $request->categories;
        foreach ($faqCategories as $key => $category) {
            $faqCategories = FAQCategory::where('id', '=', $category['id'])
                ->first();
            $faqCategories->sort_position = $key + 1;
            $faqCategories->save();
        }
    }

    public function changeFaqSort(Request $request)
    {
        $questions = array();
        foreach ($request->questions as $questions) {
            foreach ($questions as $key => $question) {
                $question = FAQ::where('id', '=', $question['id'])->first();
                $question->sort_position = $key + 1;
                $question->save();
            }
        }
    }

    public function updateQuestion(Request $request)
    {
        $faq = FAQ::where('id', '=', $request['question']['id'])->first();
        $faq->question = $request['question']['question'];
        $faq->answer = $request['question']['answer'];
        $faq->save();
    }

    public function deleteQuestion(Request $request)
    {
        FAQ::where('id', '=', $request['id'])->delete();
    }

    public function addQuestion(Request $request)
    {
        $faq = new FAQ();
        $faq->question = $request['question']['question'];
        $faq->answer = $request['question']['answer'];
        $faq->faq_category_id = $request['category_id'];
        $faq->sort_position = FAQ::where(
            'faq_category_id',
            $faq->faq_category_id
        )->count() + 1;
        $faq->save();
    }

    public function addCategory(Request $request)
    {
        $faqCategory = new FAQCategory();
        $faqCategory->name = $request['name'];
        $faqCategory->sort_position = FAQCategory::count() + 1;
        $faqCategory->save();
    }

    public function deleteCategory(Request $request)
    {
        FAQCategory::where('id', '=', $request['id'])->delete();
    }

    // WYSIWYG
    public function showWysiwyg()
    {
        return view('dashboard.moduleWysiwyg');
    }

    public function getProductDescription(GetProductDescriptionRequest $request)
    {
        $data = Product::where('url', $request->url)->first()->description;

        return response()->json($data, 200);
    }

    public function saveProductDescription(SaveProductDescriptionRequest $request)
    {
        Product::where('url', $request->url)
            ->first()
            ->update(['description' => $request->description]);
    }

    // Supply
    public function showSupply()
    {
        return view('dashboard.moduleSupply');
    }

    public function getCustomers()
    {
        return response()->json(Customer::orderBy('sort_position')->get());
    }

    public function customersChangeSort()
    {
        foreach (request()->customers as $key => $customer) {
            Customer::find($customer['id'])->update([
                'sort_position' => $key + 1
            ]);
        }
    }

    public function customerChangeActive(Customer $customer)
    {
        $customer->active = !$customer->active;
        $customer->save();
    }

    public function customerDelete(Customer $customer)
    {
        $customer->delete();
    }

    public function uploadCustomerImage()
    {
        return '/storage/'.request()->file('file')->store('customers', 'public');
    }

    public function createCustomer()
    {
        Customer::create([
            'name' => request()->name,
            'logo' => request()->logo,
            'sort_position' => Customer::count() + 1
        ]);
    }

    public function customerSaveName(Customer $customer)
    {
        $customer->update([
            'name' => request()->name
        ]);
    }
}
