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
            @endforeach
        </div>
    </div>

    <div class="reg-section-space">
        <p class="heading-text text-center text-green-main mb-12">{{ trans('rooms.show.info_heading') }}</p>

        <div class="max-w-xl mx-auto mb-20 flex flex-wrap">
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

        <p class="mb-4 text-green-main text-center font-heading">{{ trans('rooms.show.additional_header') }}</p>
        <p class="mb-0 text-green-main text-center">{{ trans('rooms.show.check_times.in') }}</p>
        <p class="mb-0 text-green-main text-center">{{ trans('rooms.show.check_times.out') }}</p>
        <p class="mb-0 text-green-main text-center">{{ trans('rooms.show.breakfast_time') }}</p>
        <p class="mb-8 text-green-main text-center">{{ trans('rooms.show.tea_time') }}</p>
        <p class="mb-0 text-green-main text-center">{{ trans('rooms.show.warnings.drugs') }}</p>
        <p class="mb-0 text-green-main text-center">{{ trans('rooms.show.warnings.pets') }}</p>
        <p class="mb-0 text-green-main text-center">{{ trans('rooms.show.warnings.identity') }}</p>
    </div>
    @component('front.components.info-section', ['title' => trans('rooms.show.price_heading')])
        <p class="text-center font-serif italic text-green-main mt-8">{{ trans('rooms.show.price_disclaimer') }}</p>
        <div class="w-full my-20">
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
                <li class="flex justify-between items-center">
                    <span class="w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.chinese_new_year') }}</span>
                    <span class="w-1/2 text-center">{{ $room['prices']['chinese_new_year'] }}</span>
                </li>
            </ul>
        </div>
        <p class="mb-0 text-green-main text-center">{{ trans('rooms.show.pricing_notes.person') }}</p>
        <p class="mb-0 text-green-main text-center">{{ trans('rooms.show.pricing_notes.beds') }}</p>
        <p class="mb-0 text-green-main text-center">{{ trans('rooms.show.pricing_notes.pickup') }}</p>
        <a href=""
           class="btn btn-green no-underline mt-20">Book Now</a>
    @endcomponent

@endsection