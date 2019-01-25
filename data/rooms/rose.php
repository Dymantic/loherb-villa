<?php

return [
    'body_class'     => 'rose-room',
    'name'           => 'rooms.rose.name',
    'text_heading'   => 'rooms.rose.text_heading',
    'text_content'   => 'rooms.rose.text_content',
    'services'       => [
        'wifi',
        'home_cinema',
        'kingsize_bed',
        'air_con_heat',
//        'luxury_bathtub',
        'breakfast_included',
        'afternoon_tea_included',
        //        'private_skygarden',
        'outdoor_patio',
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
        'weekday'          => 3800,
        'weekends'         => 4300,
        'holidays'         => 4800,
        'chinese_new_year' => 7000,
        'add_person'       => 111
    ],
    'gallery_images' => [
        ['full'  => '/images/room-galleries/rose/rose_gallery_1.jpg',
         'small' => '/images/room-galleries/rose/mobile/rose_gallery_1.jpg'
        ],
        ['full'  => '/images/room-galleries/rose/rose_gallery_2.jpg',
         'small' => '/images/room-galleries/rose/mobile/rose_gallery_2.jpg'
        ],
        ['full'  => '/images/room-galleries/rose/rose_gallery_3.jpg',
         'small' => '/images/room-galleries/rose/mobile/rose_gallery_3.jpg'
        ],
        ['full'  => '/images/room-galleries/rose/rose_gallery_4.jpg',
         'small' => '/images/room-galleries/rose/mobile/rose_gallery_4.jpg'
        ],
        ['full'  => '/images/room-galleries/rose/rose_gallery_5.jpg',
         'small' => '/images/room-galleries/rose/mobile/rose_gallery_5.jpg'
        ],
        ['full'  => '/images/room-galleries/rose/rose_gallery_6.jpg',
         'small' => '/images/room-galleries/rose/mobile/rose_gallery_6.jpg'
        ],
    ],
    'occupancy' => [
        'min' => 1,
        'max' => 4,
        'beds' => 1,
        'bed_type' => 'King size'
    ],
    'main_image' => '/images/room-banners/rose.jpg',
];