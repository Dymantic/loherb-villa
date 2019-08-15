<?php

namespace App\Http\Controllers;

use Dymantic\MultilingualPosts\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $page = app('blog')
            ->posts()
            ->live()
            ->latest('publish_date')
            ->simplePaginate(18);


        return view('front.posts.index', [
            'posts' => collect($page->items())->map->asDataArrayFor(app()->getLocale()),
            'next_page' => $page->nextPageUrl(),
            'prev_page' => $page->previousPageUrl(),
        ]);
    }

    public function show($slug)
    {
        $post = Post::findBySlug($slug);

        return view('front.posts.show', ['post' => $post->asDataArrayFor(app()->getLocale())]);
    }
}
