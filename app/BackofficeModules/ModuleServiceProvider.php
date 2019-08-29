<?php
namespace App\BackofficeModules;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Home/Views','home'); 
        $this->loadViewsFrom(__DIR__.'/Product/Views','pro');
        $this->loadViewsFrom(__DIR__.'/Product/Views','profrom');
        $this->loadViewsFrom(__DIR__.'/Category/Views','categoryfrom');  
        $this->loadViewsFrom(__DIR__.'/Orders/Views','pay'); 
        $this->loadViewsFrom(__DIR__.'/Product/Views','profrom');   
        $this->loadViewsFrom(__DIR__.'/Customer/Views','cus');     
        $this->loadViewsFrom(__DIR__.'/Login/views','log'); 
        $this->loadViewsFrom(__DIR__.'/Category/Views','cat');
        // $this->loadViewsFrom(__DIR__.'/Paymentnotification/Views','payy');
        // $this->loadViewsFrom(__DIR__.'/Paymentnotification/Views','payyfrom');
    }
}

