<?php

namespace App\Providers;

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
            return new RoomsRepository(storage_path('rooms'));
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
