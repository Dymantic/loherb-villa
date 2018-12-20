<div class="bg-green-soft reg-section-space reviews">
    <p class="heading-text mb-16 text-green-main text-center">{{ trans('homepage.reviews.heading') }}</p>
    <div data-flickity class="slide-show arrows-wide low-dots max-w-md mx-auto">
        @foreach($reviews as $review)
            {{--<div class="w-full m">--}}
                <div class="w-full text-green-main">
                    @if($review['title'])
                        <p class="font-heading mb-4">{{ $review['title'] }}</p>
                    @endif
                    <p class="mb-4">
                        {{ $review['content'] }}
                    </p>
                    <p class="text-right italic"> - {{ $review['name'] }}</p>
                    <p class="text-right italic pb-16">({{ $review['source'] }})</p>
                    @include('front.partials.star-rating', ['rating' => $review['rating']])
                </div>
            {{--</div>--}}
        @endforeach
    </div>
</div>