@extends('front.base')

@section('content')
    <x-page-photo-banner
        title="{{ trans('accommodation.prices.banner_title') }}"
        text="{{ trans('accommodation.prices.banner_text') }}"
        img-large="/images/page-banners/pricelist_banner.jpg"
        img-small="/images/page-banners/pricelist_banner_mobile.jpg"
    ></x-page-photo-banner>

    <div class="my-12">
        <p class="text-center type-b7">{{ trans('accommodation.all_prices_nt') }}</p>
    </div>

    <div class="my-20 max-w-5xl mx-auto px-6">
        @foreach($times as $time)
            <div class="my-20">
                <p class="type-h0 text-green-main text-center">{{ $time['title'] }}</p>

                <table class="w-full border-collapse  border-green-main my-12 type-b1" data-usher>
                    <thead>
                    <tr class="bg-green-main text-cream-light">
                        <th class="p-2 text-left pl-4">{{ trans('accommodation.prices.table.room') }}</th>
                        <th class="p-2 text-center">{{ trans('accommodation.prices.table.sleeps') }}</th>
                        <th class="p-2 text-right pr-4">{{ trans('accommodation.prices.table.price') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($time['rooms'] as $room)
                        <tr class="text-green-main hover:bg-green-softest">
                            <td class="w-1/3 p-2 text-left pl-4">{{ $room['name'] }}</td>
                            <td class="w-1/3 p-2 text-center">{{ $room['guests'] }}</td>
                            <td class="w-1/3 p-2 text-right pr-4">{{ $room['price'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <table class="w-full border-collapse  border-green-main my-12 type-b1" data-usher>
                    <thead>
                    <tr class="bg-green-main text-cream-light">
                        <th class="p-2 text-left pl-4">{{ trans('accommodation.prices.table.building') }}</th>
                        <th class="p-2 text-center">{{ trans('accommodation.prices.table.rooms_guests') }}</th>
                        <th class="p-2 text-right pr-4">{{ trans('accommodation.prices.table.price') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($time['buildings'] as $building)
                        <tr class="text-green-main hover:bg-green-softest">
                            <td class="w-1/5 text-left p-2 pl-4">{{ $building['name'] }}</td>
                            <td class="w-3/5 p-2 text-center">{{ $building['rooms'] }}/{{ $building['guests'] }}</td>
                            <td class="w-1/5 p-2 text-right pr-4">{{ $building['price'] }}</td>
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
