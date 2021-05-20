<?php


namespace App\Accommodation;


use Illuminate\Support\Facades\Facade;

/**
 * @method static inBuilding(string $name)
 * @method static find($room)
 */
class Rooms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rooms';
    }
}
