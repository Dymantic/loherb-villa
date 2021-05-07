@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
{{ trans('about.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/villa_facebook.jpg'),
        'ogTitle' => trans('about.title'),
        'ogDescription' => trans('about.description')
    ])
@endsection

@section('content')
    <x-page-photo-banner
        title="{{ trans('about.banner.title') }}"
        text="{{ trans('about.banner.text') }}"
        img-large="/images/page-banners/about_page.jpg"
        img-small="/images/page-banners/about_page_mobile.jpg"
    ></x-page-photo-banner>
    @component('front.components.info-section', ['title' => ''])
        <p class="my-12 body-text text-green-main">{{ trans('about.section_one.content') }}</p>
    @endcomponent
    <div class="section-height about-one"></div>
    @component('front.components.info-section', ['title' => trans('about.section_two.heading')])
        <p class="my-12 body-text text-green-main">{{ trans('about.section_two.content') }}</p>
    @endcomponent
    <div class="section-height about-two"></div>
    @component('front.components.info-section', ['title' => trans('about.section_three.heading')])
        <p class="my-12 body-text text-green-main">{{ trans('about.section_three.content') }}</p>
    @endcomponent
    <div class="section-height about-three"></div>
@endsection
