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
    <section class="about-banner section-height flex justify-center items-center flex-col">
        <svg xmlns="http://www.w3.org/2000/svg" height="60px" class="text-cream-light fill-current" viewBox="0 0 38.01 37.79"><path fill-rule="evenodd" d="M17.08 17.94a12.25 12.25 0 0 1 4.27-3.18c1.71-.86 3.86-1.29 5.67-2.09.55-1 1.06-1.81 1.6-2.8l.66.12a18.76 18.76 0 0 1-3 4.34 25.77 25.77 0 0 1-8.19 5.41l-1-1.8zm10.65-4.16a21.25 21.25 0 0 1-9.58 6l.75 1.3 3.76 1.65c3.51-2 5.28-3.31 5.17-7.83z"/><path fill-rule="evenodd" d="M26.4 20c-3.14 3.43-5.65.3-7.71-2.19a13.69 13.69 0 0 0-4.4-4A17.09 17.09 0 0 0 9 12a10.43 10.43 0 0 0 2.81 9.58 9.59 9.59 0 0 0 10 1.79c-5-.33-8.49-3.67-10.9-8.16 2.2 3.19 6.81 8.2 12.2 7.59A9.21 9.21 0 0 0 26.4 20z"/><path d="M25.49 3.46C35 1.7 38 13.57 33.17 21.8c-4.11 7.93-14.25 14-14.25 14A41.8 41.8 0 0 1 5.43 23.15C-.68 13.08 2.74 7.36 6.87 4.54a8 8 0 0 1 5.67-1s3 1.19 3.3-.33C16.18 1.43 14-.19 11 0a10.73 10.73 0 0 0-6.49 2.65C3.36 3.73-4.06 9.8 3 22.81c4.56 7.9 15.91 15 15.91 15S41.2 25.38 37.63 9.06C34.93-.59 26.25 0 25.08.29s-2.9 1-2.9 2.29c.41 2.56 2.36.94 3.31.88z"/></svg>
        <p class="banner-text font-black text-cream-light text-center px-4">{{ trans('about.banner.text') }}</p>
    </section>
    @component('front.components.info-section', ['title' => trans('about.section_one.heading')])
        <p class="my-8 body-text text-green-main">{{ trans('about.section_one.content') }}</p>
    @endcomponent
    <div class="section-height about-one"></div>
    @component('front.components.info-section', ['title' => trans('about.section_two.heading')])
        <p class="my-8 body-text text-green-main">{{ trans('about.section_two.content') }}</p>
    @endcomponent
    <div class="section-height about-two"></div>
    @component('front.components.info-section', ['title' => trans('about.section_three.heading')])
        <p class="my-8 body-text text-green-main">{{ trans('about.section_three.content') }}</p>
    @endcomponent
    <div class="section-height about-three"></div>
@endsection