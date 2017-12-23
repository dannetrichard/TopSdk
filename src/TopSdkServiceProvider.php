<?php

namespace Dannetrichard\TopSdk;

use Illuminate\Support\ServiceProvider;

class TopSdkServiceProvider extends ServiceProvider
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
        $this->app->singleton('topsdk', function () {
            return new Hello();
        });
    }
}
