<?php


namespace App\Accommodation;


class Pricing
{
    const WEEKDAYS = [
        RoomType::ECONOMY_DOUBLE  => 3800,
        RoomType::LUXURY_DOUBLE   => 4600,
        RoomType::PREMIUM_DOUBLE  => 5200,
        RoomType::DUPLEX_DOUBLE   => 5200,
        RoomType::ECONOMY_QUAD    => 5800,
        RoomType::LUXURY_QUAD     => 5800,
        RoomType::ISLAND_QUAD     => 6800,
//        RoomType::STARGAZING_QUAD => 7600,

        Building::AQUA   => 7800,
        Building::FLOWER => 37200,
        Building::TREE   => 37200,
    ];

    const WEEKENDS = [
        RoomType::ECONOMY_DOUBLE  => 4800,
        RoomType::LUXURY_DOUBLE   => 5600,
        RoomType::PREMIUM_DOUBLE  => 6200,
        RoomType::DUPLEX_DOUBLE   => 6200,
        RoomType::ECONOMY_QUAD    => 6800,
        RoomType::LUXURY_QUAD     => 6800,
        RoomType::ISLAND_QUAD     => 7800,
//        RoomType::STARGAZING_QUAD => 8600,

        Building::AQUA   => 7800,
        Building::FLOWER => 37200,
        Building::TREE   => 37200,
    ];

    const CHINESE_NEW_YEAR = [
        RoomType::ECONOMY_DOUBLE  => 4800,
        RoomType::LUXURY_DOUBLE   => 5600,
        RoomType::PREMIUM_DOUBLE  => 6200,
        RoomType::DUPLEX_DOUBLE   => 6200,
        RoomType::ECONOMY_QUAD    => 6800,
        RoomType::LUXURY_QUAD     => 6800,
        RoomType::ISLAND_QUAD     => 7800,
//        RoomType::STARGAZING_QUAD => 8600,

        Building::AQUA   => 7800,
        Building::FLOWER => 37200,
        Building::TREE   => 37200,
    ];

    const ACCOMMODATES = [
        RoomType::ECONOMY_DOUBLE  => [1, 2],
        RoomType::LUXURY_DOUBLE   => [1, 2],
        RoomType::PREMIUM_DOUBLE  => [1, 2],
        RoomType::DUPLEX_DOUBLE   => [1, 2],
        RoomType::ECONOMY_QUAD    => [1, 4],
        RoomType::LUXURY_QUAD     => [1, 4],
        RoomType::ISLAND_QUAD     => [1, 4],
//        RoomType::STARGAZING_QUAD => [1, 4],

        Building::AQUA   => [1, 4],
        Building::FLOWER => [6, 12],
        Building::TREE   => [4, 12],
    ];

    const ROOMS = [1, 2, 3, 4, 5, 6, 7];

    const BUILDINGS = ['aqua', 'tree', 'flower'];


    public static function forView($locale = 'en'): array
    {
        return collect(['weekdays', 'weekends', 'chinese_new_year'])
            ->map(fn($time) => [
                'title'     => trans('accommodation.price_times.' . $time, [], $locale),
                'rooms'     => collect(static::ROOMS)
                    ->map(fn($room) => static::getRoomData($room, $locale, static::getPriceIndex($time))),
                'buildings' => collect(static::BUILDINGS)
                    ->map(fn($building) => static::getBuildingData($building, $locale, static::getPriceIndex($time))),
            ])->values()->all();

    }

    public static function getRoomData($room, $locale, $priceIndex): array
    {
        return [
            'name'   => RoomType::nameFor($room, $locale),
            'rooms'  => 1,
            'guests' => static::ACCOMMODATES[$room][1],
            'price'  => static::WEEKDAYS[$room],
        ];
    }

    public static function getBuildingData($building, $locale, $priceIndex): array
    {
        return [
            'name'   => Buildings::withSlug($building)->name($locale),
            'rooms'  => static::ACCOMMODATES[$building][0],
            'guests' => static::ACCOMMODATES[$building][1],
            'price'  => static::WEEKDAYS[$building],
        ];
    }

    private static function getPriceIndex($key)
    {
        $lookup = [
            'weekdays'         => static::WEEKDAYS,
            'weekends'         => static::WEEKENDS,
            'chinese_new_year' => static::CHINESE_NEW_YEAR,
        ];

        return $lookup[$key];
    }

    public static function pricingForType(int $room_type): array
    {
        return [
            'weekdays' => static::WEEKDAYS[$room_type],
            'weekends' => static::WEEKENDS[$room_type],
            'chinese_new_year' => static::CHINESE_NEW_YEAR[$room_type],
        ];
    }


}
