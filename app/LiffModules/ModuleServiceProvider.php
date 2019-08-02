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
        $this->loadViewsFrom(__DIR__.'/History/Views','hisfrom');  
        $this->loadViewsFrom(__DIR__.'/Profile/Views','proo');  
        $this->loadViewsFrom(__DIR__.'/Profile/Views','proofrom'); 
        $this->loadViewsFrom(__DIR__.'/Shoppingcart/Views','shopp');
        $this->loadViewsFrom(__DIR__.'/Shoppingcart/Views','shopp'); 
        $this->loadViewsFrom(__DIR__.'/Shoppingcart/Views','shopp');





        
    }
}