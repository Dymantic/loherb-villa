<?php


namespace App\Accommodation;


class RoomType
{

    const ECONOMY_DOUBLE = '1';
    const LUXURY_DOUBLE = '2';
    const PREMIUM_DOUBLE = '3';
    const DUPLEX_DOUBLE = '4';
    const ECONOMY_QUAD = '5';
    const LUXURY_QUAD = '6';
    const ISLAND_QUAD = '7';
    const STARGAZING_QUAD = '8';

    const LIST = [
        'economy-double'  => 1,
        'luxury-double'   => 2,
        'premium-double'  => 3,
        'duplex-double'   => 4,
        'economy-quad'    => 5,
        'luxury-quad'     => 6,
        'island-quad'     => 7,
        'stargazing-quad' => 8,
    ];

    const NAMES = [
        1 => 'economy-double',
        2 => 'luxury-double',
        3 => 'premium-double',
        4 => 'duplex-double',
        5 => 'economy-quad',
        6 => 'luxury-quad',
        7 => 'island-quad',
        8 => 'stargazing-quad',
    ];

    public static function of(string $slug): int
    {
        return self::LIST[$slug] ?? 99;
    }

    public static function nameFor(int $type_code, string $locale = 'en'): string
    {
        $key = self::NAMES[$type_code] ?? null;
        if (!$key) {
            return '';
        }

        return trans("rooms.types.{$key}", [], $locale);
    }

    public static function slugFor(int $type_code): string
    {
        return self::NAMES[$type_code] ?? '';
    }
}
