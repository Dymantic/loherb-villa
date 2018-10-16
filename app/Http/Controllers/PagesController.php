<?php

namespace App\Http\Controllers;

use Dymantic\InstagramFeed\Profile;
use Dymantic\SimpleWeather\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PagesController extends Controller
{
    public function home()
    {
        $lang = Arr::get(['en' => 'en', 'zh' => 'zh'], app()->getLocale(), 'en');
        $reviews = data('testimonials.' . $lang);
        $review = array_shift($reviews);

        $profile = Profile::first();
        $instagrams = $profile ? $profile->feed() : collect([]);

        $loc = config('simple-weather.locations')[0];
        $weather = app('weather')->overview(new Location($loc['name'], $loc['lat'], $loc['long'], $loc['identifier']));

        $posts = app('blog')->posts()->live()->latest()->take(3)->get()->map->asDataArrayFor(app()->getLocale());

        return view('front.home.page', [
            'review' => $review,
            'reviews' => $reviews,
            'instagrams' => $instagrams,
            'weather' => $weather,
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('front.about.page');
    }

    public function contact()
    {
        return view('front.contact.page');
    }
}
