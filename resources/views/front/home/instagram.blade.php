<div class="reg-section-space">
    @include('front.partials.heading-green', ['text' => trans('homepage.instagram.heading')])
    <div class="mt-12">
        @foreach($instagrams->take(8)->chunk(4) as $row)
            <div class="max-w-xl mx-auto flex-wrap md:flex-no-wrap justify-center w-full flex">
                @foreach($row as $instagram)
                    <picture class="sm:flex-1  w-1/2 sm:m-1">
                        <source srcset="{{ $instagram['standard'] }}"
                                media="(max-width: 576px)">
                        <source srcset="{{ $instagram['standard'] }}"
                                media="(min-width: 577px)">
                        <img srcset="{{ $instagram['standard'] }}"
                             alt="from instagram">
                    </picture>
{{--                    <img src="{{ $instagram['standard'] }}"--}}
                         {{--alt="" class="w-1/2 h-auto md:w-40 md:h-40 lg:w-48 lg:h-48 xl:w-64 xl:h-64">--}}
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="text-center mt-8">
        <a class="text-link tracking-wide mt-8 text-green-main hover:text-hover-green" href="">{{ trans('homepage.instagram.link') }} &rarr;</a>
    </div>
</div>