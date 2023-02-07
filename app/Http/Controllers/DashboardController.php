<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App;
use App\Product;
use App\Options;
use App\additionalOptions;
use App\OptionValues;
use App\Brands;
use App\Categories;
use App\sku;
use App\Groups;
use App\GroupNames;
use App\GroupsBlocks;
use App\CategoryGroupsBlocks;
use App\ProductGroupsBlocks;
use App\Tags;
use App\CalcGroups;
use App\CalcOptions;
use App\TextOptions;
use App\Filters;
use App\Stickers;
use App\StickersConnection;
use App\Tabs;
use App\User;
use App\ProductFiles;
use App\CustomFields;
use App\metaStaticPage;
use App\MetaPatterns;
use App\Redirects;
use App\csvUploads;
use App\SpecialsProductConnections;
use App\DatabaseLog;
use App\Libraries\UpdateInfoClass as UC;
use App\Libraries\DLClient;
use App\ElasticSearchModel;
use Carbon\Carbon;
use stdClass;
use App\Currency;
use DB;
use App\Http\Requests\AddPropertyRequest;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('restricted');
        chdir('..');
        $currentDirectory = getcwd();
        View::share([
            'currentDirectory' => $currentDirectory,
        ]);
    }

    public function index()
    {
        $changelog = UC::changelog();
        $currencies = $this->getCurrencies();
        $allLogs = new UC();
        $getUpdates = $allLogs->getLogs();
        $gitAllLogs = $allLogs->gitCommits();
        $log = array();
        foreach ($gitAllLogs as $glog) {
            $time = date('d.m.Y H:i:s', strtotime($glog['Date']));
            $log[] = array('date' => $time, 'changes' => $glog['Message']);
        }
        $version = shell_exec('git rev-parse --abbrev-ref HEAD');
        $branches = shell_exec('git branch -r');
        $branches = nl2br($branches);
        $branches = trim(preg_replace('/\s+/', ' ', $branches));
        $branches = explode('<br />', trim(str_replace(' origin/', '', $branches)));
        array_shift($branches);
        array_pop($branches);
        return view('dashboard.index', compact(['version', 'branches',  'getUpdates', 'log', 'currencies', 'changelog']));
    }

    public function checkUpdate()
    {
        $gitVersion = shell_exec('git log | head');
        $gitVersion = nl2br($gitVersion);
        $gPieces = explode('<br />', $gitVersion);
        foreach ($gPieces as $key => $value) {
            $gPieces[$key] = trim($value, "\n");
            $gPieces[$key]= trim($gPieces[$key], " ");
            if (!empty($gPieces[$key])) {
                $gitLinesG[] = $gPieces[$key];
            }
        }
        foreach ($gitLinesG as $key => $value) {
            $gitLinesG[$key] = ltrim($value, "commit ");
            $gitLinesG[$key] = ltrim($gitLinesG[$key], "Date: ");
        }
        $git = $gitLinesG;
        if ((\Session::get('updatecheck')) != null) {
            if (\Session::get('updatecheck') < Carbon::now()) {
                \Session::forget('updatecheck');
                $nowTime = Carbon::now();
                $LaterTime = $nowTime->addMinutes(1);
                \Session::put('updatecheck', $LaterTime);
            } else {
                return response()->json([
                    'success' => false,
                ]);
            }
        } else {
            $nowTime = Carbon::now();
            $LaterTime = $nowTime->addMinutes(1);
            \Session::put('updatecheck', $LaterTime);
        }
        shell_exec('git remote update');
        $gitLastVersion = shell_exec('git show-branch *master');
        $gitLastVersion = nl2br($gitLastVersion);
        $pieces = explode('<br />', $gitLastVersion);
        $gitLines = array();
        foreach ($pieces as $key => $value) {
            if ($key > 2) {
                $pieces[$key] = trim($value, "\n");
                $pieces[$key]= trim($pieces[$key], " ");
                if (!empty($pieces[$key])) {
                    $gitLines[] = $pieces[$key];
                }
            }
        }
        $hasVersion = array();
        foreach ($gitLines as $key => $value) {
            $getVersion = explode(']', $value);
            if ($getVersion[0] != '*+ [master') {
                $hasVersion[] = ltrim($getVersion[1], ' ');
            }
        }
        if ((\Session::get('skipversion')) != null) {
            if ((\Session::get('skipversion')) != $hasVersion[0]) {
                if ($git[3] != $hasVersion[0]) {
                    return response()->json([
                        'success' => true,
                        'versions' => $hasVersion,
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                    ]);
                }
            } else {
                return response()->json([
                    'success' => false,
                ]);
            }
        } else {
            if (!isset($git[3]) || !isset($hasVersion[0])) {
                return response()->json([
                    'success' => false,
                ]);
            } else {
                if ($git[3] != $hasVersion[0]) {
                    return response()->json([
                        'success' => true,
                        'versions' => $hasVersion,
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                    ]);
                }
            }
        }
    }

    public function deleteUser(Request $request)
    {
        User::find($request->id)->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function getAllFiles($id)
    {
        $getProductFiles = ProductFiles::where('type', '=', 1)->where('product_id', '=', $id)->get();
        $getProductImages = ProductFiles::where('type', '=', 2)->where('product_id', '=', $id)->get();
        foreach ($getProductFiles as $key => $value) {
            $getProductFiles[$key]->name = basename($value->path);
        }
        $data['files'] = $getProductFiles;
        $data['images'] = $getProductImages;
        return $data;
    }

    public function filemanager()
    {
        return view('dashboard.filemanager');
    }

    public function kibana()
    {
        return view('dashboard.kibana');
    }

    public function addProductImage(Request $request)
    {
        $createImgConnection = new ProductFiles();
        $createImgConnection->product_id = $request->product_id;
        $path = str_replace('laravel-filemanager', 'storage', $request->path);
        $createImgConnection->path = $path;
        $createImgConnection->type = 2;
        $createImgConnection->save();
        return response()->json([
            'success' => true
        ]);
    }

    public function addProductFile(Request $request)
    {
        $createImgConnection = new ProductFiles();
        $createImgConnection->product_id = $request->product_id;
        $path = str_replace('laravel-filemanager', 'storage', $request->path);
        $createImgConnection->path = $path;
        $createImgConnection->type = 1;
        $createImgConnection->save();
        return response()->json([
            'success' => true
        ]);
    }

    public function deleteLaravelLogs() {
        $path = storage_path('logs');
        $dir = glob($path.'/*.log');
        foreach ($dir as $file) {
            $explode = explode('/', $file);
            $name = end($explode);
            file_put_contents(base_path().'/storage/logs/'.$name, '');
        }
    }

    public function users() {
        if (Auth::user()->access <= 3) {
            return view('dashboard.users');
        } else {
            return redirect('/dashboard');
        }
    }

    public function sysCommands(Request $request) {
        switch($request->command) {
            case 1:
                $shell = shell_exec('php artisan elastic:create-index App\\\\uetIndexConfigurator');
                if (strpos(mb_strtolower($shell), 'error') !== false) {
                    return response()->json([
                        'success' => false,
                        'refresh' => false,
                        'shell' => 'Индекс уже существует.',
                    ]);
                } else {
                    return response()->json([
                        'success' => true,
                        'refresh' => false,
                        'shell' => 'Индекс для ES успешно создан!',
                    ]);
                }
                break;
            case 2:
                $shell = shell_exec("curl -XDELETE 'localhost:9200/".env('ES_INDEX')."'");
                if (strpos(mb_strtolower($shell), 'error') !== false) {
                    return response()->json([
                        'success' => false,
                        'refresh' => false,
                        'shell' => 'Нельзя удалить то, чего не существует =)',
                    ]);
                } else {
                    return response()->json([
                        'success' => true,
                        'refresh' => false,
                        'shell' => 'Индекс успешно удален!',
                    ]);
                }
                break;
            case 3:
                $shell = shell_exec('php artisan migrate:refresh');
                $shell .= shell_exec('php artisan db:seed');
                $shell .= shell_exec('php artisan cache:clear');
                $user = shell_exec('whoami');
                if (!empty($shell)) {
                    return response()->json([
                        'success' => true,
                        'refresh' => true,
                        'shell' => 'База данных успешно очищена',
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'refresh' => false,
                        'shell' => 'Невозможно очистить базу данных. У пользователя '.$user.' нет доступа!',
                    ]);
                }
                break;
            case 4:
                $shell = shell_exec('php artisan cache:clear');
                $shell .= shell_exec('php artisan view:clear');
                $shell .= shell_exec('php artisan route:clear');
                $shell .= shell_exec('php artisan config:clear');
                $shell .= shell_exec('php artisan clear-compiled');
                $user = shell_exec('whoami');
                if (!empty($shell)) {
                    return response()->json([
                        'success' => true,
                        'refresh' => true,
                        'shell' => 'Кэш очищен',
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'refresh' => false,
                        'shell' => 'Невозможно очистить базу данных. У пользователя '.$user.' нет доступа!',
                    ]);
                }
                break;
        }
        return response()->json([
            'success' => false,
            'refresh' => false,
            'shell' => 'Критическая ошибка',
        ]);
    }

    public function database() {
        $db = glob("db_dump/*.sql");
        $databaseDumps = array();
        foreach ($db as $key => $dump) {
            if ($dump != 'db_dump/dump.sql') {
                $databaseDumps[$key] = new \stdClass();
                $name = explode('/', $dump);
                $databaseDumps[$key]->name = $name[1];
                $databaseDumps[$key]->url = base_path().'/'.$dump;
                $databaseDumps[$key]->date = date("d.m.Y", filemtime(base_path().'/'.$dump));
                $databaseDumps[$key]->time = date("H:i:s", filemtime(base_path().'/'.$dump));
            }
        }
        $dblogs = DatabaseLog::orderBy('id', 'desc')->limit('1000')->get();
        $startTime = date("H:i:s", filemtime(base_path().'/db_dump/dump.sql'));
        $endTime = date("H:i:s");
        return view('dashboard.database', compact(['databaseDumps', 'dblogs', 'startTime', 'endTime']));
    }

    public function createDump()
    {
        $loginPath = env('DB_LOGIN_PATH');
        $name = "db_".date('dmY').date('His');
        $exe = 'mysqldump --login-path="'.$loginPath.'" '.env('DB_DATABASE')." > db_dump/manual_".$name.".sql";
        $shell = shell_exec($exe);
        return response()->json([
            'success' => true,
            'refresh' => true,
            'shell' => 'Бэкап создан успешно!',
        ]);
    }

    public function restoreDatabase(Request $request)
    {
        $loginPath = env('DB_LOGIN_PATH');
        $path = $request->db_path;
        $exe =  'mysql --login-path="'.$loginPath.'" '.env('DB_DATABASE').' < '.$path;
        $shell = shell_exec($exe);
        return response()->json([
            'success' => true,
            'refresh' => true,
            'shell' => 'База данных успешно восстановлена!',
        ]);
    }

    public function restoreIncrementalDatabase(Request $request)
    {
        $time = $request->db_time;
        $date = date('Y-m-d');
        $loginPath = env('DB_LOGIN_PATH');
        $dir = scandir('/var/log/mysql');
        $bins = '';
        foreach ($dir as $bin) {
            if (strpos($bin, 'mysql-bin') !== false && $bin != 'mysql-bin.index') {
                $bins .= '/var/log/mysql/'.$bin.' ';
            }
        }
        shell_exec("mysql < db_dump/dump.sql uralenergotel_ru");
        shell_exec('mysqlbinlog --stop-datetime="'.$date.' '.$time.':00" '.$bins.' | mysql --login-path='.$loginPath.' uralenergotel_ru');
        return response()->json([
            'success' => true,
            'refresh' => true,
            'shell' => 'База данных успешно восстановлена!',
        ]);
    }

    public function deleteDatabase(Request $request)
    {
        $path = $request->db_path;
        File::delete($path);
        return response()->json([
            'success' => true,
            'refresh' => true,
            'shell' => 'Бэкап успешно удален',
        ]);
    }

	public function system() 
	{
        if (Auth::user()->access <= 2) {
            $version = new \stdClass();
            $getUbuntu = shell_exec('lsb_release -a');
            $getUbuntu = nl2br($getUbuntu);
            $piecesUbuntu = explode('<br />', $getUbuntu);
            $piecesUbuntu = trim($piecesUbuntu[1], "\n");
            $piecesUbuntu = trim($piecesUbuntu, " ");
            $piecesUbuntu = ltrim($piecesUbuntu, 'Description:');
            $piecesUbuntu = trim($piecesUbuntu, "\t");
            $version->ubuntu = $piecesUbuntu;
            $getMysql = shell_exec('mysql -V');
            $getMysql = nl2br($getMysql);
            $getMysql = explode(',', $getMysql);
            $getMysql = explode(' ', $getMysql[0]);
            $version->mysql = $getMysql[5];
            $getNginx = shell_exec('nginx -v 2>&1');
            $getNginx = explode(' ', $getNginx);
            $getNginx = explode('/', $getNginx[2]);
            $version->nginx = $getNginx[1];
            $getPHP = shell_exec('php -v');
            $getPHP = explode(' ', $getPHP);
            $getPHP = explode('-', $getPHP[1]);
            $version->php = $getPHP[0];
            $getJava = shell_exec('java --version');
            $getJava = nl2br($getJava);
            $piecesJava = explode('<br />', $getJava);
            $piecesJava = explode(' ', $piecesJava[0]);
            if (isset($piecesJava[1])) {
                $piecesJava = $piecesJava[0].' '.$piecesJava[1];
                $version->java = $piecesJava;
            } else {
                $version->java = 'Не установлено';
            }
            $getES = shell_exec("curl -XGET 'localhost:9200'");
            $getES = nl2br($getES);
            $piecesES = explode('<br />', $getES);
            if (isset($piecesES[5])) {
                $piecesES = trim($piecesES[5], "\n");
                $piecesES = trim($piecesES, " ");
                $piecesES = explode(' : ', $piecesES);
                $piecesES = rtrim($piecesES[1], ',');
                $piecesES = trim($piecesES, '"');
                $version->elasticsearch = $piecesES;
            } else {
                $version->elasticsearch = 'Не установлено';
            }
            $getLaravel = shell_exec('php artisan --version');
            $getLaravel = explode(' ', $getLaravel);
            $version->laravel = $getLaravel[2];
            return view('dashboard.system', compact(['version']));
        } else {
            return redirect('/dashboard');
        }
    }

    public function git()
    {
        $allLogs = new UC();
        $getUpdates = $allLogs->getLogs();
        $gitAllLogs = $allLogs->gitCommits();
        return view('dashboard.git', compact(['gitAllLogs', 'getUpdates']));
    }

    public function toUpdate(Request $request)
    {
        $type = $request->update;
        switch ($type) {
            case 1:
                $shell = shell_exec('git pull');
                $user = shell_exec('whoami');
                if (!empty($shell)) {
                    if (strpos(mb_strtolower($shell), 'already up to date') !== false) {
                        return response()->json([
                            'success' => true,
                            'refresh' => false,
                            'shell' => 'У вас уже установлена последняя версия',
                        ]);
                    } else {
                        return response()->json([
                            'success' => true,
                            'refresh' => true,
                            'shell' => 'Обновление прошло успешно!',
                        ]);
                    }
                } else {
                    return response()->json([
                        'success' => false,
                        'refresh' => false,
                        'shell' => 'Невозможно обновить. У пользователя '.$user.' нет доступа!',
                    ]);
                }
                break;
            case 2:
                \Session::forget('updatecheck');
                $nowTime = Carbon::now();
                $LaterTime = $nowTime->addHours(24);
                \Session::put('updatecheck', $LaterTime);
                return response()->json([
                    'success' => true,
                    'refresh' => false,
                    'shell' => 'Проверка обновлений отложена на 1 день',
                ]);
                break;
            case 3:
                shell_exec('git remote update');
                $gitLastVersion = shell_exec('git show-branch *master');
                $gitLastVersion = nl2br($gitLastVersion);
                $pieces = explode('<br />', $gitLastVersion);
                $gitLines = array();
                foreach ($pieces as $key => $value) {
                    if ($key > 2) {
                        $pieces[$key] = trim($value, "\n");
                        $pieces[$key]= trim($pieces[$key], " ");
                        if (!empty($pieces[$key])) {
                            $gitLines[] = $pieces[$key];
                        }
                    }
                }
                $hasVersion = array();
                foreach ($gitLines as $key => $value) {
                    $getVersion = explode(']', $value);
                    if ($getVersion[0] != '*+ [master') {
                        $hasVersion[] = ltrim($getVersion[1], ' ');
                    }
                }
                \Session::forget('skipversion');
                \Session::put('skipversion', $hasVersion[0]);
                return response()->json([
                    'success' => true,
                    'refresh' => false,
                    'shell' => 'Обновление до версии '.$hasVersion[0].' больше не будет отображаться',
                ]);
                break;
        }
    }

    public function gitUpdate()
    {
        $shell = shell_exec('git pull');
        $user = shell_exec('whoami');
        if (!empty($shell)) {
            if (strpos(mb_strtolower($shell), 'already up to date') !== false) {
                return response()->json([
                    'success' => true,
                    'refresh' => false,
                    'shell' => 'У вас уже установлена последняя версия',
                ]);
            } else {
                return response()->json([
                    'success' => true,
                    'refresh' => true,
                    'shell' => 'Обновление прошло успешно!',
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'refresh' => false,
                'shell' => 'Невозможно обновить. У пользователя '.$user.' нет доступа!',
            ]);
        }
    }

    public function gitRevert()
    {
        $gitVersion = shell_exec('git log | head');
        $gitVersion = nl2br($gitVersion);
        $pieces = explode('<br />', $gitVersion);
        foreach ($pieces as $key => $value) {
            $pieces[$key] = trim($value, "\n");
            $pieces[$key]= trim($pieces[$key], " ");
            if (!empty($pieces[$key])) {
                $gitLines[] = $pieces[$key];
            }
        }
        foreach ($gitLines as $key => $value) {
            $gitLines[$key] = ltrim($value, "commit ");
            $gitLines[$key] = ltrim($gitLines[$key], "Date: ");
        }
        $command = 'git reset --hard '.$gitLines[4];
        $shell = shell_exec($command);
        $user = shell_exec('whoami');
        if (!empty($shell)) {
            return response()->json([
                'success' => true,
                'shell' => 'Откат завершен успешно!',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'shell' => 'Невозможно произвести откат. У пользователя '.$user.' нет доступа!',
            ]);
        }
    }

    public function revertToCommit(Request $request)
    {
        $commit = trim($request->commit, '"');
        $command = 'git reset --hard '.$commit;
        $shell = shell_exec($command);
        $user = shell_exec('whoami');
        if (!empty($shell)) {
            return response()->json([
                'success' => true,
                'shell' => 'Откат завершен успешно!',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'shell' => 'Невозможно произвести откат. У пользователя '.$user.' нет доступа!',
            ]);
        }
    }

    public function gitClear()
    {
        $shell = shell_exec('php artisan migrate:refresh');
        $shell .= shell_exec('php artisan db:seed');
        $shell .= shell_exec('php artisan cache:clear');
        $user = shell_exec('whoami');
        if (!empty($shell)) {
            return response()->json([
                'success' => true,
                'shell' => 'База данных успешно очищена',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'shell' => 'Невозможно очистить базу данных. У пользователя '.$user.' нет доступа!',
            ]);
        }
    }

    public function cacheClear()
    {
        $shell = shell_exec('php artisan cache:clear');
        $user = shell_exec('whoami');
        if (!empty($shell)) {
            return response()->json([
                'success' => true,
                'shell' => 'Кэш успешно очищен',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'shell' => 'Невозможно очистить кэш. У пользователя '.$user.' нет доступа!',
            ]);
        }
    }

    public function terminal(Request $request) {
        if (strpos(mb_strtolower($request->command), 'cd ') !== false) {
            $command = ltrim($request->command, 'cd ');
            try {
                chdir($request->dir);
                chdir($command);
                $shell = '';
            } catch (\Exception $e) {
                chdir($request->dir);
                $shell = 'Directory not found. Try one of these:<br>';
                $shell .= shell_exec('ls -a');
                return response()->json([
                    'success' => true,
                    'directory' => getcwd(),
                    'lastDirectory' => $request->dir,
                    'lastCommand' => $request->command,
                    'shell' => nl2br($shell),
                ]);
            }
        } else {
            chdir($request->dir);
            $command = $request->command;
            if (mb_strtolower($command) == 'php artisan migrate:refresh' || (mb_strtolower($command) == 'burn')) {
                $shell = shell_exec('php artisan migrate:refresh');
                $shell .= shell_exec('php artisan db:seed');
            } else {
                $shell = shell_exec($command);
            }
        }
        return response()->json([
            'success' => true,
            'directory' => getcwd(),
            'lastDirectory' => $request->dir,
            'lastCommand' => $request->command,
            'shell' => nl2br($shell),
        ]);
    }

    public function showCategory($url)
    {
        $category = Categories::where('url', '=', $url)->firstOrFail();
        $subCategory1 = Categories::orderBy('sort_position')->where('parent_id', '=', $category->id)->get();

        $allCategories = Categories::all();
        $Categories = array();
        foreach ($allCategories as $category) {
            if ($category->depth == 1) {
                $Categories[$category->id]['name'] = $category->name;
                $Categories[$category->id]['url'] = $category->url;
                $Categories[$category->id]['id'] = $category->id;
                $Categories[$category->id]['image'] = $category->image;
                $Categories[$category->id]['active'] = $category->active;
            }
        }
        foreach ($allCategories as $category) {
            if ($category->depth == 2) {
                $Categories[$category->parent_id]['cats'][$category->id]['name'] = $category->name;
                $Categories[$category->parent_id]['cats'][$category->id]['url'] = $category->url;
            }
        }
        foreach ($allCategories as $category) {
            if ($category->depth == 3) {
                $check = Categories::where('id', '=', $category->parent_id)->first();
                $Categories[$check->parent_id]['cats'][$category->parent_id]['cats'][$category->id]['name'] = $category->name;
                $Categories[$check->parent_id]['cats'][$category->parent_id]['cats'][$category->id]['url'] = $category->url;
            }
        }
        foreach ($Categories as $key => $value) {
            if ($value['url'] == $url) {
                    $thisCategory[$key] = $Categories[$key];
                    $categoryName = $Categories[$key]['name'];
                    $categoryInfo = Categories::where('name', '=', $categoryName)->first();
            }
        }
        return view('dashboard.category', compact(['thisCategory', 'categoryInfo']));
    }

    public function showSubCategory($parentUrl, $url)
    {
        $parentCat = Categories::where('url', '=', $parentUrl)->firstOrFail();
        $category = Categories::where('url', '=', $url)->where('parent_id', '=', $parentCat->id)->first();
        $subCategory = Categories::orderBy('sort_position')->where('parent_id', '=', $category->id)->get();
        $Categories = array();
        $Categories[$category->id]['name'] = $category->name;
        $Categories[$category->id]['url'] = $category->url;
        foreach ($subCategory as $cat) {
                $Categories[$cat->parent_id]['cats'][$cat->id]['name'] = $cat->name;
                $Categories[$cat->parent_id]['cats'][$cat->id]['url'] = $cat->url;
        }
        foreach ($Categories as $key => $value) {
            if ($value['url'] == $url) {
                    $thisCategory[$key] = $Categories[$key];
                    $categoryName = $Categories[$key]['name'];
                    $categoryInfo = Categories::where('name', '=', $categoryName)->first();
            }
        }
        return view('dashboard.subCategory', compact(['parentUrl', 'thisCategory', 'categoryInfo']));
    }

    public function showMaxSubCategory($firstUrl, $secondUrl, $url)
    {
        $mainCat = Categories::where('url', '=', $firstUrl)->firstOrFail();
        $parentCat = Categories::where('url', '=', $secondUrl)->where('parent_id', '=', $mainCat->id)->first();
        $thisCategory = Categories::where('url', '=', $url)->where('parent_id', '=', $parentCat->id)->first();
        $categoryInfo = Categories::where('url', '=', $url)->where('parent_id', '=', $parentCat->id)->first();
        return view('dashboard.maxSubCategory', compact(['firstUrl', 'secondUrl', 'thisCategory', 'categoryInfo']));
    }

    public function getMetaStaticPages()
    {
        $meta['seo'] = metaStaticPage::all();
        $meta['patterns'] = MetaPatterns::all();
        return json_encode($meta);
    }

    public function updatePagesMeta(Request $request)
    {
        $meta = MetaStaticPage::where('id', '=', $request->meta['id'])->first();
        $meta->metaTitle = $request->meta['metaTitle'];
        $meta->metaDescription = $request->meta['metaDescription'];
        $meta->save();
        return response()->json([
            'success' => true
        ]);
    }

    public function updatePatterns(Request $request)
    {
        $meta = MetaPatterns::where('id', '=', $request->meta['id'])->first();
        $meta->metaTitleStartPoint = $request->meta['metaTitleStartPoint'];
        $meta->metaTitleEndPoint = $request->meta['metaTitleEndPoint'];
        $meta->metaDescriptionStartPoint = $request->meta['metaDescriptionStartPoint'];
        $meta->metaDescriptionEndPoint = $request->meta['metaDescriptionEndPoint'];
        $meta->save();
        return response()->json([
            'success' => true
        ]);
    }

    public function getDataOld()
    {
        $RequestedProducts = Product::all();
        $products = array();
        foreach ($RequestedProducts as $key => $value) {
            $Skus = array();
            foreach ($value->sku as $sku) {
                $Skus[] = $sku->sku;
            }
            $Skus = implode(", ", $Skus);
            $products[$key] = new stdClass();
            $products[$key]->id = $value->id;
            $products[$key]->skuName = '<a data-sort="'.$Skus.'" href="/dashboard/products/edit/'.$value->id.'/'.$value->url.'">'.$Skus.'</a>';
            $products[$key]->name = '<a data-sort="'.$value->name.'" href="/dashboard/products/edit/'.$value->id.'/'.$value->url.'">'.$value->name.'</a>';
        }
        return json_encode($products);
    }

    public function getDataCategory($id)
    {
        $categories = Categories::where('id', '=', $id)->first();
        $categoriesId = array();
        $categoriesId[] = $categories->id;
        switch ($categories->depth) {
            case 1:
                $search = Categories::where('parent_id', '=', $categories->id)->get();
                foreach ($search as $category) {
                    $categoriesId[] = $category->id;
                    $search_sub = Categories::where('parent_id', '=', $category->id)->get();
                    foreach ($search_sub as $subCategory) {
                        $categoriesId[] = $subCategory->id;
                    }
                }
                break;
            case 2:
                $search = Categories::where('parent_id', '=', $categories->id)->get();
                foreach ($search as $key => $value) {
                    $categoriesId[] = $value->id;
                }
                break;
        }
        $RequestedProducts = Product::orderBy('name')->whereIn('category_id', $categoriesId)->with('sku')->get();
        $products = array();
        foreach ($RequestedProducts as $key => $value) {
            $Skus = array();
            foreach ($value->sku as $sku) {
                $Skus[] = $sku->sku;
            }
            $Skus = implode(", ", $Skus);
            $products[$key] = new stdClass();
            $products[$key]->id = $value->id;
            $products[$key]->skuName = '<a data-sort="'.$Skus.'" href="/dashboard/products/edit/'.$value->id.'/'.$value->url.'">'.$Skus.'</a>';
            $products[$key]->name = '<a data-sort="'.$value->name.'" href="/dashboard/products/edit/'.$value->id.'/'.$value->url.'">'.$value->name.'</a>';
        }
        return json_encode($products);
    }

    public function getProperties()
    {
        $options = Options::orderBy('name')->get();
        foreach ($options as $key => $option) {
            $options[$key]->optionValues = Options::find($option->id)->optionValues()->get();
            switch ($option->type) {
                case 1:
                    $options[$key]->typeName = 'Одно значение';
                    break;
                case 2:
                    $options[$key]->typeName = 'Множество значений';
                    break;
                case 3:
                    $options[$key]->typeName = 'Текст';
                    break;
            }
        }
        return json_encode($options);
    }

    public function addProperties(Request $request)
    {
        $optionId = Options::where('name', '=', $request->propertyName)->first();
        $newOptValue = new OptionValues();
        $newOptValue->option_id = $optionId->id;
        $newOptValue->value = $request->propertyValue;
        $newOptValue->url = $request->propertyValue;
        $newOptValue->save();
        return response()->json([
            'success' => true
        ]);
    }

    public function deleteProperty(Request $request)
    {
        $options = Options::where('id', '=', $request->id)->first();
        $optionValues = OptionValues::where('option_id', '=', $request->id)->get();
        foreach ($optionValues as $option) {
            additionalOptions::where('option_value_id', '=', $option->id)->delete();
        }
        OptionValues::where('option_id', '=', $request->id)->delete();
        Options::where('id', '=', $request->id)->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function addGroup(Request $request)
    {
        $groupExists = GroupNames::where('name', '=', $request->name)->first();
        if (empty($groupExists->id)) {
            $newGroup = new GroupNames();
            $newGroup->name = $request->name;
            $newGroup->save();
            return redirect()->back()->with('success', 'Группа "'.$request->name.'" успешно добавлена');
        } else {
            return redirect()->back()->with('error', 'Такая группа уже существует, попробуйте другое название.');
        }
    }

    public function deleteGroup(Request $request)
    {
        $group = GroupNames::where('id', '=', $request->id)->first();
        Groups::where('group_names_id', '=', $group->id)->delete();
        $groupName = $group->name;
        $group->delete();
        return redirect()->back()->with('success', 'Группа "'.$groupName.'" успешно удалена.');
    }

    public function editGroup($id)
    {
        $group = GroupNames::where('id', '=', $id)->firstOrfail();
        return view('dashboard.editGroups', compact(['group']));
    }

    public function addBrand(Request $request)
    {
        $nameExists = Brands::where('url', '=', $request->url)->first();
        if (empty($nameExists->id)) {
            $brand = new Brands();
            $brand->name = $request->name;
            $brand->url = $request->url;
            $brand->save();
            return redirect()->back()->with('success', 'Бренд "'.$request->name.'" успешно добавлен');
        } else {
            return redirect()->back()->with('error', 'Данный Url уже существует, попробуйте другой.');
        }
    }

    public function deleteSubCategory(Request $request)
    {
        $childrenCategories = Categories::where('parent_id', '=', $request->id)->get();
        foreach ($childrenCategories as $chCategory) {
            $subProducts =  Product::where('category_id', '=', $chCategory->id)->get();
            foreach ($subProducts as $product) {
                additionalOptions::where('product_id', '=', $product->id)->delete();
                sku::where('product_id', '=', $product->id)->delete();
                Tags::where('product_id', '=', $product->id)->delete();
                ProductGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                GroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                CategoryGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
                CalcGroups::where('product_id', '=', $product->id)->delete();
                Groups::where('product_id', '=', $product->id)->delete();
                File::deleteDirectory(public_path('storage/'.$product->id));
            }
            Product::where('category_id', '=', $chCategory->id)->delete();
            Categories::where('parent_id', '=', $chCategory->id)->delete();
        }
        Categories::where('parent_id', '=', $request->id)->delete();
        $thisCategory = Categories::where('id', '=', $request->id)->first();
        $chProductsMain = Product::where('category_id', '=', $thisCategory->id)->get();
        foreach ($chProductsMain as $product) {
            additionalOptions::where('product_id', '=', $product->id)->delete();
            sku::where('product_id', '=', $product->id)->delete();
            Tags::where('product_id', '=', $product->id)->delete();
            ProductGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
            GroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
            CategoryGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
            CalcGroups::where('product_id', '=', $product->id)->delete();
            Groups::where('product_id', '=', $product->id)->delete();
            File::deleteDirectory(public_path('storage/'.$product->id));
        }
        Product::where('category_id', '=', $thisCategory->id)->delete();
        Categories::where('id', '=', $request->id)->delete();
        return redirect('/dashboard/products');
    }

    public function deleteMaxSubCategory(Request $request)
    {
        $thisCategory = Categories::where('id', '=', $request->id)->first();
        $chProductsMain = Product::where('category_id', '=', $thisCategory->id)->get();
        foreach ($chProductsMain as $product) {
            additionalOptions::where('product_id', '=', $product->id)->delete();
            sku::where('product_id', '=', $product->id)->delete();
            Tags::where('product_id', '=', $product->id)->delete();
            ProductGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
            GroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
            CategoryGroupsBlocks::where('product_connect_id', '=', $product->id)->delete();
            CalcGroups::where('product_id', '=', $product->id)->delete();
            Groups::where('product_id', '=', $product->id)->delete();
            File::deleteDirectory(public_path('storage/'.$product->id));
        }
        Product::where('category_id', '=', $thisCategory->id)->delete();
        Categories::where('id', '=', $request->id)->delete();
        return redirect('/dashboard/products');
    }

    public function addSubCategory(Request $request)
    {

        $categoriExists = Categories::where('name', '=', $request->name)->first();
        if (empty($categoryExists->id)) {
            $newCat = new Categories();
            $newCat->parent_id = $request->OriginalName;
            $newCat->depth = 2;
            $newCat->name = $request->name;
            $newCat->url = $request->url;
            $newCat->save();
        }
        return redirect()->back();
    }

	public function addSubCategoryMax(Request $request)
	{

		$categoriExists = Categories::where('name', '=', $request->name)->first();
		if (empty($categoryExists->id)) {
			$newCat = new Categories();
			$newCat->parent_id = $request->OriginalName;
			$newCat->depth = 3;
			$newCat->name = $request->name;
			$newCat->url = $request->url;
			$newCat->save();
		}
		return redirect()->back();
	}

    public function addProp(Request $request)
    {
        $checkId = Options::where('id', '=', $request->id)->first();
        if ($checkId) {
            $newOptValue = new OptionValues();
            $newOptValue->option_id = $request->id;
            if ($request->value) {
                $checkSameValue = OptionValues::where('option_id', '=', $request->id)->where('value', '=', $request->value)->first();
                if ($checkSameValue) {
                    return redirect()->back()->with('error', 'Такое значение уже существует');
                }
                $newOptValue->value = $request->value;
            } else {
                return redirect()->back()->with('error', 'Значение не может быть пустым');
            }
            if ($request->url) {
                $checkSameUrl = OptionValues::where('option_id', '=', $request->id)->where('url', '=', $request->url)->first();
                if ($checkSameUrl) {
                    return redirect()->back()->with('error', 'Такой URL уже существует');
                }
                $newOptValue->url = $request->url;
            } else {
                return redirect()->back()->with('error', 'URL не может быть пустым');
            }
            $newOptValue->save();
            return redirect()->back()->with('success', 'Значение добавлено');
        } else {
            return redirect()->back()->with('error', 'Опция не найдена! Попробуйте еще раз');
        }
    }

    public function properties()
    {
        $options = Options::all();
        foreach ($options as $key => $value) {
            switch ($value->type) {
                case 1:
                    $options[$key]->typeName = 'Одно значение';
                    break;
                case 2:
                    $options[$key]->typeName = 'Множество значений';
                    break;
                case 3:
                    $options[$key]->typeName = 'Текст';
                    break;
            }
        }
        return view('dashboard.properties', compact(['options']));
    }

    public function getProductInfo($id)
    {
        $product = Product::where('id', '=', $id)->first();
        if ($product->brand_id != null) {
            $brandSel = Brands::where('id', '=', $product->brand_id)->first();
        }
        $brands = Brands::all();
        $brandNames = array();
        foreach ($brands as $key => $brandName) {
            $brandNames[$key]['name'][] = $brandName->name;
            if (isset($brandSel)) {
                if ($brandName->name == $brandSel->name) {
                    $brandNames[$key]['selected'][] = 1;
                    $product->brandSelected = $brandName->name;
                } else {
                    $brandNames[$key]['selected'][] = 0;
                }
            } else {
                $brandNames[$key]['selected'][] = 0;
                $product->brandSelected = 0;
            }
        }
        $product->allBrands = $brandNames;
        $categories = Categories::all();
        $categoryNames = array();
        $sortCat = array();
        foreach ($categories as $trueDepth) {
            switch($trueDepth->depth) {
                case 1:
                    $sortCat[$trueDepth->id] = array();
                    $sortCat[$trueDepth->id]['name'] = $trueDepth->name;
                    break;
                case 2:
                    $sortCat[$trueDepth->parent_id][$trueDepth->id] = array();
                    $sortCat[$trueDepth->parent_id][$trueDepth->id]['name'] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$trueDepth->name;
                    break;
                case 3:
                    $search = Categories::where('id', '=', $trueDepth->parent_id)->first();
                    $sortCat[$search->parent_id][$trueDepth->parent_id][$trueDepth->id] = array();
                    $sortCat[$search->parent_id][$trueDepth->parent_id][$trueDepth->id]['name'] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$trueDepth->name;
                    break;
            }
        }
        foreach ($sortCat as $key => $value)  {
            foreach ($value as $key_2 => $value_2) {
                if ($key_2 == 'name') {
                    $categoryNames[] = $value_2;
                } else {
                    foreach ($value_2 as $key_3 => $value_3) {
                        if ($key_3 == 'name') {
                            $categoryNames[] = $value_3;
                        } else {
                            foreach ($value_3 as $key_4 => $value_4) {
                                $categoryNames[] = $value_4;
                            }
                        }
                    }
                }
            }
        }
        $sCat = Categories::where('id', '=', $product->category_id)->first();
        $runWithSelected = array();
        foreach ($categoryNames as $key => $value) {
            $runWithSelected[$key]['name'][] = $value;
            if (strpos($value, $sCat->name) !== false) {
                $runWithSelected[$key]['selected'][] = 1;
                $product->categorySelected = $value;
            } else {
                $runWithSelected[$key]['selected'][] = 0;
            }
        }
        $product->allCategories = $runWithSelected;
        $sku = sku::where('product_id', '=', $product->id)->get();
        $product->sku = $sku;
        $deletableSku = 0;
        if (count($sku) > 1) {
            $deletableSku = 1;
        }
        $product->deletableSku = $deletableSku;
        $thisSticker = StickersConnection::where('product_id', '=', $id)->first();
        if ($thisSticker != null) {
            $StickerSel = Stickers::where('id', '=', $thisSticker->sticker_id)->first();
            $product->noStickers = 0;
        } else {
            $product->noStickers = 1;
        }
        $stickers = Stickers::all();
        $stickerNames = array();
        foreach ($stickers as $key => $stickerName) {
            $stickerNames[$key]['id'] = $stickerName->id;
            $stickerNames[$key]['text'] = $stickerName->text;
            if (isset($StickerSel)) {
                if ($stickerName->text == $StickerSel->text) {
                    $stickerNames[$key]['selected'] = 1;
                    $product->stickerSelected = $stickerName->id;
                } else {
                    $stickerNames[$key]['selected'] = 0;
                }
            } else {
                $stickerNames[$key]['selected'] = 0;
                $product->stickerSelected = 0;
            }
        }
        $product->stickers = $stickerNames;
        return json_encode($product);
    }

    public function updateSticker(Request $request)
    {
        StickersConnection::where('product_id', '=', $request->id)->delete();
        if ($request->sticker_id != 0) {
            $sticker = new StickersConnection();
            $sticker->product_id = $request->id;
            $sticker->sticker_id = $request->sticker_id;
            $sticker->save();
        }
    }

    public function updateSku(Request $request)
    {
        $sku = sku::where('id', '=', $request->sku)->first();
        $sku->sku = $request->sku_sku;
        $sku->sku_name = $request->sku_name;
        $sku->sku_code = $request->sku_code;
        $sku->old_price = $request->old_price;
        $sku->price = $request->price;
        $sku->save();
        $product = Product::where('id', '=', $sku->product_id)->first();
        $getAllSku = sku::where('product_id', '=', $sku->product_id)->get();
        $lowestPrice = array();
        foreach ($getAllSku as $price) {
            if(!empty($price->price)) {
                $lowestPrice[] = $price->price;
            }
        }
        if(!empty($lowestPrice)) {
            $lowestPrice = min($lowestPrice);
            $product->lowest_price = $lowestPrice;
            $product->save();
        }
    }

    public function addSku(Request $request)
    {
        $sku = new sku();
        $sku->product_id = $request->id;
        $sku->save();
    }

    public function deleteSku(Request $request)
    {
        $sku = sku::where('id', '=', $request->id)->first();
        sku::where('id', '=', $request->id)->delete();
        $product = Product::where('id', '=', $sku->product_id)->first();
        $getAllSku = sku::where('product_id', '=', $sku->product_id)->get();
        $lowestPrice = array();
        foreach ($getAllSku as $price) {
            if(!empty($price->price)) {
                $lowestPrice[] = $price->price;
            }
        }
        if(!empty($lowestPrice)) {
            $lowestPrice = min($lowestPrice);
            $product->lowest_price = $lowestPrice;
            $product->save();
        }
    }

    public function makeMainImg(Request $request)
    {
        $product = Product::where('id', '=', $request->product_id)->first();
        $getImage = ProductFiles::where('id', '=', $request->image)->first();
        $product->image = $getImage->path;
        $product->save();
        return response()->json([
            'success' => true,
            'image' => $getImage->path,
        ]);
    }

    public function deleteImg(Request $request)
    {
        $getImage = ProductFiles::where('id', '=', $request->image)->first();
        $product = Product::where('id', '=', $request->product_id)->first();
        $toSendImg = $product->image;
        if ($getImage->path == $product->image) {
            $anotherImgThen = ProductFiles::where('product_id', '=', $request->product_id)->where('id', '!=', $request->image)->first();
            if (!empty($anotherImgThen)) {
                $product->image = $anotherImgThen->path;
                $toSendImg = $anotherImgThen->path;
                $product->save();
            } else {
                $product->image = null;
                $toSendImg = null;
                $product->save();
            }
        }
        $getImage->delete();
        return response()->json([
            'success' => true,
            'image' => $toSendImg,
        ]);
    }

    public function deleteFile(Request $request)
    {
        $getFile = ProductFiles::where('id', '=', $request->file)->first();
        $getFile->delete();
        return response()->json([
            'success' => true,
        ]);
    }

    public function vueAddProductOption(Request $request)
    {
        $firstProperty = OptionValues::where('option_id', '=', $request->option_id)->first();
        if ($firstProperty) {
            $newAO = new additionalOptions();
            $newAO->product_id = $request->product_id;
            $newAO->option_value_id = $firstProperty->id;
            $newAO->save();
        } else {
            $newOptionValues = new OptionValues();
            $newOptionValues->option_id = $request->option_id;
            $newOptionValues->save();
            $findIt = OptionValues::where('option_id', '=', $request->option_id)->first();
            $newAO = new additionalOptions();
            $newAO->product_id = $request->product_id;
            $newAO->option_value_id = $findIt->id;
            $newAO->save();
        }
    }

    public function vueChangeProp(Request $request)
    {
        additionalOptions::where('product_id', '=', $request->product_id)->where('option_value_id', '=', $request->last_id)->delete();
        $newOpt = OptionValues::where('value', '=', $request->option_value)->where('option_id', '=', $request->option_id)->first();
        $addOpt = new additionalOptions();
        $addOpt->product_id = $request->product_id;
        $addOpt->option_value_id = $newOpt->id;
        $addOpt->save();
    }

    public function vueChangeMultipleProp(Request $request)
    {
        $optVal = array();
        $prepare = OptionValues::where('option_id', '=', $request->option_id)->get();
        foreach ($prepare as $option) {
            $optVal[] = $option->id;
        }
        if (!empty($request->option_value)) {
            additionalOptions::where('product_id', '=', $request->product_id)->whereIn('option_value_id', $optVal)->delete();
            foreach ($request->option_value as $option) {
                $newOpt = OptionValues::where('value', '=', $option)->where('option_id', '=', $request->option_id)->first();
                $addOpt = new additionalOptions();
                $addOpt->product_id = $request->product_id;
                $addOpt->option_value_id = $newOpt->id;
                $addOpt->save();
            }
        } else {
            $optValues = OptionValues::where('option_id', '=', $request->option_id)->get();
            foreach ($optValues as $optionVal) {
                additionalOptions::where('product_id', '=', $request->product_id)->where('option_value_id', '=', $optionVal->id)->delete();
            }
        }
    }

    public function vueChangeTextProp(Request $request)
    {
        $optVal = array();
        $prepare = OptionValues::where('option_id', '=', $request->option_id)->get();
        foreach ($prepare as $option) {
            $optVal[] = $option->id;
        }
        if (!empty($request->option_value)) {
            additionalOptions::where('product_id', '=', $request->product_id)->whereIn('option_value_id', $optVal)->delete();
            $existsOptionValue = OptionValues::where('option_id', '=', $request->option_id)->where('value', '=', $request->option_value)->first();
            if ($existsOptionValue) {
                $newAO = new additionalOptions();
                $newAO->product_id = $request->product_id;
                $newAO->option_value_id = $existsOptionValue->id;
                $newAO->save();
            } else {
                $newOptionValues = new OptionValues();
                $newOptionValues->option_id = $request->option_id;
                $newOptionValues->value = $request->option_value;
                $newOptionValues->url = $request->option_value;
                $newOptionValues->save();
                $findIt = OptionValues::where('option_id', '=', $request->option_id)->where('value', '=', $request->option_value)->first();
                OptionValues::where('option_id', '=', $request->option_id)->where('value', '=', null)->where('url', '=', null)->delete();
                $newAO = new additionalOptions();
                $newAO->product_id = $request->product_id;
                $newAO->option_value_id = $findIt->id;
                $newAO->save();
            }
        } else {
            $optValues = OptionValues::where('option_id', '=', $request->option_id)->get();
            foreach ($optValues as $optionVal) {
                additionalOptions::where('product_id', '=', $request->product_id)->where('option_value_id', '=', $optionVal->id)->delete();
            }
        }
    }

    public function getProductImages($id)
    {

        chdir('public');
        $img = glob("storage/".$id."/*.*");
        chdir('..');
        return json_encode($img);
    }

    public function getProductFiles($id)
    {
        chdir('public');
        $preFiles = glob("storage/".$id."/files/*.*");
        chdir('..');
        $files = array();
        foreach ($preFiles as $file) {
            $files[] = basename($file);
        }
        return json_encode($files);
    }

    public function vueProductsEdit($id)
    {
        $options = array();
        $multiple_options = array();
        $text_options = array();
        $product = Product::where('id', '=', $id)->firstOrfail();
        $existsOpt = Options::where('type', '=', 1)->get();
        $existsMultipleOpt = Options::where('type', '=', 2)->get();
        $existsTextOpt = Options::where('type', '=', 3)->get();
        $optionsThatIsset = Product::find($id)->additionalOptions()->get();
        $exsAddOpt = array();
        foreach ($optionsThatIsset as $key => $value) {
            $exsAddOpt[] = additionalOptions::find($value->id)->optionValues()->first();
        }
        $exsOpt = array();
        foreach ($exsAddOpt as $key => $value) {
            $exsOpt[] = Options::where('id', '=', $value->option_id)->first();
        }
        foreach ($existsOpt as $opt) {
            // Check if there at least one value
            $checkAnyValue = Options::find($opt->id)->optionValues()->first();
            if ($checkAnyValue) {
                $options[$opt->name]['name'] = $opt->name;
                $options[$opt->name]['id'] = $opt->id;
                $options[$opt->name]['status'] = 0;
                foreach($exsOpt as $ext) {
                    if ($ext->name == $opt->name) {
                        $options[$opt->name]['status'] = 1;
                    }
                }
                $findVal = Options::find($opt->id)->optionValues()->get();
                $options[$opt->name]['values'] = array();
                foreach ($findVal as $key => $value) {
                    $options[$opt->name]['values'][$value->id]['selected'] = 0;
                    foreach($exsAddOpt as $ext) {
                        if ($ext->value == $value->value) {
                            if ($ext->option_id == $value->option_id) {
                                $options[$opt->name]['values'][$value->id]['selected'] = 1;
                                $options[$opt->name]['optionSelected'] = $value->value;
                                $options[$opt->name]['optionOriginal'] = $value->id;
                            }
                        }
                    }
                    $options[$opt->name]['values'][$value->id]['name'] = $value->value;
                }
            }
        }
        foreach ($existsMultipleOpt as $opt) {
            // Check if there at least one value
            $checkAnyValue = Options::find($opt->id)->optionValues()->first();
            if ($checkAnyValue) {
                $multiple_options[$opt->name]['name'] = $opt->name;
                $multiple_options[$opt->name]['id'] = $opt->id;
                $multiple_options[$opt->name]['status'] = 0;
                foreach($exsOpt as $ext) {
                    if ($ext->name == $opt->name) {
                        $multiple_options[$opt->name]['status'] = 1;
                    }
                }
                $findVal = Options::find($opt->id)->optionValues()->get();
                $multiple_options[$opt->name]['values'] = array();
                foreach ($findVal as $key => $value) {
                    $multiple_options[$opt->name]['values'][$value->id]['checked'] = 0;
                    foreach($exsAddOpt as $ext) {
                        if ($ext->value == $value->value) {
                            if ($ext->option_id == $value->option_id) {
                                $multiple_options[$opt->name]['values'][$value->id]['checked'] = 1;
                                $multiple_options[$opt->name]['optionSelected'][] = $value->value;
                                $multiple_options[$opt->name]['optionOriginal'] = $value->id;
                            }
                        }
                    }
                    $multiple_options[$opt->name]['values'][$value->id]['name'] = $value->value;
                }
            }
        }
        foreach ($existsTextOpt as $opt) {
            $text_options[$opt->name]['name'] = $opt->name;
            $text_options[$opt->name]['id'] = $opt->id;
            $text_options[$opt->name]['status'] = 0;
            foreach($exsOpt as $ext) {
                if ($ext->name == $opt->name) {
                    $text_options[$opt->name]['status'] = 1;
                }
            }
            $findVal = Options::find($opt->id)->optionValues()->get();
            $text_options[$opt->name]['values'] = array();
            foreach ($findVal as $key => $value) {
                $text_options[$opt->name]['values'][$value->id]['checked'] = 0;
                foreach($exsAddOpt as $ext) {
                    if ($ext->value == $value->value) {
                        if ($ext->option_id == $value->option_id) {
                            $text_options[$opt->name]['values'][$value->id]['checked'] = 1;
                            $text_options[$opt->name]['optionSelected'][] = $value->value;
                            $text_options[$opt->name]['optionOriginal'] = $value->id;
                        }
                    }
                }
                $text_options[$opt->name]['values'][$value->id]['name'] = $value->value;
            }
        }
        return response()->json([
            'success' => true,
            'options' => $options,
            'multiple_options' => $multiple_options,
            'text_options' => $text_options,
        ]);
    }

    public function editProducts($id)
    {
        $product = Product::where('id', '=', $id)->firstOrfail();
        return view('dashboard.editProducts', compact(['product']));
    }

    public function editUser($id)
    {
        $user = User::where('id', '=', $id)->firstOrfail();
        if (Auth::user()->access <= 2) {
            return view('dashboard.editUser', compact(['user']));
        } else {
            if ($id == Auth::user()->id) {
                return view('dashboard.editUser', compact(['user']));
            } else {
                return redirect('/dashboard');
            }
        }
    }

    public function addProperty(AddPropertyRequest $request)
    {
        $option = new Options();
        $option->name = $request['name'];
        $option->url = $request['url'];
        $option->type = $request['type'];
        $option->save();
        return response()->json([
            'success' => true,
            'message' => 'Характеристика успешно добавлена',
        ]);
    }

    public function editOption(Request $request)
    {
        $option = Options::where('id', '=', $request->id)->firstOrfail();
        if ($request->name) {
            $nameExists = Options::where('name', '=', $request->name)->where('id', '!=', $request->id)->first();
            if ($nameExists) {
                return redirect()->back()->with('error', 'Такое название уже существует');
            }
            $option->name = $request->name;
        } else {
            return redirect()->back()->with('error', 'Нельзя ввести пустое имя');
        }
        if ($request->url) {
            $urlExists = Options::where('url', '=', $request->url)->where('id', '!=', $request->id)->first();
            if ($urlExists) {
                return redirect()->back()->with('error', 'Данный URL уже используется');
            }
            $option->url = $request->url;
        } else {
            return redirect()->back()->with('error', 'Нельзя ввести пустой URL');
        }
        if ($request->type) {
            switch ($request->type) {
                case 1:
                    $option->type = $request->type;
                    break;
                case 2:
                    $option->type = $request->type;
                    break;
                case 3:
                    $optionValues = OptionValues::where('option_id', '=', $request->id)->get();
                    foreach ($optionValues as $optionValue) {
                        $getAdditionalOptions = additionalOptions::where('option_value_id', '=', $optionValue->id)->delete();
                    }
                    $option->type = $request->type;
                    break;
                default:
                    return redirect()->back()->with('error', 'Вот не надо свои характеристики вставлять');
                    break;
            }
        } else {
            return redirect()->back()->with('error', 'Хорошая попытка, но нельзя удалить тип характеристики');
        }
        $option->h1 = $request->h1;
        $option->metaTitle = $request->metaTitle;
        $option->metaDesc = $request->metaDesc;
        $option->save();
        return redirect('/dashboard/properties/'.$request->url)->with('success', 'Характеристика "'.$request->name.'" успешно обновлена');
    }

    public function getProp($id)
    {
        $RequestedProperties = Options::find($id)->optionValues()->get();
        for ($i=0; $i<count($RequestedProperties); $i++) {
            $RequestedProperties[$i]->editButton = '<button class="edit-btn"><i class="fas fa-pen-square"></i></button>';
            $RequestedProperties[$i]->editButton2 = '<button class="edit-btn"><i class="fas fa-pen-square"></i></button>';
        }
        return json_encode($RequestedProperties);
    }

    public function deleteProp(Request $request)
    {
        $optionValues = OptionValues::whereIn('id', $request->property)->get();
        foreach ($optionValues as $option) {
            additionalOptions::where('option_value_id', '=', $option->id)->delete();
        }
        OptionValues::whereIn('id', $request->property)->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function vueDeleteProp(Request $request)
    {
        $optVal = OptionValues::where('value', '=', $request->option_val)->where('option_id', '=', $request->prop_id)->first();
        additionalOptions::where('product_id', '=', $request->product_id)->where('option_value_id', '=', $optVal->id)->delete();
        return response()->json([
            'success' => true
        ]);
    }

    public function vueMultipleDeleteProp(Request $request)
    {
        $optValues = OptionValues::where('option_id', '=', $request->prop_id)->get();
        foreach ($optValues as $optionVal) {
            additionalOptions::where('product_id', '=', $request->product_id)->where('option_value_id', '=', $optionVal->id)->delete();
        }
        return response()->json([
            'success' => true
        ]);
    }

    public function updateUser(Request $request)
    {
        $user = User::where('id', '=', $request->id)->firstOrFail();
        if ($request->name) {
            $user->name = $request->name;
        }
        if ($request->email) {
            $user->email = $request->email;
        }
        if ($request->password && $request->password_confirmation) {
            if ($request->password == $request->password_confirmation) {
                $user->password = password_hash($request->password, PASSWORD_BCRYPT);
            }
        }
        $user->save();
        return redirect()->back();
    }

    public function updateProperty(Request $request)
    {
        $property = OptionValues::where('id', '=', $request->id)->firstOrfail();
        if ($request->value) {
            $property->value = $request->value;
        }
        if ($request->url) {
            $property->url = $request->url;
        }
        $property->save();
        $option = Options::where('id', '=', $request->optionId)->first();
        return redirect('/dashboard/properties/'.$option->url);
    }

    public function editProperty($url)
    {
        $property = Options::where('url', '=', $url)->firstOrfail();
        return view('dashboard.property', compact(['property']));
    }

    public function showGroups()
    {
        $groups = GroupNames::all();
        return view('dashboard.groups', compact(['groups']));
    }

    public function editGroupInfo(Request $request)
    {
        $group = GroupNames::where('id', '=', $request->id)->first();
        $groupNameExists = GroupNames::where('name', '=', $request->name)->first();
        if (empty($groupNameExists->id) || $group->name == $request->name) {
            $group->name = $request->name;
            $group->save();
            return redirect('/dashboard/groups/edit/'.$request->id.'/'.$request->name)->with('success',  'Группа "'.$request->name.'" успешно обновлена');
        } else {
            return redirect('/dashboard/groups/edit/'.$group->id.'/'.$group->name)->with('error',  'Группа "'.$group->name.'" не может быть обновлена. Такое название уже используется!');
        }
    }

    public function addToGroup(Request $request)
    {
        $group = GroupNames::where('id', '=', $request->group_id)->first();
        $products = Product::whereIn('id', $request->products)->get();
        foreach ($products as $product) {
            $groupExists = Groups::where('group_names_id', '=', $request->group_id)->where('product_id', '=', $product->id)->first();
            if (empty($groupExists)) {
                $groupProducts = new Groups();
                $groupProducts->group_names_id = $group->id;
                $groupProducts->product_id = $product->id;
                $groupProducts->save();
            }
        }
    }

    public function deleteFromGroup(Request $request)
    {
        Groups::where('group_names_id', '=', $request->group_id)->whereIn('product_id', $request->products)->delete();
    }

    public function getAllGroups()
    {
        $groups = GroupNames::all();
        return json_encode($groups);
    }

    public function AddTag(Request $request)
    {
        $prepare = Tags::where('product_id', '=', $request->id)->get();
        foreach ($prepare as $delete) {
            $goDelete = 1;
            if (!empty($request->tags)) {
                foreach ($request->tags as $tag) {
                    if ($tag['text'] == $delete->name) {
                        $goDelete = 0;
                    }
                }
            }
            if ($goDelete == 1) {
                $isLast = Tags::where('name', '=', $delete->name)->get();
                $isLast = count($isLast);
                if($isLast > 1) {
                    Tags::where('product_id', '=', $request->id)->where('name', '=', $delete->name)->delete();
                } else {
                    $removeProductId = Tags::where('product_id', '=', $request->id)->where('name', '=', $delete->name)->first();
                    $removeProductId->product_id = null;
                    $removeProductId->save();
                }
            }
        }
        if (!empty($request->tags)) {
            foreach ($request->tags as $tag) {
                $check = Tags::where('name', '=', $tag['text'])->where('product_id', '=', $request->id)->first();
                if (empty($check)) {
                    $newTag = new Tags();
                    $newTag->name = $tag['text'];
                    $newTag->product_id = $request->id;
                    $newTag->save();
                }
            }
        }
    }
    public function getProductTags($id)
    {
        $prepareTags = Tags::where('product_id', '=', $id)->get();
        $tags = array();
        foreach ($prepareTags as $tag) {
            $tags[]['text'] = $tag->name;
        }
        return json_encode($tags);
    }

    public function autocompleteTags()
    {
        $prepareTags = Tags::distinct()->get(['name']);
        $tags = array();
        foreach ($prepareTags as $tag) {
            $tags[]['text'] = $tag->name;
        }
        return json_encode($tags);
    }

    public function getGroupData($id)
    {
        $groups = Groups::where('group_names_id', '=', $id)->get();
        $products = array();
        foreach ($groups as $group) {
            $products[] = $group->product_id;
        }
        $RequestedProducts = Product::whereIn('id', $products)->get();
        foreach ($RequestedProducts as $key => $value) {
            $search_sku = Product::find($RequestedProducts[$key]->id)->sku()->get();
            $Skus = array();
            foreach ($search_sku as $sku) {
                $Skus[] = $sku->sku;
            }
            $Skus = implode(", ", $Skus);
            $RequestedProducts[$key]->sku = $Skus;
        }
        return json_encode($RequestedProducts);
    }

    public function showTags()
    {
        return view('dashboard.tags');
    }

    public function getTags()
    {
        $tags = Tags::distinct()->get(['name']);
        $allTags = Tags::all();
        for ($i=0; $i<count($tags); $i++) {
            foreach ($allTags as $tag) {
                if ($tag->name == $tags[$i]->name) {
                    $tags[$i]->id = $tag->id;
                }
            }
            $tags[$i]->editButton = '<button class="edit-btn"><i class="fas fa-pen-square"></i></button>';
        }
        return json_encode($tags);
    }

    public function updateTag(Request $request)
    {
        $searchTag = Tags::where('id', '=', $request->id)->firstOrfail();
        $tags = Tags::where('name', '=', $searchTag->name)->get();
        $nameExists = Tags::where('name', '=', $request->name)->first();
        if (empty($nameExists)) {
            foreach ($tags as $tag) {
                $updateTag = Tags::where('id', '=', $tag->id)->first();
                $updateTag->name = $request->name;
                $updateTag->save();
            }
            return redirect()->back()->with('success', 'Тег "'.$request->name.'" успешно обновлен');
        } else {
            return redirect()->back()->with('error', 'Такой тег уже существует, попробуйте другое название.');
        }
    }

    public function deleteTags(Request $request)
    {
        $tagIds = Tags::whereIn('id', $request->tags)->get();
        foreach ($tagIds as $tag) {
            Tags::where('name', '=', $tag->name)->delete();
        }
        return response()->json([
            'success' => true
        ]);
    }

    public function addEmptyTag(Request $request)
    {
        $existsName = Tags::where('name', '=', $request->name)->first();
        if (empty($existsName)) {
            $newTag = new Tags();
            $newTag->name = $request->name;
            $newTag->save();
            return redirect()->back()->with('success', 'Тег "'.$request->name.'" успешно добавлен');
        } else {
            return redirect()->back()->with('error', 'Такой тег уже существует, попробуйте другое название.');
        }
    }

    public function addTab(Request $request)
    {
        $tab = new Tabs();
        $tab->product_id = $request->product_id;
        $tab->name = $request->name;
        $tab->body = $request->body;
        $checkPosition = Tabs::where('product_id', '=', $request->product_id)->get();
        $checkPosition = count($checkPosition);
        $tab->sort_position = $checkPosition + 1;
        $tab->save();
    }

    public function addCalcGroup(Request $request)
    {
        $newCalcGroup = new CalcGroups();
        $newCalcGroup->name = $request->name;
        $newCalcGroup->product_id = $request->product_id;
        $checkPosition = CalcGroups::where('product_id', '=', $request->product_id)->get();
        $checkPosition = count($checkPosition);
        $newCalcGroup->sort_position = $checkPosition + 1;
        $newCalcGroup->save();
    }

    public function addCalcOption(Request $request)
    {
        $newCalcOption = new CalcOptions();
        $newCalcOption->name = $request->name;
        $newCalcOption->code = $request->code;
        $newCalcOption->calc_group_id = $request->group_id;
        $newCalcOption->price = $request->price;
        $checkPosition = CalcOptions::where('calc_group_id', '=', $request->group_id)->get();
        $checkPosition = count($checkPosition);
        $newCalcOption->sort_position = $checkPosition + 1;
        $newCalcOption->save();
    }

    public function changeSortOptions(Request $request)
    {
        $thisGroup = $request->groups;
        $thisOptions = $request->options;
        foreach ($thisGroup as $key => $group) {
            $searchGroup = CalcGroups::where('id', '=', $group['id'])->first();
            $searchGroup->sort_position = $key + 1;
            $searchGroup->save();
        }
        foreach ($thisOptions as $key => $option) {
            $searchOption = CalcOptions::where('id', '=', $option['id'])->first();
            $searchOption->sort_position = $key + 1;
            $searchOption->save();
        }
    }

    public function changeTabSortOptions(Request $request)
    {
        $tabs = $request->tabs;
        foreach ($tabs as $key => $tab) {
            $searchTab = Tabs::where('id', '=', $tab['id'])->first();
            $searchTab->sort_position = $key + 1;
            $searchTab->save();
        }
    }

    public function getTabs($id)
    {
        $tabs = Tabs::orderBy('sort_position')->where('product_id', '=', $id)->get();
        return json_encode($tabs);
    }

    public function getCalcOptions($id)
    {
        $data = array();
        $calcGroups = CalcGroups::orderBy('sort_position')->where('product_id', '=', $id)->get();
        foreach ($calcGroups as $key => $value) {
            $calcGroups[$key]->newName = '';
            $calcGroups[$key]->newCode = '';
            $calcGroups[$key]->newPrice = '';
        }
        $data['calc_groups'] = $calcGroups;
        $CalcId = array();
        foreach ($data['calc_groups'] as $group) {
            $CalcId[] = $group->id;
        }
        $data['calc_options'] = CalcOptions::orderBy('sort_position')->whereIn('calc_group_id', $CalcId)->get();
        return json_encode($data);
    }

    public function deleteCalcOption(Request $request)
    {
        CalcOptions::where('id', '=', $request->id)->delete();
    }

    public function deleteTab(Request $request)
    {
        Tabs::where('id', '=', $request->id)->delete();
    }

    public function deleteCalcGroup(Request $request)
    {
        $calcGroups = CalcGroups::where('id', '=', $request->id)->get();
        foreach ($calcGroups as $group) {
            CalcOptions::where('calc_group_id', '=', $group->id)->delete();
        }
        CalcGroups::where('id', '=', $request->id)->delete();
    }

    public function updateProduct(Request $request)
    {
        $product = Product::where('id', '=', $request->id)->first();
        $urlExists = Product::where('url', '=', $request->url)->first();
        if (empty($urlExists) || $product->url == $request->url) {
            $product->name = $request->name;
            $product->url = $request->url;
            $product->in_stock = $request->in_stock;
            $product->production = $request->production;
            $product->delivery = $request->delivery;
            $product->short_description = $request->short_description;
            $product->description = $request->description;
            $product->metaTitle = $request->meta_title;
            $product->metaDescription = $request->meta_description;
            $checkCategory = Categories::all();
            foreach ($checkCategory as $category) {
                if (mb_strpos(mb_strtolower($request->category_selected), mb_strtolower($category->name)) !== false) {
                    $product->category_id = $category->id;
                }
            }
            $checkBrand = Brands::all();
            foreach ($checkBrand as $brand) {
                if (mb_strpos(mb_strtolower($request->brand_selected), mb_strtolower($brand->name)) !== false) {
                    $product->brand_id = $brand->id;
                }
            }
            $product->save();
        }
    }

    public function getUsers()
    {
        $users = User::all();
        foreach ($users as $key => $user) {
            switch ($user->access) {
                case 1:
                    $users[$key]->accessLevel = 'Разработчик';
                    break;
                case 2:
                    $users[$key]->accessLevel = 'UET Администратор';
                    break;
                case 3:
                    $users[$key]->accessLevel = 'Администратор';
                    break;
                case 4:
                    $users[$key]->accessLevel = 'Редактор';
                    break;
                case 5:
                    $users[$key]->accessLevel = 'Пользователь';
                    break;
            }
        }
        return json_encode($users);
    }
}
