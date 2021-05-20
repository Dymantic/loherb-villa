<?php

namespace App\Http\Controllers;

use App\Accommodation\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        return view('front.rooms.index');
    }

    public function show($room)
    {
        return view('front.rooms.show', [
            'room' => Rooms::find($room)->presentForLang(app()->getLocale()),
            'room_key' => $room
        ]);
    }

}
