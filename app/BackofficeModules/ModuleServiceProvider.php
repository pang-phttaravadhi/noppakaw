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
        $this->loadViewsFrom(__DIR__.'/Payment/Views','pay'); 
        $this->loadViewsFrom(__DIR__.'/Payment/Views','payfrom');   
        $this->loadViewsFrom(__DIR__.'/Status/Views','sta');       
    }
}

