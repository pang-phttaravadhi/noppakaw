<?php
Route::prefix('liff')->group(function() {
    Route::Get('/','\App\LiffModules\Home\HomeController@index');
    Route::Get('/categoryliff','\App\LiffModules\Categoryliff\CategoryliffController@index');
    Route::Get('/history','\App\LiffModules\History\HistoryController@index');
    Route::Get('/historyfrom','\App\LiffModules\History\HistoryController@historyfrom');
    Route::Get('/paymentliff','\App\LiffModules\Paymentliff\PaymentliffController@index');
    Route::Get('/profile','\App\LiffModules\Profile\ProfileController@index');
    Route::Get('/paymentlifffrom','\App\LiffModules\Paymentliff\PaymentliffController@paymentlifffrom');
    Route::Get('/shoppingcart','\App\LiffModules\Shoppingcart\ShoppingcartController@index');


    
   
});