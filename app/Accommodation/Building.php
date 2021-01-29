<?php


namespace App\Accommodation;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Building
{
    const FLOWER = 'flower';
    const TREE = 'tree';
    const AQUA = 'aqua';

    public Collection $rooms;

    public function __construct(public array $attributes)
    {
        $this->rooms = Rooms::inBuilding($this->attributes['key']);
    }

    public function key(): string
    {
        return $this->attributes['key'] ?? '';
    }

    public function name(): string
    {
        return $this->attributes['name'][app()->getLocale()] ?? '';
    }

    public function description(): string
    {
        return $this->attributes['description'][app()->getLocale()] ?? '';
    }

    public function roomCounts(): string
    {
        return join(" / ", $this->attributes['room_counts'][app()->getLocale()] ?? []);
    }

    public function bannerLarge(): string
    {
        return $this->attributes['banner_large'] ?? '';
    }

    public function bannerSmall(): string
    {
        return $this->attributes['banner_large'] ?? '';
    }

    public function icon(): string
    {
        return sprintf("svgs.buildings.%s", $this->key());
    }

    public function url(): string
    {
        return sprintf("/buildings/%s", $this->key());
    }

    public function availableRoomTypes(): array
    {
        $locale = app()->getLocale();

        return $this->rooms
            ->sortBy(fn(Room $room) => $room->typeCode())
            ->map(
                fn(Room $room) => ['option' => $room->typeName($locale), 'url' => Str::slug($room->typeName($locale))]
            )->unique()->values()->all();
    }

    public function presentedRooms(): array
    {
        return $this->rooms
            ->sortBy(fn(Room $room) => $room->typeCode())
            ->map(
                fn(Room $room) => $room->presentForLang(app()->getLocale())
            )->values()->all();
    }

}
