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
        <p class="my-8 body-text text-green-main text-center">{{ trans($room['text_content']) }}</p>
    @endcomponent
    <div class="p-0 lg:p-20 room-gallery large-slider">
        <div data-flickity='{"imagesLoaded": true, "autoPlay": 5000}'
             class="w-full mx-auto slide-show">
            @foreach($room['gallery_images'] as $image)
                <picture class="w-full block mx-auto">
                    <source srcset="{{ $image['small'] }}"
                            media="(max-width: 576px)">
                    <source srcset="{{ $image['full'] }}"
                            media="(min-width: 577px) and (max-width: 900px)">
                    <source srcset="{{ $image['wide'] }}"
                            media="(min-width: 901px)">
                    <img srcset="{{ $image['full'] }}"
                         alt="The {{ trans($room['name']) }} room">
                </picture>
            @endforeach
        </div>
    </div>

    <section class="reg-section-space">
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

        <div class="text-green-main my-8">
            <p class="mb-8 text-green-main text-center font-heading">{{ trans('rooms.show.additional_header') }}</p>
            <div class="flex justify-between max-w-xxs mx-auto w-full">
                <p>{{ trans('rooms.show.times.check_in.label') }}</p>
                <p>{{ trans('rooms.show.times.check_in.value') }}</p>
            </div>
            <div class="flex justify-between max-w-xxs mx-auto w-full">
                <p>{{ trans('rooms.show.times.check_out.label') }}</p>
                <p>{{ trans('rooms.show.times.check_out.value') }}</p>
            </div>
            <div class="flex justify-between max-w-xxs mx-auto w-full">
                <p>{{ trans('rooms.show.times.breakfast.label') }}</p>
                <p>{{ trans('rooms.show.times.breakfast.value') }}</p>
            </div>
            <div class="flex justify-between max-w-xxs mx-auto w-full">
                <p>{{ trans('rooms.show.times.tea.label') }}</p>
                <p>{{ trans('rooms.show.times.tea.value') }}</p>
            </div>
            {{--<p class="mb-0 text-green-main w-48">{{ trans('rooms.show.check_times.in') }}</p>--}}
            {{--<p class="mb-0 text-green-main w-48">{{ trans('rooms.show.check_times.out') }}</p>--}}
            {{--<p class="mb-0 text-green-main w-48">{{ trans('rooms.show.breakfast_time') }}</p>--}}
            {{--<p class="mb-8 text-green-main w-48">{{ trans('rooms.show.tea_time') }}</p>--}}

        </div>
        <div class="flex flex-col items-center">
            <p class="mb-0 text-center px-8 text-green-main">{{ trans('rooms.show.warnings.line_one') }}</p>
            <p class="mb-0 text-center px-8 text-green-main">{{ trans('rooms.show.warnings.line_two') }}</p>
            <p class="mb-0 text-center px-8 text-green-main">{{ trans('rooms.show.warnings.line_three') }}</p>
        </div>


    </section>
    @component('front.components.info-section', ['title' => trans('rooms.show.price_heading')])
        <p class="text-center reviews-text italic text-green-main mt-8">{{ trans('rooms.show.price_disclaimer') }}</p>
        <div class="w-full mt-20">
            <ul class="list-reset font-heading text-green-main max-w-sm mx-auto w-full border border-green-mid">
                <li class="flex justify-between items-center border-b border-green-mid">
                    <span class="font-black w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.weekdays') }}</span>
                    <span class="w-1/2 text-center">{{ $room['prices']['weekday'] }}</span>
                </li>
                <li class="flex justify-between items-center border-b border-green-mid">
                    <span class="font-black w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.weekends') }}</span>
                    <span class="w-1/2 text-center">{{ $room['prices']['weekends'] }}</span>
                </li>
                <li class="flex justify-between items-center border-b border-green-mid">
                    <span class="font-black w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.holidays') }}</span>
                    <span class="w-1/2 text-center">{{ $room['prices']['holidays'] }}</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="font-black w-1/2 text-center border-r py-2 border-green-mid">{{ trans('rooms.show.price_times.chinese_new_year') }}</span>
                    <span class="w-1/2 text-center">{{ $room['prices']['chinese_new_year'] }}</span>
                </li>
            </ul>
        </div>

    @endcomponent

    <section class="bg-green-soft px-8 pb-20">
        <div class="text-green-main">
            <div class="flex w-full">
                <p class="w-1/2 text-right mr-2">{{ trans('rooms.show.pricing.line_one.label') }}</p>
                <p class="w-1/2 ml-2">{{ trans('rooms.show.pricing.line_one.value') }}</p>
            </div>
            <div class="flex w-full">
                <p class="w-1/2 text-right mr-2">{{ trans('rooms.show.pricing.line_two.label') }}</p>
                <p class="w-1/2 ml-2">{{ trans('rooms.show.pricing.line_two.value') }}</p>
            </div>
            <div class="flex w-full">
                <p class="w-1/2 text-right mr-2">{{ trans('rooms.show.pricing.line_three.label') }}</p>
                <p class="w-1/2 ml-2">{{ trans('rooms.show.pricing.line_three.value') }}</p>
            </div>
            <div class="flex w-full">
                <p class="w-1/2 text-right mr-2">{{ trans('rooms.show.pricing.line_four.label') }}</p>
                <p class="w-1/2 ml-2">{{ trans('rooms.show.pricing.line_four.value') }}</p>
            </div>
            <p class="text-center body-text mt-4">{{ trans('rooms.show.pricing.condition') }}</p>
        </div>
        <div class="flex justify-center">
            <a href="{{ localUrl('/book') }}"
               class="btn btn-green no-underline mt-20">{{ trans('rooms.index.buttons.book') }}</a>
        </div>
    </section>


@endsection

@section('bodyscripts')
    @include('front.partials.room-jsonld', ['occupancy' => $room['occupancy'], 'image' => $room['main_image']])
@endsection