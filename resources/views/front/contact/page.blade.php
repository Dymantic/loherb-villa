@extends('front.base')

@section('title')
    {{ trans('contact.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '',
        'ogTitle' => trans('contact.title'),
        'ogDescription' => trans('contact.description')
    ])
@endsection

@section('content')
    <div class="bg-green-soft px-4 pt-24 pb-12">
        <div class="max-w-md mx-auto flex flex-col items-center">
            <p class="heading-text mb-4 text-green-main">{{ trans('contact.intro.heading') }}</p>
            <span>
                @include('svgs.logos.leaf')
            </span>
            <p class="my-8 body-text text-green-main">{{ trans('contact.intro.content') }}</p>
        </div>
    </div>
    <contact-form class="mt-20" :trans='@json($form_text)'></contact-form>
    <div class="my-20">
        <p class="text-center">
            <a class="tracking-wide no-underline text-green-main" href="">service@loherb.com.tw</a>
        </p>
        <p class="text-center">
            <a class="tracking-wide no-underline text-green-main" href="">+886-3-959-5685</a>
        </p>
        <p class="text-center tracking-wide text-green-main">{{ trans('footer.address') }}</p>
    </div>
@endsection