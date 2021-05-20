<?php

namespace App\Providers;

use App\Accommodation\BuildingsRepository;
use App\Accommodation\RoomsRepository;
use Illuminate\Support\ServiceProvider;

class RoomsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('rooms', function() {
            return new RoomsRepository();
        });

        $this->app->bind('buildings', function() {
            return new BuildingsRepository();
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
