<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Bear;

class BearProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Bear', function ($app) {
            return new Bear;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
