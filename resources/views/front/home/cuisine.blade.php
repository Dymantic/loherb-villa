<div class="section-height cuisine-section flex justify-center items-center">
    <div class="bg-opaque max-w-lg p-8 text-green-main flex flex-col items-center mx-4 md:mx-0">
        @include('svgs.logos.cuisine', ['svgClass' => 'h-24 mb-12'])
        <p class="body-text text-center">{{ trans('homepage.cuisine.content') }}</p>
        <a class="text-link mt-8 text-green-main" href="https://cuisine.loherb.com.tw">{{ trans('homepage.cuisine.link') }} &rarr;</a>
    </div>
</div>
