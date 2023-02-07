<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// LockerController
Route::get('/lockers', 'LockerController@index');
Route::get('/lockers/{locker}', 'LockerController@show');
Route::patch('/lockers/{locker}', 'LockerController@update');
Route::put('/lockers', 'LockerController@create');
Route::delete('/lockers/{locker}', 'LockerController@delete');
Route::patch('/update/lockers/image', 'LockerController@image');

// LockerSliderController
Route::put('/lockerSliders', 'LockerSliderController@create');
Route::patch('/lockerSliders/{lockerSlider}', 'LockerSliderController@update');
Route::post('/sort/lockerSliders/', 'LockerSliderController@sort');
Route::delete('/lockerSliders/{lockerSlider}', 'LockerSliderController@delete');

// LockerOrderController
Route::put('/lockerOrders', 'LockerOrderController@create');
Route::patch('/lockerOrders', 'LockerOrderController@update');
Route::post('/sort/lockerOrders/', 'LockerOrderController@sort');
Route::delete('/lockerOrders/{lockerOrder}', 'LockerOrderController@delete');

// LockerTableController
Route::put('/lockerTables', 'LockerTableController@create');
Route::patch('/lockerTables/{lockerTable}', 'LockerTableController@update');
Route::delete('/lockerTables/{lockerTable}', 'LockerTableController@delete');
Route::post('/sort/lockerTables/', 'LockerTableController@sort');

// LockerImageController
Route::put('/LockerImages', 'LockerImageController@create');
Route::patch('/LockerImages/{lockerImage}', 'LockerImageController@update');
Route::delete('/LockerImages/{lockerImage}', 'LockerImageController@delete');

// CsvController
Route::post('/csv/prepare/categories/', 'CsvController@prepareCategories');
Route::post('/csv/check/categories/', 'CsvController@checkCategories');
Route::post('/csv/upload/category/', 'CsvController@uploadCategory');
Route::post('/csv/prepare/products/', 'CsvController@prepareProducts');
Route::post('/csv/check/products/', 'CsvController@checkProducts');
Route::post('/csv/upload/product/', 'CsvController@uploadProduct');
Route::post('/csv/prepare/modifications/', 'CsvController@prepareModifications');
Route::post('/csv/check/modifications/', 'CsvController@checkModifications');
Route::post('/csv/upload/modification/', 'CsvController@uploadModifications');
Route::post('/csv/upload/configurator/', 'CsvController@importCrmConfigurator');
Route::post('/csv/upload/emails/', 'CsvController@importEmails');

// CategoryController
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/list', 'CategoryController@selectList');

// ProductController
Route::get('/products', 'ProductController@index');
Route::post('/products/update', 'ProductController@crmData');


// OptionController
Route::get('/options/csv/list', 'OptionController@csvSelectList');

// ClientController
Route::get('/clients/token/{token}', 'ClientController@preRegisteredClient');
Route::put('/clients', 'ClientController@create');
Route::patch('/clients/{client}', 'ClientController@update');
Route::delete('/clients/{client}', 'ClientController@delete');

// DiscountLevelController
Route::get('/discountlevels', 'DiscountLevelController@index');

// AuthController
Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('auth/user', 'AuthController@client');

Route::group(['middleware' => 'jwt.auth'], function()
{
    Route::post('auth/logout', 'AuthController@logout');
});

Route::group(['middleware' => 'jwt.refresh'], function()
{
    Route::get('auth/refresh', 'AuthController@refresh');
});

// OrderController
Route::get('/user/{user}/orders', 'OrderController@orders');
Route::get('/invoices/{number}', 'OrderController@getInvoice');

// TrackController
Route::post('/tracks/update', 'TrackController@crmData');