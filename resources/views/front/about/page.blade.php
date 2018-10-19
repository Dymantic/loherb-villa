@extends('front.base')

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
    <div class="bg-green-soft px-4 pt-24 pb-12">
        <div class="max-w-md mx-auto flex flex-col items-center">
            <p class="heading-text mb-4 text-green-main">{{ trans('about.section_one.heading') }}</p>
            <span>
                @include('svgs.logos.leaf')
            </span>
            <p class="my-8 body-text text-green-main">{{ trans('about.section_one.content') }}</p>
        </div>
    </div>
    <div class="section-height about-one"></div>
    <div class="bg-green-soft px-4 py-12">
        <div class="max-w-md mx-auto flex flex-col items-center">
            <p class="heading-text mb-4 text-green-main">{{ trans('about.section_two.heading') }}</p>
            <span>
                @include('svgs.logos.leaf')
            </span>
            <p class="my-8 body-text text-green-main">{{ trans('about.section_two.content') }}</p>
        </div>
    </div>
    <div class="section-height about-two"></div>
    <div class="bg-green-soft px-4 py-12">
        <div class="max-w-md mx-auto flex flex-col items-center">
            <p class="heading-text mb-4 text-green-main">{{ trans('about.section_three.heading') }}</p>
            <span>
                @include('svgs.logos.leaf')
            </span>
            <p class="my-8 body-text text-green-main">{{ trans('about.section_three.content') }}</p>
        </div>
    </div>
    <div class="section-height about-three"></div>
@endsection