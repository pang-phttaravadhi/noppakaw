<?php
Route::prefix('')->group(function() {
    Route::Get('/','\App\BackofficeModules\Home\HomeController@index');
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
});