<?php

namespace App\View\Components;

use App\Accommodation\Room;
use App\Accommodation\Rooms;
use Illuminate\View\Component;

class RoomsMobileNav extends Component
{

    public $rooms;

    public function __construct()
    {
        $this->rooms = Rooms::all();
    }


    public function render()
    {
        return view('components.rooms-mobile-nav');
    }

    public function buildings()
    {
        return $this->rooms
            ->groupBy(fn (Room $room) => $room->buildingName())
            ->mapWithKeys(function($building_rooms, $building_name) {
                return [$building_name => [
                    'types' => $building_rooms->groupBy(fn (Room $room) => $room->typeSlug()),
                    'building_icon' => $building_rooms->first()->building(),
                    'building_slug' => "/buildings/{$building_rooms->first()->building()}",
                ]];
            });
    }
}
