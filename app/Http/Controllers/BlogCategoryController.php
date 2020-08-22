<?php

namespace App\Http\Controllers;

use Dymantic\MultilingualPosts\Category;
use Dymantic\MultilingualPosts\Post;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function show(Category $category)
    {
        $page = Post::whereHas('categories', function ($query) {
            $query->where('multilingual_categories.id', config('blog.category_id'));
        })
                    ->whereHas('categories', function ($query) use ($category) {
                        $query->where('multilingual_categories.id', $category->id);
                    })
                    ->live()
                    ->latest('publish_date')
                    ->simplePaginate(18);


        return view('front.posts.index', [
            'posts'     => collect($page->items())->map->asDataArrayFor(app()->getLocale()),
            'next_page' => $page->nextPageUrl(),
            'prev_page' => $page->previousPageUrl(),
            'page_title' => $category->title,
            'page_description' => $category->description,
            'page_intro' => $category->intro,
        ]);
    }
}
