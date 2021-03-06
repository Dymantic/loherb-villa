<?php

return [
    'body_class'     => 'lily-room',
    'name'           => 'rooms.lily.name',
    'text_heading'   => 'rooms.lily.text_heading',
    'text_content'   => 'rooms.lily.text_content',
    'services'       => [
        'wifi',
        'home_cinema',
        'kingsize_bed',
        'air_con_heat',
        'luxury_bathtub',
        'breakfast_included',
        'afternoon_tea_included',
//        'private_skygarden',
        'outdoor_patio',
        'restaurant',
        'secure_parking',
        'bicycle',
        'towels',
//        'laundry',
        'room_service',
        'no_smoking_room',
        'accepts_credit_card',
        'disabled_accessibility',
        'copy_print_service',
        'taxi',
//        'pets_allowed',

    ],
    'prices'         => [
        'weekday'          => 3800,
        'weekends'         => 4300,
        'holidays'         => 4800,
        'chinese_new_year' => 7000,
        'add_person'       => 111
    ],
    'gallery_images' => [
        [
            'full'  => '/images/room-galleries/lily/reg/lily_gallery_1.jpg',
            'small' => '/images/room-galleries/lily/mobile/lily_gallery_1.jpg',
            'wide' => '/images/room-galleries/lily/wide/lily_gallery_1.jpg',
        ],
        [
            'full'  => '/images/room-galleries/lily/reg/lily_gallery_2.jpg',
            'small' => '/images/room-galleries/lily/mobile/lily_gallery_2.jpg',
            'wide' => '/images/room-galleries/lily/wide/lily_gallery_2.jpg',
        ],
        [
            'full'  => '/images/room-galleries/lily/reg/lily_gallery_3.jpg',
            'small' => '/images/room-galleries/lily/mobile/lily_gallery_3.jpg',
            'wide' => '/images/room-galleries/lily/wide/lily_gallery_3.jpg',
        ],
        [
            'full'  => '/images/room-galleries/lily/reg/lily_gallery_4.jpg',
            'small' => '/images/room-galleries/lily/mobile/lily_gallery_4.jpg',
            'wide' => '/images/room-galleries/lily/wide/lily_gallery_4.jpg',
        ],
        [
            'full'  => '/images/room-galleries/lily/reg/lily_gallery_5.jpg',
            'small' => '/images/room-galleries/lily/mobile/lily_gallery_5.jpg',
            'wide' => '/images/room-galleries/lily/wide/lily_gallery_5.jpg',
        ],
        [
            'full'  => '/images/room-galleries/lily/reg/lily_gallery_6.jpg',
            'small' => '/images/room-galleries/lily/mobile/lily_gallery_6.jpg',
            'wide' => '/images/room-galleries/lily/wide/lily_gallery_6.jpg',
        ],
    ],
    'occupancy' => [
        'min' => 1,
        'max' => 4,
        'beds' => 1,
        'bed_type' => 'King size'
    ],
    'main_image' => '/images/room-banners/lily.jpg',
];