<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BuildingRoomCard extends Component
{

    public function __construct(public array $room, public string $side = 'right', public bool $showType = true, public bool $showBuilding = false)
    {}


    public function render()
    {
        return view('components.building-room-card');
    }

    public function cardImage(): string
    {
        return $this->room['images'][0]['small'] ?? '';
    }

    public function roomAttribute($attribute)
    {
        return $this->room[$attribute] ?? '';
    }
}
