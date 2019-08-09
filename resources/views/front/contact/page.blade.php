@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ trans('contact.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/villa_facebook.jpg'),
        'ogTitle' => trans('contact.title'),
        'ogDescription' => trans('contact.description')
    ])
@endsection

@section('content')
    <div class="bg-green-soft reg-section-space">
        <div class="max-w-md mx-auto flex flex-col items-center">
            <p class="heading-text mb-4 text-green-main">{{ trans('contact.intro.heading') }}</p>
            <span>
                @include('svgs.logos.leaf')
            </span>
            <p class="my-8 body-text text-green-main text-center">{{ trans('contact.intro.content') }}</p>
        </div>
    </div>
    <contact-form class="mt-20" :trans='@json($form_text)'></contact-form>
    <div class="mt-20">
        <p class="text-center">
            <a class="tracking-wide no-underline text-green-main" href="mailto:service@loherb.com.tw">service@loherb.com.tw</a>
        </p>
        <p class="text-center">
            <a class="tracking-wide no-underline text-green-main" href="tel:+886-3-959-5685">+886-3-959-5685</a>
        </p>
        <p class="text-center tracking-wide text-green-main">
            <a href="https://goo.gl/maps/hruVS5xHAXjfkwqy6" class="no-underline text-green-main">
                {{ trans('footer.address_full') }}
            </a>
        </p>
    </div>
    <section class="reg-section-space">
        <iframe class="block max-w-full mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.935047568107!2d121.80799681544636!3d24.660363959320296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3467e61d55a9d87b%3A0xdc93b07cb47e22a9!2z5pel5YWJIExPSEVSQg!5e0!3m2!1sen!2stw!4v1547085617044" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
@endsection