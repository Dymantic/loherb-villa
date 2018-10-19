@extends('front.base', ['bodyClass' => $room['body_class']])

@section('title')
    {{ trans($room['name']) }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/room-banners/' . $room_key . '.jpg'),
        'ogTitle' => trans(trans($room['name'])),
        'ogDescription' => trans('rooms.' . $room_key . '.preview.description')
    ])
@endsection

@section('content')
    <div class="banner-height room-banner flex justify-center items-center">
        <p class="font-sans text-3xl bg-opaque p-4 text-green-main">{{ trans($room['name']) }}</p>
    </div>
    <div class="px-4 py-12 bg-green-soft">
        <div class="max-w-md mx-auto flex flex-col items-center">
            <p class="heading-text mb-4 text-green-main">{{ trans($room['text_heading']) }}</p>
            <span>
                @include('svgs.logos.leaf')
            </span>
            <p class="my-8 body-text text-green-main">{{ trans($room['text_content']) }}</p>
        </div>
    </div>
    <div data-flickity>
        @foreach($room['gallery_images'] as $image)
            <img src="{{ $image['full'] }}" class="banner-image"
                 alt="a view of the {{ trans($room['name']) }}">
        @endforeach
    </div>
    <div class="px-4 py-12">
        <p class="heading-text text-center text-green-main mb-12">{{ trans('rooms.show.info_heading') }}</p>
        <p class="mb-12 text-green-main text-center">{{ trans('rooms.show.check_times') }}</p>
        <div class="max-w-xl mx-auto flex flex-wrap">
            @foreach($room['services'] as $service)
            <div class="w-full md:w-1/2">
                <div class="w-48 max-w-full mx-auto flex items-center text-green-main">
                    <span>
                    @include("svgs.services.{$service}")
                </span>
                    <span class="ml-2">{{ trans("services.{$service}") }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="px-4 py-12 bg-green-soft">
        <div class="max-w-md mx-auto flex flex-col items-center">
            <p class="heading-text mb-4 text-green-main">{{ trans('rooms.show.price_heading') }}</p>
            <span>
                @include('svgs.logos.leaf')
            </span>
            <p class="text-center font-serif italic text-green-main my-8">{{ trans('rooms.show.price_disclaimer') }}</p>
            <div class="w-full">
                <ul class="list-reset font-heading text-green-main max-w-sm mx-auto w-full border border-green-mid">
                    <li class="flex justify-between items-center border-b border-green-mid">
                        <span class="w-1/2 text-center border-r border-green-mid">{{ trans('rooms.show.price_times.weekdays') }}</span>
                        <span class="w-1/2 text-center">{{ $room['prices']['weekday'] }}</span>
                    </li>
                    <li class="flex justify-between items-center border-b border-green-mid">
                        <span class="w-1/2 text-center border-r border-green-mid">{{ trans('rooms.show.price_times.weekends') }}</span>
                        <span class="w-1/2 text-center">{{ $room['prices']['weekends'] }}</span>
                    </li>
                    <li class="flex justify-between items-center border-b border-green-mid">
                        <span class="w-1/2 text-center border-r border-green-mid">{{ trans('rooms.show.price_times.holidays') }}</span>
                        <span class="w-1/2 text-center">{{ $room['prices']['holidays'] }}</span>
                    </li>
                    <li class="flex justify-between items-center border-b border-green-mid">
                        <span class="w-1/2 text-center border-r border-green-mid">{{ trans('rooms.show.price_times.chinese_new_year') }}</span>
                        <span class="w-1/2 text-center">{{ $room['prices']['chinese_new_year'] }}</span>
                    </li>
                    <li class="flex justify-between items-center">
                        <span class="w-1/2 text-center border-r border-green-mid">{{ trans('rooms.show.price_times.add_person') }}</span>
                        <span class="w-1/2 text-center">+{{ $room['prices']['add_person'] }}</span>
                    </li>
                </ul>
            </div>
            <a href=""
               class="btn btn-green no-underline mt-12">Book Now</a>
        </div>
    </div>
@endsection