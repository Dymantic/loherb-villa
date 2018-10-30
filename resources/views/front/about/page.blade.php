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