@extends('front.base')

@section('content')
    <x-page-photo-banner title="{{ trans('accommodation.buildings.overview.title') }}"
                         text="{{ trans('accommodation.buildings.overview.introduction') }}"
                         img-large="/images/buildings_banner_16_9.jpg"
                         icon="svgs.logos.simple"
    ></x-page-photo-banner>

    <x-horizontal-scroll-menu :jump="true" :options="$options"></x-horizontal-scroll-menu>

    <div class="my-20 max-w-5xl mx-auto px-6 lg:px-0 divide-y divide-green-main">
        @foreach($buildings as $building)
            <div class="block md:flex justify-between items-center my-20 relative pt-20">
                <div id="{{ $building->key() }}" class="absolute -top-20"></div>
                <div class="w-full md:w-2/3 {{ $loop->odd ? 'order-1' : 'order-2' }}">
                    <img src="{{ $building->titleImage() }}"
                         alt="{{ $building->name() }}">
                </div>
                <div class="text-green-main w-full md:w-1/3 {{ $loop->odd ? 'order-2 md:pl-12' : 'order-1 md:pr-12' }} pt-8 md:pt-0">
                    @include($building->icon(), ['classes' => 'h-8 mb-1'])
                    <p class="type-h2">{{ $building->name() }}</p>
                    <p class="type-b1 my-3">{{ $building->description() }}</p>
                    <div class="border-t border-green-main mb-3 pt-3 flex items-center">
                        @include('svgs.icons.building_rooms', ['classes' => 'h-5 mr-2'])
                        <p class="type-b7 pt-2">{{ $building->roomCounts() }}</p>
                    </div>
                    <div class="mt-6">
                        <a class="type-a1 inline-button btn-green-ghost" href="{{ $building->url() }}">See Rooms</a>
                    </div>


                </div>
            </div>
        @endforeach
    </div>

    <div class="my-20 px-6">
        <div class="border-b border-green-main max-w-5xl mx-auto mb-20"></div>
        <div class="max-w-xl mx-auto px-6 flex flex-col items-center text-green-main">
            <p class="type-h0">{{ trans('accommodation.entire_villa.heading') }}</p>
            <p class="type-b1 mt-6 mb-12 text-center">{{ trans('accommodation.entire_villa.text') }}</p>
            <a href="/pricing" class="type-a1 btn btn-green-ghost">Learn More</a>
        </div>
    </div>
@endsection
