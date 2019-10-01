<?php
Route::prefix('liff')->group(function() {
    Route::Get('/','\App\LiffModules\Home\HomeController@index');
    Route::Get('/categoryliff','\App\LiffModules\Categoryliff\CategoryliffController@index');
    Route::Get('/history','\App\LiffModules\History\HistoryController@index');
    Route::Get('/historyfrom/{order_id}','\App\LiffModules\History\HistoryController@historyfrom');
    Route::Get('/profile','\App\LiffModules\Profile\ProfileController@index');
    Route::Get('/profilefrom/{cust_id}','\App\LiffModules\Profile\ProfileController@profilefrom');
    Route::Put('/profilefrom/{cust_id}','\App\LiffModules\Profile\ProfileController@update');
    Route::Get('/paymentlifffrom','\App\LiffModules\Paymentliff\PaymentliffController@paymentlifffrom');
    Route::Post('/paymentlifffrom/{order_id}','\App\LiffModules\Paymentliff\PaymentliffController@store');
    Route::Get('/shoppingcartfrom','\App\LiffModules\shoppingcart\ShoppingcartController@shoppingcartfrom');
    Route::Get('/shoppingcartfromm','\App\LiffModules\Shoppingcart\ShoppingcartController@shoppingcartfromm');
    Route::Get('/product-detail/{pro_id}','\App\LiffModules\Categoryliff\CategoryliffController@detail');
    Route::Get('/product-detail-line','\App\LiffModules\Categoryliff\CategoryliffController@detail_line');
    Route::Post('/login','\App\LiffModules\Customer\CustomerController@login');
    Route::Get('/shoppingcart','\App\LiffModules\Shoppingcart\ShoppingcartController@index');
    Route::POST('/shoppingcart/{pro_id}','\App\LiffModules\Shoppingcart\ShoppingcartController@add');
    Route::DELETE('/shoppingcart-delete/{pro_id}','\App\LiffModules\Shoppingcart\ShoppingcartController@delete');
    Route::GET('/shoppingcart-shipping/{cust_id}','\App\LiffModules\Shoppingcart\ShoppingcartController@shipping');
    Route::POST('/shoppingcart-shipping/{cust_id}','\App\LiffModules\Shoppingcart\ShoppingcartController@shipping_save');
    Route::GET('/shoppingcart-confirm','\App\LiffModules\Shoppingcart\ShoppingcartController@confirm');
    Route::POST('/shoppingcart-confirm','\App\LiffModules\Shoppingcart\ShoppingcartController@order_save');
    Route::GET('/thankyou','\App\LiffModules\Shoppingcart\ShoppingcartController@thankyou');

    Route::Get('/promotion','\App\LiffModules\Promotion\PromotionController@index');



    
    Route::resource('paymentliff','\App\LiffModules\Paymentliff\PaymentliffController');
    Route::resource('shoppingcart','\App\LiffModules\shoppingcart\shoppingcartController');  
    Route::resource('history','\App\LiffModules\History\HistoryController');  
    Route::resource('profile','\App\LiffModules\Profile\ProfileController');  


    
   
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