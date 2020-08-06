<?php

namespace App\Http\Controllers;

use Dymantic\MultilingualPosts\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NextPostController extends Controller
{
    public function show(Post $post)
    {
        $next = $post->prev()->asDataArrayFor(app()->getLocale());
        return [
            'has_next' => !!$next,
            'next_id' => $next['id'],
            'next_url' => "/en/journal/{$next['slug']}",
            'next_title' => $next['title'],
            'html' => View::make('front.posts.article', ['post' => $next])->render(),
        ];
    }
}
