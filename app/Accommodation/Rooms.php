<?php


namespace App\Accommodation;


use Illuminate\Support\Facades\Facade;

/**
 * @method static inBuilding(string $name)
 */
class Rooms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rooms';
    }
}
