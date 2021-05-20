<?php

namespace App\Http\Controllers;

use App\Accommodation\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function show()
    {
        return view('front.pricing.show', ['times' => Pricing::forView(app()->getLocale())]);
    }
}
