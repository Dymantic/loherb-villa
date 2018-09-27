<?php

namespace App\Providers;

use Dymantic\MultilingualPosts\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('blog', function() {
            $category = Category::find(config('blog.category_id'));
            if(!$category) {
                return new Category();
            }
            return $category;
        });
    }
}
