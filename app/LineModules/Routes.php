<?php
Route::prefix('line')->group(function() {
    Route::match(array('GET', 'POST'),'/','\App\LineModules\Home\HomeController@index');
});