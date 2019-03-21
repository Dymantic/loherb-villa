@extends('front.base', ['bodyClass' => 'home-page'])

@section('title')
    {{ trans('homepage.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/villa_facebook.jpg'),
        'ogTitle' => trans('homepage.title'),
        'ogDescription' => trans('homepage.description')
    ])
@endsection

@section('content')
    @include('front.home.banner')
    @include('front.partials.booking-form')
    @include('front.home.comfort-elegance')
    @include('front.home.review-banner', ['review' => $review])
    @include('front.home.getaway')
    @include('front.home.night-view')
    @include('front.home.eco-friendly')
    @include('front.home.journal')
    @include('front.home.reviews', ['reviews' => $reviews])
    @include('front.home.weather', ['weather' => $weather])
    @include('front.home.cuisine')
    @include('front.home.instagram', ['instagrams' => $instagrams])

@endsection

@section('bodyscripts')
    @include('front.partials.hotel-jsonld')


@endsection