<?php
Route::prefix('')->group(function() {
    Route::Get('/','\App\BackofficeModules\Home\HomeController@index');
    Route::Get('/product','\App\BackofficeModules\Product\ProductController@index');
    Route::Get('/product/productfrom','\App\BackofficeModules\Product\ProductController@productfrom');
    Route::Get('/payment','\App\BackofficeModules\Payment\PaymentController@payment');
    Route::Get('/payment/paymentfrom','\App\BackofficeModules\Payment\PaymentController@paymentfrom');
    Route::Get('/status','\App\BackofficeModules\Status\StatusController@status');
});