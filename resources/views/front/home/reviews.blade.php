<div class="bg-green-soft reg-section-space reviews">
    @include('front.partials.heading-green', ['text' => trans('homepage.reviews.heading')])
    <div data-flickity='{"autoPlay": 5000}' class="mt-12 slide-show dark arrows-wide low-dots max-w-2xl mx-auto">
        @foreach($reviews as $review)
                <div class="w-full text-green-main">
                    @if($review['title'])
                        <p class="type-b2 mb-4 hidden md:block">{{ $review['title'] }}</p>
                    @endif
                        <p class="mb-4 md:hidden text-center">“{{ $review['brief'] ?? '' }}”</p>
                    <p class="mb-4 hidden md:block">
                        {{ $review['content'] }}
                    </p>
                    <p class="text-center md:text-right type-b7 pr-2"> - {{ $review['name'] }}</p>
                    <p class="text-center md:text-right type-b7 pb-16 pr-2">({{ $review['source'] }})</p>
                    @include('front.partials.star-rating', ['rating' => $review['rating']])
                </div>
        @endforeach
    </div>
</div>
