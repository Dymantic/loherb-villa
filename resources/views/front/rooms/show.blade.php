@extends('front.base', ['bodyClass' => $room['slug'] . '-room'])

@section('title')
    {{ $room['name'] }} - LOHERB VILLA
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/room-banners/' . $room_key . '.jpg'),
        'ogTitle' => $room['name'] . ' - LOHERB VILLA',
        'ogDescription' => $room['description'],
    ])
@endsection

@section('content')
    <x-page-photo-banner title="{{ $room['name'] }}"
{{--                         text="{{ $building->description() }}"--}}
                         img-large="{{ $room['banner_image'] }}"
{{--                         icon="{{ $building->icon() }}"--}}
        :room-info="$room"
    ></x-page-photo-banner>
{{--    <div class="banner-height room-banner flex justify-center items-center" style="background-image: url({{ $room['banner_image'] }});">--}}
{{--        <p class="font-sans text-3xl bg-opaque py-4 px-8 text-green-main">{{ trans($room['name']) }}</p>--}}
{{--    </div>--}}
    @component('front.components.info-section', ['title' => $room['heading']])
        <p class="my-8 body-text text-green-main text-center">{{ $room['description'] }}</p>
    @endcomponent
    <div class="p-0 lg:p-20 room-gallery large-slider">
        <div data-flickity='{"imagesLoaded": true, "autoPlay": 5000}'
             class="w-full mx-auto slide-show">
            @foreach($room['images'] as $image)
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
        <p class="type-h1 text-center text-green-main mb-12">{{ trans('rooms.show.info_heading') }}</p>

        <div class="max-w-3xl mx-auto mb-20 flex flex-wrap">
            @foreach($room['services'] as $service)
                <div class="w-full md:w-1/2">
                    <div class="w-64 max-w-full mx-auto flex items-center text-green-main my-1">
                    <span>
                    @include("svgs.services.{$service}")
                    </span>
                        <span class="ml-4">{{ trans("services.{$service}") }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="type-h1 text-center text-green-main mb-12 mt-20">{{ trans('rooms.show.price_heading') }}</p>
        <p class="text-center reviews-text italic text-green-main mt-8">{{ trans('rooms.show.price_disclaimer') }}</p>

        <table class="mt-20 max-w-3xl mx-auto w-full border-collapse  border-green-main type-b1">
            <thead>
            <tr class="bg-green-main text-cream-light">
                <th class="p-2">{{ trans('rooms.show.pricing.time') }}</th>
                <th class="p-2">{{ trans('rooms.show.pricing.price') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-green-main hover:bg-green-softest">
                <td class="w-1/2 p-2 pt-4 text-center">{{ trans('rooms.show.price_times.weekdays') }}</td>
                <td class="w-1/2 p-2 pt-4 text-center">{{ $room['prices']['weekdays'] }}</td>
            </tr>
            <tr class="text-green-main hover:bg-green-softest">
                <td class="w-1/2 p-2 text-center">{{ trans('rooms.show.price_times.holidays') }}</td>
                <td class="w-1/2 p-2 text-center">{{ $room['prices']['weekends'] }}</td>
            </tr>
            <tr class="text-green-main hover:bg-green-softest">
                <td class="w-1/2 p-2 text-center">{{ trans('rooms.show.price_times.vacation') }}</td>
                <td class="w-1/2 p-2 text-center">{{ $room['prices']['vacation'] }}</td>
            </tr>
            <tr class="text-green-main hover:bg-green-softest">
                <td class="w-1/2 p-2 text-center">{{ trans('rooms.show.price_times.chinese_new_year') }}</td>
                <td class="w-1/2 p-2 text-center">{{ $room['prices']['chinese_new_year'] }}</td>
            </tr>
            </tbody>
        </table>

    </section>
    @component('front.components.info-section', ['title' => trans('rooms.show.additional_header')])
        <div class="text-green-main my-8">
            <div class="flex justify-between max-w-sm w-64 mx-auto w-full">
                <p>{{ trans('rooms.show.times.check_in.label') }}</p>
                <p>{{ trans('rooms.show.times.check_in.value') }}</p>
            </div>
            <div class="flex justify-between max-w-sm w-64 mx-auto w-full">
                <p>{{ trans('rooms.show.times.check_out.label') }}</p>
                <p>{{ trans('rooms.show.times.check_out.value') }}</p>
            </div>
            <div class="flex justify-between max-w-sm w-64 mx-auto w-full">
                <p>{{ trans('rooms.show.times.breakfast.label') }}</p>
                <p>{{ trans('rooms.show.times.breakfast.value') }}</p>
            </div>
            <div class="flex justify-between max-w-sm w-64 mx-auto w-full">
                <p>{{ trans('rooms.show.times.tea.label') }}</p>
                <p>{{ trans('rooms.show.times.tea.value') }}</p>
            </div>
        </div>
        <div class="flex flex-col items-center">
            @foreach(trans('rooms.show.warnings') as $warning)
                <p class="mb-0 text-center px-8 text-green-main">{{ $warning }}</p>
            @endforeach
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
            <p class="text-center body-text">{{ trans('rooms.show.pricing.condition_two') }}</p>
            <p class="text-center body-text">{{ trans('rooms.show.pricing.condition_three') }}</p>
        </div>
        <div class="flex justify-center">
            <a href="{{ localUrl('/book') }}"
               class="btn btn-green no-underline mt-20">{{ trans('rooms.index.buttons.book') }}</a>
        </div>
    </section>


@endsection

@section('bodyscripts')
    @include('front.partials.room-jsonld', ['occupancy' => $room['occupancy'], 'image' => $room['banner_image']])
@endsection
