<?php

namespace App\Http\Controllers;

use Dymantic\MultilingualPosts\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NextPostController extends Controller
{
    public function show(Post $post, $lang)
    {
        $main_categories = [1,2,3,4];
        $categories = $post
            ->categories
            ->pluck('id')
            ->reject(fn($cat) => in_array($cat, $main_categories))
            ->all();

        if(count($categories) === 0) {
            $next = $post->prev();
        } else {
            $next = Post::live()
                        ->whereHas('categories', function($query) use ($categories) {
                            $query->whereIn('multilingual_categories.id', $categories);
                        })
                        ->where('publish_date', '<', $post->publish_date)
                        ->latest('publish_date')
                        ->first();
        }





        if($next) {
            $next = $next->asDataArrayFor($lang);
            return [
                'has_next' => !!$next,
                'next_id' => $next['id'],
                'next_url' => "/{{ $lang }}/journal/{$next['slug']}",
                'next_title' => $next['title'],
                'html' => View::make('front.posts.article', ['post' => $next])->render(),
            ];
        }

        return [
            'has_next' => false,
            'next_id' => null,
            'next_url' => "",
            'next_title' => '',
            'html' => '',
        ];
    }
}
