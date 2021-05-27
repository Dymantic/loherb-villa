<?php


namespace App\Accommodation;


class Pricing
{
    const WEEKDAYS = [
        RoomType::ECONOMY_DOUBLE  => 3800,
        RoomType::LUXURY_DOUBLE   => 4600,
        RoomType::PREMIUM_DOUBLE  => 5200,
        RoomType::DUPLEX_DOUBLE   => 4600,
        RoomType::ECONOMY_QUAD    => 5800,
        RoomType::LUXURY_QUAD     => 6800,
        RoomType::ISLAND_QUAD     => 6800,
        RoomType::CASUAL_DOUBLE   => 4200,
        RoomType::GARDEN_DOUBLE   => 5200,
//        RoomType::STARGAZING_QUAD => 7600,

        Building::AQUA   => 6800,
        Building::FLOWER => 26000,
        Building::TREE   => 31800,
    ];

    const SUMMER_VACATION = [
        RoomType::ECONOMY_DOUBLE  => 4300,
        RoomType::LUXURY_DOUBLE   => 5200,
        RoomType::PREMIUM_DOUBLE  => 5800,
        RoomType::DUPLEX_DOUBLE   => 5200,
        RoomType::ECONOMY_QUAD    => 6600,
        RoomType::LUXURY_QUAD     => 7800,
        RoomType::ISLAND_QUAD     => 7800,
        RoomType::CASUAL_DOUBLE   => 4600,
        RoomType::GARDEN_DOUBLE   => 5800,
//        RoomType::STARGAZING_QUAD => 8600,

        Building::AQUA   => 7800,
        Building::FLOWER => 29400,
        Building::TREE   => 35800,
    ];

    const WEEKENDS = [
        RoomType::ECONOMY_DOUBLE  => 4800,
        RoomType::LUXURY_DOUBLE   => 5800,
        RoomType::PREMIUM_DOUBLE  => 6600,
        RoomType::DUPLEX_DOUBLE   => 5800,
        RoomType::ECONOMY_QUAD    => 7600,
        RoomType::LUXURY_QUAD     => 8800,
        RoomType::ISLAND_QUAD     => 8800,
        RoomType::CASUAL_DOUBLE   => 5200,
        RoomType::GARDEN_DOUBLE   => 6600,
//        RoomType::STARGAZING_QUAD => 9200,

        Building::AQUA   => 8800,
        Building::FLOWER => 32800,
        Building::TREE   => 40600,
    ];

    const CHINESE_NEW_YEAR = [
        RoomType::ECONOMY_DOUBLE  => 7000,
        RoomType::LUXURY_DOUBLE   => 8000,
        RoomType::PREMIUM_DOUBLE  => 9000,
        RoomType::DUPLEX_DOUBLE   => 8000,
        RoomType::ECONOMY_QUAD    => 10000,
        RoomType::LUXURY_QUAD     => 11000,
        RoomType::ISLAND_QUAD     => 11000,
        RoomType::CASUAL_DOUBLE   => 7000,
        RoomType::GARDEN_DOUBLE   => 9000,
//        RoomType::STARGAZING_QUAD => 12000,

        Building::AQUA   => 11000,
        Building::FLOWER => 46000,
        Building::TREE   => 54000,
    ];

    const ACCOMMODATES = [
        RoomType::ECONOMY_DOUBLE => [1, 2],
        RoomType::LUXURY_DOUBLE  => [1, 2],
        RoomType::PREMIUM_DOUBLE => [1, 2],
        RoomType::DUPLEX_DOUBLE  => [1, 2],
        RoomType::ECONOMY_QUAD   => [1, 4],
        RoomType::LUXURY_QUAD    => [1, 4],
        RoomType::ISLAND_QUAD    => [1, 4],
        RoomType::CASUAL_DOUBLE   => [1,2],
        RoomType::GARDEN_DOUBLE   => [1,2],
//        RoomType::STARGAZING_QUAD => [1, 4],

        Building::AQUA   => [1, 4],
        Building::FLOWER => [6, 12],
        Building::TREE   => [6, 16],
    ];

    const ROOMS = [1, 2, 3, 5, 6, 10, 4, 9,  7];

    const BUILDINGS = ['aqua', 'tree', 'flower'];


    public static function forView($locale = 'en'): array
    {
        return collect(['weekdays', 'vacation', 'weekends', 'chinese_new_year'])
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
            'price'  => $priceIndex[$room],
        ];
    }

    public static function getBuildingData($building, $locale, $priceIndex): array
    {
        return [
            'name'   => Buildings::withSlug($building)->name($locale),
            'rooms'  => static::ACCOMMODATES[$building][0],
            'guests' => static::ACCOMMODATES[$building][1],
            'price'  => $priceIndex[$building],
        ];
    }

    private static function getPriceIndex($key)
    {
        $lookup = [
            'weekdays'         => static::WEEKDAYS,
            'weekends'         => static::WEEKENDS,
            'vacation'         => static::SUMMER_VACATION,
            'chinese_new_year' => static::CHINESE_NEW_YEAR,
        ];

        return $lookup[$key];
    }

    public static function pricingForType(int $room_type): array
    {
        return [
            'weekdays'         => static::WEEKDAYS[$room_type],
            'weekends'         => static::WEEKENDS[$room_type],
            'vacation'         => static::SUMMER_VACATION[$room_type],
            'chinese_new_year' => static::CHINESE_NEW_YEAR[$room_type],
        ];
    }


}
