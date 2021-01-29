@extends('front.base')

@section('content')
    <x-page-photo-banner title="{{ trans('accommodation.buildings.overview.title') }}"
                         text="{{ trans('accommodation.buildings.overview.introduction') }}"
                         img-large="/images/overhead_view_2x1.jpg"
                         icon="svgs.logos.simple"
    ></x-page-photo-banner>

    <x-horizontal-scroll-menu :options="$options"></x-horizontal-scroll-menu>

    <div class="my-20 max-w-5xl mx-auto px-6 lg:px-0">
        @foreach($buildings as $building)
            <div class="block md:flex justify-between items-center my-20">
                <div class="w-full md:w-2/3 {{ $loop->odd ? 'order-1' : 'order-2' }}">
                    <img src="{{ $building->bannerLarge() }}"
                         alt="{{ $building->name() }}">
                </div>
                <div class="text-green-main w-full md:w-1/4 {{ $loop->odd ? 'order-2' : 'order-1' }} pt-8 md:pt-0">
                    @include($building->icon(), ['classes' => 'h-8 mb-1'])
                    <p class="type-h2">{{ $building->name() }}</p>
                    <p class="type-b1 my-3">{{ $building->description() }}</p>
                    <div class="border-t border-green-main mb-3 pt-3 flex items-center">
                        @include('svgs.icons.building_rooms', ['classes' => 'h-5 mr-2'])
                        <p class="type-b7 pt-2">{{ $building->roomCounts() }}</p>
                    </div>
                    <div class="flex justify-end">
                        <a class="type-a1" href="{{ $building->url() }}">See Rooms &rarr;</a>
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
            <a href="" class="type-a1 uppercase px-4 py-1 border-2 border-green-main">Book it</a>
        </div>
    </div>
@endsection
