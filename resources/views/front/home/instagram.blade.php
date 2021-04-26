<div class="reg-section-space">
    @include('front.partials.heading-green', ['text' => trans('homepage.instagram.heading')])
    <div class="mt-12">
        @foreach($instagrams->take(8)->chunk(4) as $row)
            <div class="max-w-4xl mx-auto flex-wrap md:flex-no-wrap justify-center w-full flex">
                @foreach($row as $instagram)
                    <div class="instagram-image-box" data-usher data-usher-delay="{{ ($loop->index * ($loop->parent->index + 1)) / 3 }}">
                            <img class="lazyload" data-src="{{ $instagram['url'] }}"
                                 alt="from instagram">
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="text-center mt-8">
        <a class="text-link tracking-wide mt-8 text-green-main hover:text-hover-green" href="https://www.instagram.com/loherb0301">{{ trans('homepage.instagram.link') }} &rarr;</a>
    </div>
</div>
