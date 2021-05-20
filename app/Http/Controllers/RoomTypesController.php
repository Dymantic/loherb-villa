<?php

namespace App\Http\Controllers;

use App\Accommodation\Room;
use App\Accommodation\Rooms;
use Illuminate\Http\Request;

class RoomTypesController extends Controller
{
    public function index()
    {
        $types = Rooms::all()
                      ->sortBy(fn(Room $room) => $room->typeCode())
                      ->groupBy(fn(Room $room) => $room->typeSlug())
            ->mapWithKeys(fn ($rooms, $type) => [$type => $rooms->map(fn (Room $room) => $room->presentForLang(app()->getLocale()))]);

        return view('front.rooms.all', ['roomTypes' => $types]);
    }
}
