<?php
Route::prefix('api')->group(function() {
    Route::Get('/login','\App\BackofficeModules\Login\LoginController@index')->name('login');
    Route::Post('/login','\App\BackofficeModules\Login\LoginController@action');
    Route::Get('/logout','\App\BackofficeModules\Login\LoginController@logout');
   
    
    
});