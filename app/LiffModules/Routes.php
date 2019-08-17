<?php
Route::prefix('liff')->group(function() {
    Route::Get('/','\App\LiffModules\Home\HomeController@index');
    Route::Get('/categoryliff','\App\LiffModules\Categoryliff\CategoryliffController@index');
    Route::Get('/history','\App\LiffModules\History\HistoryController@index');
    Route::Get('/historyfrom','\App\LiffModules\History\HistoryController@historyfrom');
    Route::Get('/profile','\App\LiffModules\Profile\ProfileController@index');
    Route::Get('/profilefrom','\App\LiffModules\Profile\ProfileController@profilefrom');
    Route::Get('/paymentlifffrom','\App\LiffModules\Paymentliff\PaymentliffController@paymentlifffrom');
    Route::Get('/shoppingcartfrom','\App\LiffModules\shoppingcart\ShoppingcartController@shoppingcartfrom');
    Route::Get('/shoppingcartfromm','\App\LiffModules\Shoppingcart\ShoppingcartController@shoppingcartfromm');
    Route::Get('/product-detail/{pro_id}','\App\LiffModules\Categoryliff\CategoryliffController@detail');
    Route::Post('/login','\App\LiffModules\Customer\CustomerController@login');
    Route::Get('/shoppingcart','\App\LiffModules\Shoppingcart\ShoppingcartController@index');
    Route::POST('/shoppingcart/{pro_id}','\App\LiffModules\Shoppingcart\ShoppingcartController@add');
    Route::Get('/promotion','\App\LiffModules\Promotion\PromotionController@index');


    
    Route::resource('paymentliff','\App\LiffModules\Paymentliff\PaymentliffController');
    Route::resource('shoppingcart','\App\LiffModules\shoppingcart\shoppingcartController');  


    
   
});
/*
/shoppingcart/add1
www.noppakaw.test/liff/
www.noppakaw.test/liff/categoryliff
www.noppakaw.test/liff/history
www.noppakaw.test/liff/historyfrom
www.noppakaw.test/liff/profile
www.noppakaw.test/liff/profilefrom
www.noppakaw.test/liff/paymentlifffrom
www.noppakaw.test/liff/shoppingcart
www.noppakaw.test/liff/shoppingcartfrom
www.noppakaw.test/liff/shoppingcartfromm
www.noppakaw.test/liff/product-detail/1
www.noppakaw.test/liff/login
www.noppakaw.test/liff/shoppingcart
www.noppakaw.test/liff/shoppingcart/1
www.noppakaw.test/liff/promotion
www.noppakaw.test/liff/paymentliff*/