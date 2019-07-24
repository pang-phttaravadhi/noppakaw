<?php
Route::prefix('liff')->group(function() {
    Route::Get('/login','\App\BackofficeModules\Login\LoginController@index')->name('login');
    Route::Post('/login','\App\BackofficeModules\Login\LoginController@action');
    Route::Get('/logout','\App\BackofficeModules\Login\LoginController@logout');
    
    Route::group (['middleware'=> ['auth']], function ()
    {
        Route::Get('/','\App\BackofficeModules\Home\HomeController@index');
        Route::resource('product','\App\BackofficeModules\Product\ProductController');
        Route::resource('category','\App\BackofficeModules\Category\CategoryController');
        Route::resource('payment','\App\BackofficeModules\Payment\PaymentController');
        Route::Post('/upload','\App\BackofficeModules\Product\UploadController@index');
    });
});