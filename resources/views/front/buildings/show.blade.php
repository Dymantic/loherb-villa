@extends('front.base')

@section('content')
    <x-page-photo-banner title="{{ $building->name() }}"
                         text="{{ $building->description() }}"
                         img-large="{{ $building->bannerLarge() }}"
                         icon="{{ $building->icon() }}"
    ></x-page-photo-banner>

    <x-horizontal-scroll-menu :jump="true" :options="$building->availableRoomTypes()"></x-horizontal-scroll-menu>

    <div class="max-w-5xl mx-auto px-4">
        @php $itx = 0 @endphp
        @foreach($building->presentedRooms() as $type => $rooms)
            <div id="{{$type}}">
                @foreach($rooms as $room)
                    <x-building-room-card :room="$room" side="{{ $itx % 2 ? 'left' : 'right' }}"></x-building-room-card>
                    @php $itx++ @endphp
                @endforeach
            </div>
        @endforeach

    </div>

    @include('front.pricing.entire-villa-pitch')


@endsection
