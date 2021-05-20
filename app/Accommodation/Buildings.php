<?php


namespace App\Accommodation;


use Illuminate\Support\Facades\Facade;

/**
 * @method static withSlug($slug): Building
 * @method static all()
 */
class Buildings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'buildings';
    }
}
