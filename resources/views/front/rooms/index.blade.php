@extends('front.base')

@section('content')
    <div class="px-4 pb-12 pt-24 bg-green-soft">
        <div class="max-w-md mx-auto flex flex-col items-center">
            <p class="heading-text mb-4 text-green-main">{{ trans('rooms.index.heading') }}</p>
            <span>
                @include('svgs.logos.leaf')
            </span>
            <p class="my-8 body-text text-green-main">{{ trans('rooms.index.subheading') }}</p>
            <span class="mt-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="fill-current"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z"/></svg>
            </span>
        </div>
    </div>
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