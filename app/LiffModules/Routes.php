<?php
Route::prefix('liff')->group(function() {
    Route::Get('/','\App\LiffModules\Home\HomeController@index');
    Route::Get('/categoryliff','\App\LiffModules\Categoryliff\CategoryliffController@index');
    Route::Get('/history','\App\LiffModules\History\HistoryController@index');
    Route::Get('/historyfrom','\App\LiffModules\History\HistoryController@historyfrom');
    Route::Get('/paymentliff','\App\LiffModules\Paymentliff\PaymentliffController@index');
    Route::Get('/profile','\App\LiffModules\Profile\ProfileController@index');
    Route::Get('/profilefrom','\App\LiffModules\Profile\ProfileController@profilefrom');
    Route::Get('/paymentlifffrom','\App\LiffModules\Paymentliff\PaymentliffController@paymentlifffrom');
    Route::Get('/shoppingcart','\App\LiffModules\Shoppingcart\ShoppingcartController@index');
    Route::Get('/shoppingcartfrom','\App\LiffModules\shoppingcart\ShoppingcartController@shoppingcartfrom');
    Route::Get('/shoppingcartfromm','\App\LiffModules\Shoppingcart\ShoppingcartController@shoppingcartfromm');
    Route::Get('/categorylifffrom1','\App\LiffModules\Categoryliff\CategoryliffController@categorylifffrom1');
    Route::Get('/categorylifffrom2','\App\LiffModules\Categoryliff\CategoryliffController@categorylifffrom2');
    Route::Get('/categorylifffrom3','\App\LiffModules\Categoryliff\CategoryliffController@categorylifffrom3');
    Route::Get('/product-detail/{pro_id}','\App\LiffModules\Categoryliff\CategoryliffController@detail');
    
    


    
   
});