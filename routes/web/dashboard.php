<?php

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'restricted']], function () {
    Route::get('/', 'DashboardController@index');

    // Dashboard Products Pages - DashboardProductsController
    Route::get('/products', 'DashboardProductsController@showProducts')->name('show.products');
    Route::get('/category/{any}', 'DashboardProductsController@showCategory')->where('any', '.*')->name('show.dashboard.category');

    // Dashboard Brands - DashboardBrandsController
    Route::get('/brands', 'DashboardBrandsController@showBrands')->name('show.dashboard.brands');
    Route::get('/brands/{url}', 'DashboardBrandsController@showBrand')->name('show.dashboard.brand');

    // Dashboard Pages
    Route::get('/filemanager', 'DashboardController@filemanager');
    Route::get('/kibana', 'DashboardController@kibana');
    Route::get('/properties', 'DashboardController@properties');
    Route::get('/properties/{url}', 'DashboardController@editProperty');
    Route::get('/products/edit/{id}/{productName}', 'DashboardController@editProducts');
    Route::get('/tags', 'DashboardController@showTags')->name('show.tags');
    Route::get('/groups', 'DashboardController@showGroups')->name('show.groups');
    Route::get('/groups/edit/{id}/{groupName}', 'DashboardController@editGroup')->name('edit.groups');
    Route::get('/git', 'DashboardController@git');
    Route::get('/users', 'DashboardController@users');
    Route::get('/users/{id}', 'DashboardController@editUser')->name('edit.user');
    Route::get('/system', 'DashboardController@system');
    Route::get('/database', 'DashboardController@database');

    // Dashboard Modules
    Route::group(['prefix' => 'modules'], function () {
        Route::get('/', 'ModuleController@showAll')->name('show.modules');
        Route::get('/menu', 'ModuleController@showMenu')->name('show.menu');
        Route::get('/slider', 'ModuleController@showSlider')->name('show.slider');
        Route::get('/contacts', 'ModuleController@showContacts')->name('show.dashboardContacts');
        Route::get('/seo', 'ModuleController@showSeo')->name('show.dashboard.seo');
        Route::get('/partners', 'ModuleController@showPartners')->name('show.dashboardPartners');
        Route::get('/contacts', 'ModuleController@showContacts')->name('show.dashboardContacts');
        Route::get('/stickers', 'ModuleController@showStickers')->name('show.dashboardStickers');
        Route::get('/specials', 'ModuleController@showSpecials')->name('show.dashboardSpecials');
        Route::get('/specials/{url}', 'ModuleController@editSpecial')->name('show.dashboardEditSpecial');
        Route::get('/homeBrands', 'ModuleController@homeBrands')->name('show.dashboard.homeBrands');
        Route::get('/redirect', 'ModuleController@showRedirect')->name('show.dashboard.redirect');
        Route::get('/robots', 'ModuleController@showRobots')->name('show.dashboard.robots');
        Route::get('/metrics', 'ModuleController@showMetrics')->name('show.dashboard.metrics');
        Route::get('/delivery', 'ModuleController@showDelivery')->name('show.dashboard.delivery');
        // News
        Route::get('/news', 'ModuleController@showNews')->name('show.dashboard.news');
        Route::get('/news/{url}', 'ModuleController@editNews');
        // Lockers
        Route::get('/lockers', 'DashboardLockerController@index')->name('index.locker');
        Route::get('/lockers/{locker}', 'DashboardLockerController@show')->name('show.locker');
        // Brands Tags
        Route::get('/brandsTags', 'ModuleController@showBrandsTags')->name('show.dashboard.brandsTags');
        Route::post('/brandsTags/addTag', 'ModuleController@addBrandsTag');
        Route::post('/brandsTags/addIndustry', 'ModuleController@addBrandsIndustry');
        // FAQ
        Route::get('/faq', 'ModuleController@showFaq')->name('show.dashboard.faq');
        // WYSIWYG
        Route::get('/wysiwyg', 'ModuleController@showWysiwyg')->name('show.dashboard.wysiwyg');
        // Supplies
        Route::get('/supply', 'ModuleController@showSupply')->name('show.dashboard.supply');
    });
});

// Dashboard Products Pages - DashboardProductsController
Route::get('/getProducts', 'DashboardProductsController@getProducts');
Route::post('/addCategory', 'DashboardProductsController@addCategory');
Route::post('/updateCategoriesDescription', 'DashboardProductsController@updateCategoriesDescription');
Route::get('/getCategory', 'DashboardProductsController@getCategory');
Route::post('/updateCategoryImage', 'DashboardProductsController@updateCategoryImage');
Route::post('/updateCategory', 'DashboardProductsController@updateCategory');
Route::post('/deleteCategory', 'DashboardProductsController@deleteCategory');
Route::get('/getFiltersForCategory', 'DashboardProductsController@getFiltersForCategory');
Route::post('/changeSortCategories', 'DashboardProductsController@changeSortCategories');
Route::post('/changeFilterOption', 'DashboardProductsController@changeFilterOption');
Route::post('/changeSortFilterOptions', 'DashboardProductsController@changeSortFilterOptions');
Route::post('/changeCategoryFilter', 'DashboardProductsController@changeCategoryFilter');

// Dashboard Brands - DashboardBrandsController
Route::get('/getBrands', 'DashboardBrandsController@getBrands');
Route::post('/addBrand', 'DashboardBrandsController@addBrand');
Route::post('/updateBrand', 'DashboardBrandsController@updateBrand');
Route::post('/updateBrandImage', 'DashboardBrandsController@updateBrandImage');
Route::post('/deleteBrand', 'DashboardBrandsController@deleteBrand');
Route::post('/changeSortBrands', 'DashboardBrandsController@changeSortBrands');

// Dashboard Table - DashboardTableController
Route::get('/getTableData', 'DashboardTableController@getTableData');
Route::get('/getData', 'DashboardTableController@getData');
Route::get('/searchTableProducts', 'DashboardTableController@searchTableProducts');
Route::post('/deleteProducts', 'DashboardTableController@deleteProducts');
Route::post('/changeSortProducts', 'DashboardTableController@changeSortProducts');
Route::post('/changeSortBrandProducts', 'DashboardTableController@changeSortBrandProducts');

Route::get('/getDataOld', 'DashboardController@getDataOld');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/getLoopAllCategories', 'Controller@getLoopAllCategories');
Route::get('/checkUpdate', 'DashboardController@checkUpdate');
Route::get('/uploadProductType1', 'csvController@uploadProductType1');
Route::get('/uploadProductType2', 'csvController@uploadProductType2');
Route::get('/uploadCategory', 'csvController@uploadCategory');
Route::post('/sysCommands', 'DashboardController@sysCommands');
Route::post('/csvCategoriesUpload', 'csvController@csvCategoriesUpload');
Route::post('/csvProductsUpload', 'csvController@csvProductsUpload');
Route::post('/addProductImage', 'DashboardController@addProductImage');
Route::post('/addProductFile', 'DashboardController@addProductFile');
Route::get('/getAllFiles/{id}', 'DashboardController@getAllFiles');
Route::get('/getRedirectsData', 'ModuleController@getRedirectsData');
Route::get('/getRedirects', 'ModuleController@getRedirects');
Route::get('/searchRedirects', 'ModuleController@searchRedirects');
Route::post('/updateRedirects', 'ModuleController@updateRedirects');
Route::post('/deleteRedirect', 'ModuleController@deleteRedirect');
Route::post('/deleteRedirects', 'ModuleController@deleteRedirects');
Route::post('/addRedirect', 'ModuleController@addRedirect');
Route::post('/deleteUser', 'DashboardController@deleteUser');
Route::post('/terminal', 'DashboardController@terminal');
Route::post('/toUpdate', 'DashboardController@toUpdate');
Route::post('/gitUpdate', 'DashboardController@gitUpdate');
Route::post('/createDump', 'DashboardController@createDump');
Route::post('/restoreDatabase', 'DashboardController@restoreDatabase');
Route::post('/restoreIncrementalDatabase', 'DashboardController@restoreIncrementalDatabase');
Route::post('/deleteDatabase', 'DashboardController@deleteDatabase');
Route::post('/gitRevert', 'DashboardController@gitRevert');
Route::post('/changeHomeBrands', 'ModuleController@changeHomeBrands');
Route::post('/revertToCommit', 'DashboardController@revertToCommit');
Route::post('/gitClear', 'DashboardController@gitClear');
Route::post('/cacheClear', 'DashboardController@cacheClear');
Route::post('/uploadProducts', 'csvController@uploadProducts');
Route::post('/uploadCalculator', 'csvController@uploadCalculator');
Route::get('/checkUploaded', 'csvController@checkUploaded');
Route::get('/checkUploadedCalculator', 'csvController@checkUploadedCalculator');
Route::post('/deleteTab ', 'DashboardController@deleteTab');
Route::get('/getGroupData/{id}', 'DashboardController@getGroupData');
Route::get('/getAllGroups', 'DashboardController@getAllGroups');
Route::get('/getDataCategory/{id}', 'DashboardController@getDataCategory');
Route::get('/getProperties', 'DashboardController@getProperties');
Route::get('/getUsers', 'DashboardController@getUsers');
Route::get('/getUsers', 'DashboardController@getUsers');
Route::post('/addProperties', 'DashboardController@addProperties');
Route::post('/addProperty', 'DashboardController@addProperty');
Route::post('/deleteProperty', 'DashboardController@deleteProperty');
Route::post('/addProp', 'DashboardController@addProp');
Route::get('/getProp/{id}', 'DashboardController@getProp');
Route::get('/getMetaStaticPages', 'DashboardController@getMetaStaticPages');
Route::post('/updatePagesMeta', 'DashboardController@updatePagesMeta');
Route::post('/editOption', 'DashboardController@editOption');
Route::post('/updateProperty', 'DashboardController@updateProperty');
Route::post('/updateProduct', 'DashboardController@updateProduct');
Route::post('/deleteProp', 'DashboardController@deleteProp');
Route::post('/editProp', 'DashboardController@editProp');
Route::get('/vueProductsEdit/{id}', 'DashboardController@vueProductsEdit');
Route::post('/vueDeleteProp', 'DashboardController@vueDeleteProp');
Route::post('/vueChangeProp', 'DashboardController@vueChangeProp');
Route::post('/vueChangeTextProp', 'DashboardController@vueChangeTextProp');
Route::post('/vueAddProductOption', 'DashboardController@vueAddProductOption');
Route::post('/uploadImg', 'UploadController@uploadImg');
Route::post('/uploadFile', 'UploadController@uploadFile');
Route::get('/getProductImages/{id}', 'DashboardController@getProductImages');
Route::get('/getProductFiles/{id}', 'DashboardController@getProductFiles');
Route::post('/deleteImg', 'DashboardController@deleteImg');
Route::post('/deleteFile', 'DashboardController@deleteFile');
Route::post('/makeMainImg', 'DashboardController@makeMainImg');
Route::get('/getProductInfo/{id}', 'DashboardController@getProductInfo');
Route::get('/getProductTags/{id}', 'DashboardController@getProductTags');
Route::get('/getTags', 'DashboardController@getTags');
Route::get('/autocompleteTags', 'DashboardController@autocompleteTags');
Route::post('/updateSku', 'DashboardController@updateSku');
Route::post('/updateUser', 'DashboardController@updateUser');
Route::post('/deleteSku', 'DashboardController@deleteSku');
Route::post('/addSku', 'DashboardController@addSku');
Route::post('/deleteSubCategory', 'DashboardController@deleteSubCategory');
Route::post('/deleteMaxSubCategory', 'DashboardController@deleteMaxSubCategory');
Route::post('/addUserImg', 'UploadController@addUserImg');
Route::post('/addLockerImg', 'UploadController@addLockerImg');
Route::post('/addSpecialImg', 'UploadController@addSpecialImg');
Route::post('/enableLocker', 'ModuleController@enableLocker');
Route::post('/updatePatterns', 'DashboardController@updatePatterns');
Route::post('/addGroup', 'DashboardController@addGroup');
Route::post('/deleteGroup', 'DashboardController@deleteGroup');
Route::post('/addToGroup', 'DashboardController@addToGroup');
Route::post('/deleteFromGroup', 'DashboardController@deleteFromGroup');
Route::post('/editGroupInfo', 'DashboardController@editGroupInfo');
Route::post('/AddTag', 'DashboardController@AddTag');
Route::post('/addEmptyTag', 'DashboardController@addEmptyTag');
Route::post('/updateTag', 'DashboardController@updateTag');
Route::post('/deleteTags', 'DashboardController@deleteTags');
Route::post('/addCalcGroup', 'DashboardController@addCalcGroup');
Route::post('/addCalcOption', 'DashboardController@addCalcOption');
Route::post('/addTab', 'DashboardController@addTab');
Route::post('/addCalcOption', 'DashboardController@addCalcOption');
Route::post('/addLockerOrder', 'ModuleController@addLockerOrder');
Route::post('/addLockerTable', 'ModuleController@addLockerTable');
Route::post('/changeSortOptions', 'DashboardController@changeSortOptions');
Route::post('/changeSortLockersOptions', 'ModuleController@changeSortLockersOptions');
Route::post('/changeTabSortOptions', 'DashboardController@changeTabSortOptions');
Route::post('/deleteCalcOption', 'DashboardController@deleteCalcOption');
Route::post('/deleteCalcGroup', 'DashboardController@deleteCalcGroup');
Route::post('/deleteLocker', 'ModuleController@deleteLocker');
Route::post('/deleteSpecial', 'ModuleController@deleteSpecial');
Route::post('/deleteLockerOrder', 'ModuleController@deleteLockerOrder');
Route::post('/deleteLockerTable', 'ModuleController@deleteLockerTable');
Route::post('/updateLockerAltBrandImg', 'ModuleController@updateLockerAltBrandImg');
Route::get('/getCalcOptions/{id}', 'DashboardController@getCalcOptions');
Route::get('/getTabs/{id}', 'DashboardController@getTabs');
Route::post('/addCategoryImg', 'UploadController@addCategoryImg');
Route::get('/getFilterProducts/{id}', 'AppController@getFilterProducts');
Route::get('/getCategories/{id}', 'AppController@getCategories');
Route::get('/getFilters/{id}', 'AppController@getFilters');
Route::post('/filterAll', 'AppController@filterAll');
Route::post('/vueChangeMultipleProp', 'DashboardController@vueChangeMultipleProp');
Route::post('/vueMultipleDeleteProp', 'DashboardController@vueMultipleDeleteProp');
Route::post('/updateSticker', 'DashboardController@updateSticker');

// Dashboard modules
Route::get('/getHomePageSliders', 'ModuleController@getHomePageSliders');
Route::post('/changeSortHomePageSliders', 'ModuleController@changeSortHomePageSliders');
Route::post('/addHomePageSlider', 'ModuleController@addHomePageSlider');
Route::post('/updateHomePageSlider', 'ModuleController@updateHomePageSlider');
Route::post('/deleteHomePageSlider', 'ModuleController@deleteHomePageSlider');
Route::get('/getPagesSEO', 'ModuleController@getPagesSEO');
Route::get('/getRobots', 'ModuleController@getRobots');
Route::get('/getMetrics', 'ModuleController@getMetrics');
Route::post('/updateMetrics', 'ModuleController@updateMetrics');
Route::post('/updateRobots', 'ModuleController@updateRobots');
Route::get('/getHomePageBrands', 'ModuleController@getHomePageBrands');
Route::post('/updatePartner', 'ModuleController@updatePartner');
Route::get('/getSpecialsData/{id}', 'ModuleController@getSpecialsData');
Route::get('/getSpecialsProducts/{id}', 'ModuleController@getSpecialsProducts');
Route::post('/updateSpecialSticker', 'ModuleController@updateSpecialSticker');
Route::post('/enableSpecial', 'ModuleController@enableSpecial');
Route::get('/getProductsForSpecials', 'ModuleController@getProductsForSpecials');
Route::get('/getGroupsForSpecials', 'ModuleController@getGroupsForSpecials');
Route::post('/addProductToSpecialConnection', 'ModuleController@addProductToSpecialConnection');
Route::post('/addGroupToSpecialConnection', 'ModuleController@addGroupToSpecialConnection');
Route::post('/deleteSpecialConnection', 'ModuleController@deleteSpecialConnection');
Route::post('/deletePartner', 'ModuleController@deletePartner');
Route::post('/addPartner', 'ModuleController@addPartner');
Route::post('/addSpecial', 'ModuleController@addSpecial');
Route::post('/addLocker', 'ModuleController@addLocker');
Route::post('/updateLocker', 'ModuleController@updateLocker');
Route::post('/updateSpecial', 'ModuleController@updateSpecial');
Route::get('/getLockersOptions/{id}', 'ModuleController@getLockersOptions');
Route::post('/addLockerSlider', 'ModuleController@addLockerSlider');
Route::post('/updateSlider', 'ModuleController@updateSlider');
Route::post('/deleteSlider', 'ModuleController@deleteSlider');
Route::post('/uploadLockerPreviewImgs', 'ModuleController@uploadLockerPreviewImgs');
Route::post('/uploadLockerBrandsImgs', 'ModuleController@uploadLockerBrandsImgs');
Route::get('/getLockerPreviewImages/{id}', 'ModuleController@getLockerPreviewImages');
Route::get('/getLockerBrandImages/{id}', 'ModuleController@getLockerBrandImages');
Route::post('/deleteLockerPreviewImg', 'ModuleController@deleteLockerPreviewImg');
Route::post('/deleteLockerBrandImg', 'ModuleController@deleteLockerBrandImg');
Route::post('/addSticker', 'ModuleController@addSticker');
Route::post('/editSticker', 'ModuleController@editSticker');
Route::post('/deleteSticker', 'ModuleController@deleteSticker');

// Module --> Delivery
Route::post('/addDelivery', 'ModuleController@addDelivery');
Route::get('/getDeliveryData', 'ModuleController@getDeliveryData');
Route::post('/updateCity', 'ModuleController@updateCity');
Route::post('/deleteCity', 'ModuleController@deleteCity');
Route::post('/uploadDeliveryDB', 'csvController@uploadDeliveryDB');

// Module --> News
Route::post('/addNews', 'ModuleController@addNews');
Route::post('/updateNews', 'ModuleController@updateNews');
Route::post('/deleteNews', 'ModuleController@deleteNews');
Route::post('/uploadNewsPreviewImgs', 'ModuleController@uploadNewsPreviewImgs');
Route::get('/getNewsPreviewImages/{id}', 'ModuleController@getNewsPreviewImages');
Route::post('/deleteNewsPreviewImg', 'ModuleController@deleteNewsPreviewImg');
Route::post('/addNewsImg', 'UploadController@addNewsImg');
Route::post('/enableNews', 'ModuleController@enableNews');

// Menu vue
Route::get('/getMenuLinks', 'ModuleController@getMenuLinks');
Route::post('/addMenu', 'ModuleController@addMenu');
Route::post('/addSubMenu', 'ModuleController@addSubMenu');
Route::post('/deleteMenu', 'ModuleController@deleteMenu');
Route::post('/deleteSubMenu', 'ModuleController@deleteSubMenu');
Route::post('/changeSortMenu', 'ModuleController@changeSortMenu');
// Brands tags vue
Route::get('/getBrandsTags', 'ModuleController@getBrandsTags');
Route::get('/getBrandsIndustries', 'ModuleController@getBrandsIndustries');
Route::get('/getConnectedBrandsTags', 'ModuleController@getConnectedBrandsTags');
Route::get('/getConnectedBrandsIndustries', 'ModuleController@getConnectedBrandsIndustries');
Route::post('/addBrandsTag', 'ModuleController@addBrandsTag');
Route::post('/addBrandsIndustry', 'ModuleController@addBrandsIndustry');
Route::post('/deleteBrandsTag', 'ModuleController@deleteBrandsTag');
Route::post('/deleteBrandsIndustry', 'ModuleController@deleteBrandsIndustry');
Route::post('/changeBrandsTagsSort', 'ModuleController@changeBrandsTagsSort');
Route::post('/changeBrandsIndustriesSort', 'ModuleController@changeBrandsIndustriesSort');
Route::post('/updateBrandsTag', 'ModuleController@updateBrandsTag');
// FAQ vue
Route::get('/getfaqcategories', 'ModuleController@getFaqCategories');
Route::get('/getfaqquestions', 'ModuleController@getFaqQuestions');
Route::post('/changefaqcategoriessort', 'ModuleController@changeFaqCategoriesSort');
Route::post('/changefaqsort', 'ModuleController@changeFaqSort');
Route::post('/updatequestion', 'ModuleController@updateQuestion');
Route::post('/deletequestion', 'ModuleController@deleteQuestion');
Route::post('/addquestion', 'ModuleController@addQuestion');
Route::post('/addcategory', 'ModuleController@addCategory');
Route::post('/deletecategory', 'ModuleController@deleteCategory');
// Contacts
Route::post('/editContacts', 'ModuleController@editContacts');
// WYSIWYG
Route::get('/getProductDescription', 'ModuleController@getProductDescription');
Route::post('/saveProductDescription', 'ModuleController@saveProductDescription');
// Supply
Route::get('/supply-customers', 'ModuleController@getCustomers');
Route::post('/customer-change-active/{customer}', 'ModuleController@customerChangeActive');
Route::post('/customers-change-sort', 'ModuleController@customersChangeSort');
Route::post('/customer-delete/{customer}', 'ModuleController@customerDelete');
Route::post('/uploadCustomerImage', 'ModuleController@uploadCustomerImage');
Route::post('/customer-create', 'ModuleController@createCustomer');
Route::post('/customer-save-name/{customer}', 'ModuleController@customerSaveName');

Route::group(['prefix' => 'git', 'middleware' => ['auth', 'restricted']], function () {
    Route::post('/branchCheckout', 'GitController@branchCheckout');
});
