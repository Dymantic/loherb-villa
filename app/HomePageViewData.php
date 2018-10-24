<?php


namespace App;


use Dymantic\InstagramFeed\Profile;
use Dymantic\SimpleWeather\Location;
use Illuminate\Support\Arr;

class HomePageViewData
{
    private $testimonials;

    public function provide()
    {
        $lang = Arr::get(['en' => 'en', 'zh' => 'zh'], app()->getLocale(), 'en');
        $this->testimonials = data('testimonials.' . $lang);

        return [
            'review'     => $this->review(),
            'reviews'    => $this->reviews(),
            'instagrams' => $this->instagrams(),
            'weather'    => $this->weather(),
            'posts'      => $this->posts(),
        ];
    }

    private function review()
    {
        return $this->testimonials[0];
    }

    private function reviews()
    {
        return array_slice($this->testimonials, 1);
    }

    private function instagrams()
    {
        $profile = Profile::first();

        return $profile ? $profile->feed() : collect([]);
    }

    private function weather()
    {
        $loc = config('simple-weather.locations')[0];

        return app('weather')->overview(new Location($loc['name'], $loc['lat'], $loc['long'], $loc['identifier']));
    }

    private function posts()
    {
        return app('blog')
            ->posts()
            ->live()
            ->latest()
            ->take(3)
            ->get()
            ->map
            ->asDataArrayFor(app()->getLocale());
    }
}