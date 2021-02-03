<?php

namespace App\Accommodation;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RoomsRepository {

    private Collection $rooms;

    public function __construct()
    {
        $this->rooms = collect(Storage::disk('rooms')->files())
            ->filter(fn ($file) => Str::endsWith($file, ".json"))
            ->map(fn ($file) => json_decode(Storage::disk('rooms')->get($file), true))
        ->map(fn ($attributes) => new Room($attributes));
    }

    public function all()
    {
        return $this->rooms;
    }

    public function find(string $slug): Room
    {
        $room = $this->rooms->first(fn (Room $room) => $room->slug() === $slug);

        if(!$room) {
            throw new ModelNotFoundException('room does not exist');
        }

        return $room;
    }

    public function inBuilding(string $building_type): Collection
    {
        return $this->rooms->filter(fn (Room $room) => $room->building() === $building_type);
    }

    public function ofType(int $room_type): Collection
    {
        return $this->rooms->filter(
            fn (Room $room) => $room->typeCode() === $room_type
        );
    }
}
