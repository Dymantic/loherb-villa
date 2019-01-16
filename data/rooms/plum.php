<?php

return [
    'body_class'     => 'plum-room',
    'name'           => 'rooms.plum.name',
    'text_heading'   => 'rooms.plum.text_heading',
    'text_content'   => 'rooms.plum.text_content',
    'services'       => [
        'wifi',
        'home_cinema',
        'kingsize_bed',
        'air_con_heat',
        'luxury_bathtub',
        'breakfast_included',
        'afternoon_tea_included',
        'private_skygarden',
//        'outdoor_patio',
        'restaurant',
        'secure_parking',
        'bicycle',
        'towels',
        'laundry',
        'room_service',
        'no_smoking_room',
        'accepts_credit_card',
        'disabled_accessibility',
        'copy_print_service',
        'taxi',
//        'pets_allowed',

    ],
    'prices'         => [
        'weekday'          => 100,
        'weekends'         => 1000,
        'holidays'         => 2000,
        'chinese_new_year' => 5000,
        'add_person'       => 111
    ],
    'gallery_images' => [
        ['full'  => '/images/room-galleries/plum/plum_gallery_1.jpg',
         'small' => '/images/room-galleries/plum/mobile/plum_gallery_1.jpg'
        ],
        ['full'  => '/images/room-galleries/plum/plum_gallery_2.jpg',
         'small' => '/images/room-galleries/plum/mobile/plum_gallery_2.jpg'
        ],
        ['full'  => '/images/room-galleries/plum/plum_gallery_3.jpg',
         'small' => '/images/room-galleries/plum/mobile/plum_gallery_3.jpg'
        ],
        ['full'  => '/images/room-galleries/plum/plum_gallery_4.jpg',
         'small' => '/images/room-galleries/plum/mobile/plum_gallery_4.jpg'
        ],
        ['full'  => '/images/room-galleries/plum/plum_gallery_5.jpg',
         'small' => '/images/room-galleries/plum/mobile/plum_gallery_5.jpg'
        ],
        ['full'  => '/images/room-galleries/plum/plum_gallery_6.jpg',
         'small' => '/images/room-galleries/plum/mobile/plum_gallery_6.jpg'
        ],
    ],
    'occupancy' => [
        'min' => 1,
        'max' => 4,
        'beds' => 1,
        'bed_type' => 'King size'
    ],
    'main_image' => '/images/room-banners/plum.jpg',
];