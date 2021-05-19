<div class="section-height cuisine-section flex justify-center items-center">
    <div class="bg-opaque max-w-lg p-8 text-green-main flex flex-col items-center mx-4 md:mx-0" data-usher>
        @if(app()->getLocale() === 'en')
            @include('svgs.logos.Eng_Cuisine', ['classes' => 'h-16 mb-12'])
        @else
            @include('svgs.logos.Ch_Cuisine', ['classes' => 'h-16 mb-12'])
        @endif

        <p class="body-text text-center">{{ trans('homepage.cuisine.content') }}</p>
        <a class="text-link mt-8 text-green-main" href="https://cuisine.loherb.com.tw">{{ trans('homepage.cuisine.link') }} &rarr;</a>
    </div>
</div>
