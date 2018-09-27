<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        return view('front.rooms.index');
    }

    public function show($room)
    {
        return view('front.rooms.show', ['room' => data("rooms.{$room}")] );
    }

}
