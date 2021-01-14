<?php


namespace App\Accommodation;


use Illuminate\Support\Facades\Facade;

class Rooms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rooms';
    }
}
