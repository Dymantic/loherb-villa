@extends('front.base')

@section('content')
    <x-page-photo-banner title="{{ $building->name() }}"
                         text="{{ $building->description() }}"
                         img-large="{{ $building->bannerLarge() }}"
                         icon="{{ $building->icon() }}"
    ></x-page-photo-banner>

    <x-horizontal-scroll-menu :jump="true" :options="$building->availableRoomTypes()"></x-horizontal-scroll-menu>

    <div class="max-w-5xl mx-auto px-4">
        @foreach($building->presentedRooms() as $type => $rooms)
            <div id="{{$type}}">
                @foreach($rooms as $room)
                    <x-building-room-card :room="$room" side="{{ $loop->odd ? 'right' : 'left' }}"></x-building-room-card>
                @endforeach
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
