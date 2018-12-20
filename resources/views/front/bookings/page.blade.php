@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ trans('about.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '',
        'ogTitle' => trans('about.title'),
        'ogDescription' => trans('about.description')
    ])
@endsection

@section('content')
    <iframe src="https://hotels.cloudbeds.com/reservation/T247pq#checkin={{ $checkIn }}&checkout={{ $checkOut }}" class="w-screen min-h-screen"
            frameborder="0"></iframe>
@endsection