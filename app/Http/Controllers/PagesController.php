<?php

namespace App\Http\Controllers;

use App\HomePageViewData;

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

    public function contact()
    {
        $form_text = trans('contact.form');
        return view('front.contact.page', ['form_text' => $form_text]);
    }
}
