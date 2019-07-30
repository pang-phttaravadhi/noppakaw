<?php
namespace App\LiffModules;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Home/Views','liffhome');
        $this->loadViewsFrom(__DIR__.'/Categoryliff/Views','cate');  
        $this->loadViewsFrom(__DIR__.'/History/Views','his'); 
        $this->loadViewsFrom(__DIR__.'/Paymentliff/Views','payy');  
        $this->loadViewsFrom(__DIR__.'/Paymentliff/Views','payyfrom');  



        
    }
}