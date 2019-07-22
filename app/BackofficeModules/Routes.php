<?php
Route::prefix('')->group(function() {
    Route::Get('/login','\App\BackofficeModules\Login\LoginController@index');
    Route::Post('/login','\App\BackofficeModules\Login\LoginController@action');
    Route::Get('/logout','\App\BackofficeModules\Login\LoginController@logout');
    Route::Get('/','\App\BackofficeModules\Home\HomeController@index');
    Route::resource('product','\App\BackofficeModules\Product\ProductController');
    Route::Get('/product','\App\BackofficeModules\Product\ProductController@index');
    Route::Get('/product/create','\App\BackofficeModules\Product\ProductController@create');
    Route::Get('/product/{id}','\App\BackofficeModules\Product\ProductController@action_edit');
    Route::Post('/product/delete/{id}','\App\BackofficeModules\Product\ProductController@destory');
    Route::Post('/product','\App\BackofficeModules\Product\ProductController@store');
    Route::POST('/product/{id}','\App\BackofficeModules\Product\ProductController@update');
    Route::Get('/category','\App\BackofficeModules\Category\CategoryController@category');
    Route::POST('/category/{id}','\App\BackofficeModules\Category\CategoryController@update');
    Route::Post('/category','\App\BackofficeModules\Category\CategoryController@store');
    Route::Post('/category/delete/{id}','\App\BackofficeModules\Category\CategoryController@destory');
    Route::Get('/category/{id}','\App\BackofficeModules\Category\CategoryController@action_edit');
    Route::Get('/category/create','\App\BackofficeModules\Category\CategoryController@create');
    Route::resource('category','\App\BackofficeModules\Category\CategoryController');
    



    /*
    Route::Get('/product','\App\BackofficeModules\Product\ProductController@index');
    Route::Get('/product/create','\App\BackofficeModules\Product\ProductController@action_create');
    Route::Get('/product/{id}','\App\BackofficeModules\Product\ProductController@action_edit');
    Route::Get('/product/delete/{id}','\App\BackofficeModules\Product\ProductController@action_delete');
    Route::Post('/product','\App\BackofficeModules\Product\ProductController@action_insert');
    Route::POST('/product/{id}','\App\BackofficeModules\Product\ProductController@action_update');
    Route::Get('/category/categoryfrom','\App\BackofficeModules\Category\CategoryController@categoryfrom');
    Route::Get('/payment','\App\BackofficeModules\Payment\PaymentController@payment');
    Route::Get('/payment/paymentfrom','\App\BackofficeModules\Payment\PaymentController@paymentfrom');
    Route::Get('/customer','\App\BackofficeModules\Customer\CustomerController@customer');
    Route::Get('/login','\App\BackofficeModules\Login\LoginController@index');
    Route::Get('/category','\App\BackofficeModules\Category\CategoryController@category');
    Route::Post('/login','\App\BackofficeModules\Login\LoginController@action');
    Route::Get('/logout','\App\BackofficeModules\Login\LoginController@logout');
    */
});