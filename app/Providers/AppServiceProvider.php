<?php

namespace App\Providers;

use Dymantic\MultilingualPosts\Category;
use Illuminate\Support\Facades\View;
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
        $this->app->bind('blog', function () {
            $category = Category::find(config('blog.category_id'));
            if (!$category) {
                return new Category();
            }

            return $category;
        });

        View::composer('front.posts.index', function ($view) {
            $view->with([
                'subcategories' => Category::whereNotIn('id', [1, 2, 3, 4])
                                           ->get()
                                           ->map(fn(Category $category) => [
                                               'title' => $category->title,
                                               'slug'  => $category->slug
                                           ])
            ]);
        });
    }
}
