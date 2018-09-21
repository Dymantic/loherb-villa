<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('front.home.page');
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
