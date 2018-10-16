<div class="bg-green-soft px-4 py-12">
    <p class="heading-text mb-4 text-green-main text-center">{{ trans('homepage.reviews.heading') }}</p>
    <div data-flickity>
        @foreach($reviews as $review)
            <div class="w-full">
                <div class="w-full max-w-md mx-auto overflow-auto">
                    <p>
                        @if($review['title'])
                            <span class="font-bold font-heading">{{ $review['title'] }} </span>
                        @endif
                        {{ $review['content'] }}
                    </p>
                    <p class="text-right"> - {{ $review['name'] }}</p>
                    <p class="text-right">{{ $review['source'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>