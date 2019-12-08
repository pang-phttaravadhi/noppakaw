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
        $this->loadViewsFrom(__DIR__.'/Bank/Views','bank');     
        $this->loadViewsFrom(__DIR__.'/Bank/Views','bankfrom');     
        $this->loadViewsFrom(__DIR__.'/Staff/Views','staff');     
        $this->loadViewsFrom(__DIR__.'/Staff/Views','stafffrom');     
        $this->loadViewsFrom(__DIR__.'/Login/views','log'); 
        $this->loadViewsFrom(__DIR__.'/Category/Views','cat');
        // $this->loadViewsFrom(__DIR__.'/Paymentnotification/Views','payy');
        // $this->loadViewsFrom(__DIR__.'/Paymentnotification/Views','payyfrom');
    }
}

