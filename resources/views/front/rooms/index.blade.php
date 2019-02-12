@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ trans('rooms.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '',
        'ogTitle' => trans('rooms.title'),
        'ogDescription' => trans('rooms.description')
    ])
@endsection

@section('content')
    @component('front.components.info-section', ['title' => trans('rooms.index.heading')])
        <p class="my-8 body-text text-green-main text-center">{{ trans('rooms.index.subheading') }}</p>
    @endcomponent
    <div class="px-4 pt-12">
        <p class="heading-text mb-4 text-green-main text-center">{{ trans('rooms.index.types.economy') }}</p>
        @include('front.rooms.preview', [
            'room' => trans('rooms.rose.preview'),
            'links_to' => localUrl('/rooms/rose'),
            'left_side' => false,
            'room_image_lg' => '/images/room-previews/rose_room_desktop.jpg',
            'room_image_sm' => '/images/room-previews/rose_room_mobile.jpg'
        ])
        @include('front.rooms.preview', [
            'room' => trans('rooms.lily.preview'),
            'links_to' => localUrl('/rooms/lily'),
            'left_side' => true,
            'room_image_lg' => '/images/room-previews/lily_room_desktop.jpg',
            'room_image_sm' => '/images/room-previews/lily_room_mobile.jpg'
        ])
        <div class="max-w-md mx-auto border-b border-green-mid mt-16"></div>
    </div>
    <div class="px-4 pt-12">
        <p class="heading-text mb-4 text-green-main text-center">{{ trans('rooms.index.types.luxury') }}</p>
        @include('front.rooms.preview', [
            'room' => trans('rooms.sunflower.preview'),
            'links_to' => localUrl('/rooms/sunflower'),
            'left_side' => false,
            'room_image_lg' => '/images/room-previews/sunflower_room_desktop.jpg',
            'room_image_sm' => '/images/room-previews/sunflower_room_mobile.jpg'
        ])
        @include('front.rooms.preview', [
            'room' => trans('rooms.orchid.preview'),
            'links_to' => localUrl('/rooms/orchid'),
            'left_side' => true,
            'room_image_lg' => '/images/room-previews/orchid_room_desktop.jpg',
            'room_image_sm' => '/images/room-previews/orchid_room_mobile.jpg'
        ])
        <div class="max-w-md mx-auto border-b border-green-mid mt-16"></div>
    </div>
    <div class="px-4 pt-12">
        <p class="heading-text mb-4 text-green-main text-center">{{ trans('rooms.index.types.vip') }}</p>
        @include('front.rooms.preview', [
            'room' => trans('rooms.plum.preview'),
            'links_to' => localUrl('/rooms/plum'),
            'left_side' => false,
            'room_image_lg' => '/images/room-previews/plum_room_desktop.jpg',
            'room_image_sm' => '/images/room-previews/plum_room_mobile.jpg'
        ])

        <div class="max-w-md mx-auto border-b border-green-mid mt-16"></div>
    </div>
    <div class="px-4 pt-12">
        <p class="heading-text mb-4 text-green-main text-center">{{ trans('rooms.index.types.duplex') }}</p>
        @include('front.rooms.preview', [
            'room' => trans('rooms.frangipani.preview'),
            'links_to' => localUrl('/rooms/frangipani'),
            'left_side' => true,
            'room_image_lg' => '/images/room-previews/frangipani_room_desktop.jpg',
            'room_image_sm' => '/images/room-previews/frangipani_room_mobile.jpg'
        ])
        <div class="max-w-md mx-auto border-b border-green-mid mt-16"></div>
    </div>
    <div class="px-4 pt-12">
        <p class="heading-text mb-4 text-green-main text-center">{{ trans('rooms.index.types.villa') }}</p>
        @include('front.rooms.preview', [
            'room' => trans('rooms.villa.preview'),
            'links_to' => localUrl('/rooms/villa'),
            'left_side' => false,
            'room_image_lg' => '/images/room-previews/villa_room_desktop.jpg',
            'room_image_sm' => '/images/room-previews/villa_room_mobile.jpg'
        ])
        <div class="max-w-md mx-auto border-b border-green-mid mt-16"></div>
    </div>
@endsection