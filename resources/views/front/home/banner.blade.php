<div class="banner-height max-h-screen home-banner flex justify-center items-center relative bg-green-main">
    @if(app()->getLocale() === 'en')
        @include('svgs.logos.Eng_Villa', ['classes' => 'text-cream-light h-20 md:h-32 fadeUpAfterLoad'])
    @else
        @include('svgs.logos.Ch_Villa', ['classes' => 'text-cream-light h-20 md:h-32 fadeUpAfterLoad'])
    @endif

    @include('front.partials.banner-scroll-down')
</div>
