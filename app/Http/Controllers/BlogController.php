<?php

namespace App\Http\Controllers;

use Dymantic\MultilingualPosts\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = app('blog')->posts()->live()->latest('publish_date')->take(15)->get()->map->asDataArrayFor(app()->getLocale());

        return view('front.posts.index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::findBySlug($slug);

        return view('front.posts.show', ['post' => $post->asDataArrayFor(app()->getLocale())]);
    }
}
