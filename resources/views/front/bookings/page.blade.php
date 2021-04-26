@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ trans('bookings.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/villa_facebook.jpg'),
        'ogTitle' => trans('bookings.title'),
        'ogDescription' => trans('bookings.description')
    ])

    <style>
        #lang_currency_switchers {
            display: none;
        }
    </style>
@endsection

@section('content')
    <iframe src="https://hotels.cloudbeds.com/{{ $iframe_lang ?? 'en' }}/reservation/T247pq#checkin={{ $checkIn }}&checkout={{ $checkOut }}" class="w-screen min-h-screen"
            frameborder="0" id="mybookings-frame"></iframe>
@endsection
