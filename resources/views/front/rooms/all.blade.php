@extends('front.base')

@section('content')
    <x-page-photo-banner
        title="{{ trans('accommodation.all_rooms.banner_title') }}"
        text="{{ trans('accommodation.all_rooms.banner_text') }}"
        img-large="/images/room-banners/plum.jpg"
    ></x-page-photo-banner>

    <div class="max-w-5xl px-6 lg:px-0 mx-auto">
        @foreach($roomTypes as $type => $rooms)
            <div class="my-20" id="{{$type}}">
                <p class="type-h0 text-green-main">{{ trans("rooms.types.{$type}") }}</p>
                @if(count($rooms) > 1)
                <div class="slide-show no-arrows-small dark arrows-wide max-w-5xl mx-auto">
                    <div data-flickity='{"imagesLoaded": "true"}'>
                        @foreach($rooms as $room)
                                <x-building-room-card :showType="false" :showBuilding="true" :room="$room" side="right"></x-building-room-card>
                        @endforeach
                    </div>
                </div>
                @else
                    <x-building-room-card :showType="false" :showBuilding="true" :room="$rooms[0]" side="right"></x-building-room-card>
                @endif

                @if(!$loop->last)
                <div class="relative py-8 md:py-12 mt-12 md:mt-20">
                    <div class="border-b border-green-main"></div>
                    <div class="flex items-center justify-center h-12 w-12 bg-white absolute top-50 left-50 transform -translate-x-1/2 -translate-y-1/2">
                        @include('svgs.logos.leaf')
                    </div>
                </div>
                @endif
            </div>

        @endforeach
    </div>

    @include('front.pricing.entire-villa-pitch')
@endsection
