<?php


namespace App\Accommodation;


class RoomType
{
    const LIST = [
        'economy-double'  => 1,
        'luxury-double'   => 2,
        'duplex-double'   => 3,
        'island-quad'     => 4,
        'double'          => 5,
        'premium-double'  => 6,
        'economy-quad'    => 7,
        'luxury-quad'     => 8,
        'stargazing-quad' => 9,
    ];

    const NAMES = [
        1 => 'economy-double',
        2 => 'luxury-double',
        3 => 'duplex-double',
        4 => 'island-quad',
        5 => 'double',
        6 => 'premium-double',
        7 => 'economy-quad',
        8 => 'luxury-quad',
        9 => 'stargazing-quad',
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
}
