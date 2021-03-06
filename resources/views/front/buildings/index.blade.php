@extends('front.base')

@section('title')
    {{ trans('rooms.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/villa_facebook.jpg'),
        'ogTitle' => trans('rooms.title'),
        'ogDescription' => trans('rooms.description')
    ])
@endsection

@section('content')
    <x-page-photo-banner title="{{ trans('accommodation.buildings.overview.title') }}"
                         text="{{ trans('accommodation.buildings.overview.introduction') }}"
                         img-large="/images/page-banners/building_overview_banner.jpg"
                         img-small="/images/page-banners/building_overview_banner_mobile.jpg"
    ></x-page-photo-banner>

    <x-horizontal-scroll-menu :jump="true" :options="$options"></x-horizontal-scroll-menu>

    <div class="my-12 md:my-20 max-w-5xl mx-auto px-6 lg:px-0 divide-y divide-green-main">
        @foreach($buildings as $building)
            <div class="block md:flex justify-between items-center mb-20 relative @if(!$loop->first) pt-20 @endif">
                <div id="{{ $building->key() }}" class="absolute -top-20"></div>
                <div class="w-full md:w-2/3 {{ $loop->odd ? 'order-1' : 'order-2' }}">
                    <img src="{{ $building->titleImage() }}"
                         alt="{{ $building->name(app()->getLocale()) }}">
                </div>
                <div class="text-green-main w-full md:w-1/3 {{ $loop->odd ? 'order-2 md:pl-12' : 'order-1 md:pr-12' }} pt-8 md:pt-0" data-usher>
                    @include($building->icon(), ['classes' => 'h-8 mb-1'])
                    <p class="type-h2">{{ $building->name(app()->getLocale()) }}</p>
                    <p class="type-b1 my-1 md:my-3">{{ $building->description() }}</p>
                    <div class="md:border-t border-green-main mb-3 md:pt-3 flex items-center">
                        @include('svgs.icons.building_rooms', ['classes' => 'h-5 mr-2'])
                        <p class="type-b7 pt-2">{{ $building->roomCounts() }}</p>
                    </div>
                    <div class="mt-6">
                        <a class="type-a1 inline-button btn-green-ghost" href="{{ $building->url() }}">{{ trans('accommodation.buildings.see_rooms_button') }}</a>
                    </div>


                </div>
            </div>
        @endforeach
    </div>

    @include('front.pricing.entire-villa-pitch')
@endsection
