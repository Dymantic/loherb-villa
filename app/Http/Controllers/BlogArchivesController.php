<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogArchivesController extends Controller
{
    public function index()
    {
        $post_months = app('blog')
            ->posts()
            ->live()
            ->latest('publish_date')
            ->get()
            ->groupBy(function($post) {
                return $post->publish_date->format('M Y');
            });


        return view('front.posts.archives', ['post_months' => $post_months]);
    }
}
