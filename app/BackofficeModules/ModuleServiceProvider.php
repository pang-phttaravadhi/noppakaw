<?php
namespace App\BackofficeModules;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(_DIR_.'/Home/Views','home'); 
        $this->loadViewsFrom(_DIR_.'/Product/Views','pro');
        $this->loadViewsFrom(_DIR_.'/Product/Views','profrom');
        $this->loadViewsFrom(_DIR_.'/Category/Views','categoryfrom');  
        $this->loadViewsFrom(_DIR_.'/Orders/Views','pay'); 
        $this->loadViewsFrom(_DIR_.'/Product/Views','profrom');   
        $this->loadViewsFrom(_DIR_.'/Customer/Views','cus');     
        $this->loadViewsFrom(_DIR_.'/Bank/Views','bank');     
        $this->loadViewsFrom(_DIR_.'/Bank/Views','bankfrom');     
        $this->loadViewsFrom(_DIR_.'/Staff/Views','staff');     
        $this->loadViewsFrom(_DIR_.'/Staff/Views','stafffrom');     
        $this->loadViewsFrom(_DIR_.'/Login/views','log'); 
        $this->loadViewsFrom(_DIR_.'/Category/Views','cat');
        // $this->loadViewsFrom(_DIR_.'/Paymentnotification/Views','payy');
        // $this->loadViewsFrom(_DIR_.'/Paymentnotification/Views','payyfrom');
    }
}