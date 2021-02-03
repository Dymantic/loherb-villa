<?php

namespace App\Http\Controllers;

use App\Accommodation\Building;
use App\Accommodation\Buildings;
use Illuminate\Http\Request;

class BuildingsController extends Controller
{

    public function index()
    {
        $buildings = Buildings::all();
        $options = $buildings
                           ->map(
                               fn (Building $building) => [
                                   'url' => $building->key(), 'option' => $building->name()
                               ])
                           ->values()->all();

        return view('front.buildings.index', [
            'buildings' => $buildings,
            'options' => $options
        ]);
    }

    public function show($slug)
    {
        $building = Buildings::withSlug($slug);
        return view('front.buildings.show', ['building' => $building]);
    }
}
