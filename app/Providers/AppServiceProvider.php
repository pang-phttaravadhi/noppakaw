<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->register(\App\BackofficeModules\ModuleServiceProvider::class);
       $this->app->register(\App\LiffModules\ModuleServiceProvider::class);
       $this->app->register(\App\LineModules\ModuleServiceProvider::class);
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
