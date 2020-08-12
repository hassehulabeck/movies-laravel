<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AwardProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Cannes', function () {
            return new \App\Cannes;
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
