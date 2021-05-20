<?php


namespace App\Accommodation;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BuildingsRepository
{
    public $buildings;

    public function __construct()
    {
        $this->buildings = collect(Storage::disk('buildings')->files())
            ->filter(fn ($file) => Str::endsWith($file, ".json"))
            ->map(fn ($file) => json_decode(Storage::disk('buildings')->get($file), true))
            ->map(fn ($attributes) => new Building($attributes));
    }

    public function all()
    {
        return $this->buildings;
    }

    public function withSLug($slug): Building
    {
        $found = $this->buildings->first(fn (Building $building) => $building->key() === $slug);

        if(!$found) {
            throw new ModelNotFoundException(sprintf("Building [%s] not found", $slug));
        }

        return $found;
    }
}
