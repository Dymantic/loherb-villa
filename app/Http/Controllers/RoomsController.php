<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        return view('front.rooms.index');
    }

    public function luxury()
    {
        return view('front.rooms.show', ['room' => data('luxury-room')] );
    }

    public function economy()
    {
        return view('front.rooms.show', ['room' => data('economy-room')] );
    }

    public function vip()
    {
        return view('front.rooms.show', ['room' => data('vip-room')] );
    }

    public function villa()
    {
        return view('front.rooms.show', ['room' => data('island-villa')] );
    }
}
