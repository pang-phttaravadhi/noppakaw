<?php
Route::prefix('')->group(function() {
    Route::Get('/login','\App\BackofficeModules\Login\LoginController@index')->name('login');
    Route::Post('/login','\App\BackofficeModules\Login\LoginController@action');
    Route::Get('/logout','\App\BackofficeModules\Login\LoginController@logout');
    
    Route::group (['middleware'=> ['auth']], function ()
    {
        Route::Post('/upload','\App\BackofficeModules\Product\UploadController@index');
        Route::Get('/','\App\BackofficeModules\Home\HomeController@index');
        Route::Get('/paymentnotification','\App\BackofficeModules\Paymentnotification\PaymentnotificationController@index');
        Route::Get('/paymentnotificationfrom','\App\BackofficeModules\Paymentnotification\PaymentnotificationController@paymentnotificationfrom');
        Route::resource('/orders','\App\BackofficeModules\Orders\OrdersController');
        Route::resource('product','\App\BackofficeModules\Product\ProductController');
        Route::resource('category','\App\BackofficeModules\Category\CategoryController');
        Route::Get('/ordersfrom/{order_id}','\App\BackofficeModules\Orders\OrdersController@paymentfrom');
    });
});