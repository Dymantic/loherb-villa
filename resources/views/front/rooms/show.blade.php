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
        <p class="font-sans text-3xl bg-opaque py-4 px-8 text-green-main">{{ trans($room['name']) }}</p>
    </div>
    @component('front.components.info-section', ['title' => trans($room['text_heading'])])
        <p class="my-8 body-text text-green-main">{{ trans($room['text_content']) }}</p>
    @endcomponent
    <div class="reg-section-space room-gallery">
        <div data-flickity
             class="w-full max-w-2xl md:w-4/5 mx-auto slide-show">
            @foreach($room['gallery_images'] as $image)
                <picture class="w-full block mx-auto">
                    <source srcset="{{ $image['small'] }}"
                            media="(max-width: 576px)">
                    <source srcset="{{ $image['full'] }}"
                            media="(min-width: 577px)">
                    <img srcset="{{ $image['full'] }}"
                         alt="The {{ trans($room['name']) }} room">
                </picture>
                {{--<img src="{{ $image['full'] }}" class="w-full block"--}}
                {{--alt="a view of the {{ trans($room['name']) }}">--}}
            @endforeach
        </div>
    </div>

    <div class="px-4 py-12">
        <p class="heading-text text-center text-green-main mb-12">{{ trans('rooms.show.info_heading') }}</p>
        <p class="mb-12 text-green-main text-center">{{ trans('rooms.show.check_times') }}</p>
        <div class="max-w-xl mx-auto flex flex-wrap">
            @foreach($room['services'] as $service)
                <div class="w-full md:w-1/2">
                    <div class="w-48 max-w-full mx-auto flex items-center text-green-main my-1">
                    <span>
                    @include("svgs.services.{$service}")
                    </span>
                        <span class="ml-4">{{ trans("services.{$service}") }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @component('front.components.info-section', ['title' => trans('rooms.show.price_heading')])
        <p class="text-center font-serif italic text-green-main my-8">{{ trans('rooms.show.price_disclaimer') }}</p>
        <div class="w-full py-12">
            <ul class="list-reset font-heading text-green-main max-w-sm mx-auto w-full border border-green-mid">
                <li class="flex justify-between items-center border-b border-green-mid">
                    <span class="w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.weekdays') }}</span>
                    <span class="w-1/2 text-center">{{ $room['prices']['weekday'] }}</span>
                </li>
                <li class="flex justify-between items-center border-b border-green-mid">
                    <span class="w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.weekends') }}</span>
                    <span class="w-1/2 text-center">{{ $room['prices']['weekends'] }}</span>
                </li>
                <li class="flex justify-between items-center border-b border-green-mid">
                    <span class="w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.holidays') }}</span>
                    <span class="w-1/2 text-center">{{ $room['prices']['holidays'] }}</span>
                </li>
                <li class="flex justify-between items-center border-b border-green-mid">
                    <span class="w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.chinese_new_year') }}</span>
                    <span class="w-1/2 text-center">{{ $room['prices']['chinese_new_year'] }}</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.add_person') }}</span>
                    <span class="w-1/2 text-center">+{{ $room['prices']['add_person'] }}</span>
                </li>
            </ul>
        </div>
        <a href=""
           class="btn btn-green no-underline mt-12">Book Now</a>
    @endcomponent

@endsection