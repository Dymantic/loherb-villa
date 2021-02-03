@extends('front.base')

@section('content')
    <x-page-photo-banner
        title="Loherb Villa Rooms"
        text="Different types rooms are available at Villa Loherb to suit the all the needs and occasions for your perfect getaway."
        img-large="/images/room-banners/plum.jpg"
    ></x-page-photo-banner>

    <div class="max-w-5xl px-6 lg:px-0 mx-auto">
        @foreach($roomTypes as $type => $rooms)
            <div class="my-20" id="{{$type}}">
                <p class="type-h0 text-green-main">{{ trans("rooms.types.{$type}") }}</p>
                <div class="large-slider max-w-5xl mx-auto">
                    <div data-flickity='{"imagesLoaded": "true"}'>
                        @foreach($rooms as $room)
                                <x-building-room-card :room="$room" side="right"></x-building-room-card>
                        @endforeach
                    </div>
                </div>
                <div class="relative py-12 mt-20">
                    <div class="border-b border-green-main"></div>
                    <div class="flex items-center justify-center h-12 w-12 bg-white absolute top-50 left-50 transform -translate-x-1/2 -translate-y-1/2">
                        @include('svgs.logos.leaf')
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
