<?php

namespace Dannetrichard\TopSdk;

use Illuminate\Support\ServiceProvider;

class ShopGetRequestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ShopGetRequest', function () {
            return new ShopGetRequest();
        });
    }
}
