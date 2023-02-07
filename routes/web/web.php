<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$redirects = \App\Redirects::all();
foreach ($redirects as $redirect) {
    if (strpos($redirect->from, '/*') !== false) {
        $truePath = rtrim($redirect->from, '*');
        if (strpos(('/' . Request::path() . '/'), $truePath) !== false) {
            Route::get('/{any}', 'AppController@redirectMore')->where('any', '.*');
        } else {
        }
    } else {
        if ('/' . strtolower(Request::path()) . '/' == strtolower($redirect->from)) {
            if ($redirect->from == '/') {
                Route::get('/', function () {
                    $redirect = \App\Redirects::where('from', '=', '/')->first();
                    return Redirect::to($redirect->to, $redirect->status_code);
                });
            } else {
                Route::get('/{any}', 'AppController@redirect')->where('any', '.*');
            }
        }
    }
}

Auth::routes();
Route::get('/sitemap.xml', 'AppController@sitemap')->name('show.sitemap');
Route::get('/uralenergotel.yml', 'AppController@yml')->name('show.yml');

// App Shop - ShopController
Route::get('/category/{any}', 'ShopController@showCategory')->where('any', '.*')->name('show.category');
Route::post('/changePerPage', 'ShopController@changePerPage');
Route::post('/changeSortMethod', 'ShopController@changeSortMethod');
Route::post('/changeInStock', 'ShopController@changeInStock');
Route::post('/changeView', 'ShopController@changeView');
Route::post('/applyPrice', 'ShopController@applyPrice');
Route::post('/refreshFilters', 'ShopController@refreshFilters');

// Search - SearchController
Route::get('/search', 'SearchController@search')->name('show.search');

// Product Page
Route::get('/getProductAccessories/{id}', 'VueProductController@getProductAccessories');
Route::get('/getProductCrossSelling/{id}', 'VueProductController@getProductCrossSelling');
Route::get('/getProductUpSelling/{id}', 'VueProductController@getProductUpSelling');
Route::get('/getCategories', 'VueProductController@getCategories');
Route::post('/addProductToProductConnection', 'VueProductController@addProductToProductConnection');
Route::post('/addGroupToProductConnection', 'VueProductController@addGroupToProductConnection');
Route::post('/addCategoryToProductConnection', 'VueProductController@addCategoryToProductConnection');
Route::post('/deleteConnection', 'VueProductController@deleteConnection');
Route::post('/deleteCategoryConnection', 'VueProductController@deleteCategoryConnection');
// Pages
Route::get('/', 'AppController@index');

// All Pages
Route::get('/about', 'PagesController@showAbout')->name('show.about');
Route::get('/td_uet', 'PagesController@showTDLanding')->name('show.tdLanding');
Route::get('/about/brands', 'PagesController@showBrands')->name('show.brands');
Route::get('/about/vacancies', 'PagesController@showVacancies')->name('show.vacancies');
Route::get('/about/vacancies/conditions', 'PagesController@showVacancyConditions')->name('show.vacancyConditions');
Route::get('/about/vacancies/{any}', 'PagesController@showVacancy')->name('show.vacancy');
Route::get('/brand/{any}', 'PagesController@showBrand')->where('any', '.*')->name('show.brand');
Route::get('/about/news', 'PagesController@showNews')->name('show.news');
Route::get('/about/news/{url}', 'PagesController@showNewsPage')->name('show.news.page');
Route::get('/about/deals', 'PagesController@showSpecials')->name('show.specials');
Route::get('/about/deals/{url}', 'PagesController@showDeal')->name('show.deal');
Route::get('/about/licenses', 'PagesController@showLicense')->name('show.license');
Route::get('/about/partners', 'PagesController@showPartners')->name('show.partners');
Route::get('/customers', 'PagesController@showCustomers')->name('show.customers');
Route::get('/customers/howtobuy', 'PagesController@showHowtobuy')->name('show.howtobuy');
Route::get('/delivery', 'PagesController@showDelivery')->name('show.delivery');
Route::get('/delivery/{url}', 'PagesController@showDeliveryCity')->name('show.delivery.city');
Route::get('/customers/howtopay', 'PagesController@showHowtopay')->name('show.howtopay');
Route::get('/customers/warranty', 'PagesController@showWarranty')->name('show.warranty');
Route::get('/customers/privacypolicy', 'PagesController@showPrivacyPolicy')->name('show.privacypolicy');
Route::get('/customers/agreement', 'PagesController@showAgreement')->name('show.agreement');
Route::get('/customers/faq', 'PagesController@showFaq')->name('show.faq');
Route::get('/catalog', 'PagesController@catalog')->name('show.catalog');
Route::get('/contacts', 'PagesController@showContacts')->name('show.contacts');
Route::get('/samovyvoz', 'PagesController@showPickup')->name('show.pickup');
Route::get('/shkafy-individualnoi-sborki', 'PagesController@showIndividualLockers')->name('show.individualLockers');
Route::get('/shkafy-individualnoi-sborki/{url}', 'PagesController@showIndividualLockersPage')->name('show.individualLockersPage');
Route::get('/about/supply', 'PagesController@showSupply')->name('show.supply');
Route::get('/containers', 'PagesController@showContainers')->name('show.containers');
Route::get('/individualBusiness', 'PagesController@showIndividualBusiness')->name('show.individualBusiness');

// Product Pages
if (
	strpos(Request::url(), 'cart') != true &&
	strpos(Request::url(), 'bookmark') != true &&
	strpos(Request::url(), 'profile') != true &&
	strpos(Request::url(), 'tracks') != true &&
	strpos(Request::url(), 'compare') != true
) {
	Route::get('/{product}', 'ShopController@showProduct')->name('show.product');
}

// CartController
Route::put('/api/cart/order', 'CartController@create');

// SkuController
Route::post('/api/skuCode', 'SkuController@find');

// ShopController
Route::put('/api/cart', 'ShopController@addToCart')->middleware('web');
Route::patch('/api/cart/{id}', 'ShopController@changeCartItem');
Route::delete('/api/cart/{id}', 'ShopController@deleteCartItem');
Route::get('/api/cart/{session}', 'ShopController@getCart');

// CompareController
Route::put('/api/compare', 'CompareController@create');
Route::get('/api/compare/{session}', 'CompareController@receive');

// BookmarkController
Route::put('/api/bookmark', 'BookmarkController@create');
Route::get('/api/bookmark/{session}', 'BookmarkController@receive');

// Shop
Route::get('/cart', 'ShopController@cart')->name('show.cart');
Route::get('/cart/success/{order}', 'ShopController@cartSuccess')->name('show.cart.success');
// Compare
Route::get('/compare', 'ShopController@showEmptyCompare');
Route::get('/compare/{any}', 'ShopController@showCompare')->where('any', '.*');
// Bookmark
Route::get('/bookmark', 'ShopController@showEmptyBookmark');
Route::get('/bookmark/{any}', 'ShopController@showBookmark')->where('any', '.*');
// Mail
Route::post('/deleteLaravelLogs', 'DashboardController@deleteLaravelLogs');

// Profile
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/{any}', 'ProfileController@index')->where('any', '.*');

// TrackController
Route::get('/tracks', 'TrackController@show');
