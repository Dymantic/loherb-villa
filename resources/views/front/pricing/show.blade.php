@extends('front.base')

@section('content')
    <x-page-photo-banner
        title="{{ trans('accommodation.prices.banner_title') }}"
        text="{{ trans('accommodation.prices.banner_text') }}"
        img-large="/images/lorem/banners/test_9.jpg"
    ></x-page-photo-banner>

    <div class="my-12">
        <p class="text-center type-b3">{{ trans('accommodation.all_prices_nt') }}</p>
    </div>

    <div class="my-20 max-w-5xl mx-auto px-6">
        @foreach($times as $time)
            <div class="my-20">
                <p class="type-h0 text-green-main text-center">{{ $time['title'] }}</p>

                <table class="w-full border-collapse border border-green-main my-12 type-h1">
                    <thead>
                    <tr class="bg-green-main text-cream-light">
                        <th class="p-2">Room</th>
                        <th class="p-2">Sleeps</th>
                        <th class="p-2">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($time['rooms'] as $room)
                        <tr class="text-green-main hover:bg-green-soft">
                            <td class="w-2/5 p-2 text-center">{{ $room['name'] }}</td>
                            <td class="w-1/5 p-2 text-center">{{ $room['guests'] }}</td>
                            <td class="w-2/5 p-2 text-center">{{ $room['price'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <table class="w-full border-collapse border border-green-main my-12 type-h1">
                    <thead>
                    <tr class="bg-green-main text-cream-light">
                        <th class="p-2">Entire Villa</th>
                        <th class="p-2">Rooms/Guests</th>
                        <th class="p-2">Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($time['buildings'] as $building)
                        <tr class="text-green-main hover:bg-green-soft">
                            <td class="w-2/5 p-2 text-center">{{ $building['name'] }}</td>
                            <td class="w-1/5 p-2 text-center">{{ $building['rooms'] }}/{{ $building['guests'] }}</td>
                            <td class="w-2/5 p-2 text-center">{{ $building['price'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        @endforeach
    </div>
    <div class="my-20">
        <p class="text-center px-6 max-w-xl mx-auto">{{ trans('accommodation.pricing_contact') }}</p>
    </div>
@endsection
