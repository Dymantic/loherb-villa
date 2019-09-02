<?php

namespace App\Http\Controllers;

use App\HomePageViewData;
use Illuminate\Support\Carbon;

class PagesController extends Controller
{
    public function home(HomePageViewData $data)
    {
        return view('front.home.page', $data->provide());
    }

    public function about()
    {
        return view('front.about.page');
    }

    public function book()
    {
        $checkin = request('checkin', Carbon::today()->format('Y-m-d'));
        $checkout = request('checkout', Carbon::today()->addDay()->format('Y-m-d'));

        $iframe_lang = app()->getLocale() === 'zh' ? 'cn' : 'en';

        return view('front.bookings.page', [
            'checkIn' => $checkin,
            'checkOut' => $checkout,
            'iframe_lang' => $iframe_lang,
        ]);
    }

    public function contact()
    {
        $form_text = trans('contact.form');
        return view('front.contact.page', ['form_text' => $form_text]);
    }
}
