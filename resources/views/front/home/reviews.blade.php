<div class="bg-green-soft reg-section-space">
    <p class="heading-text mb-16 text-green-main text-center">{{ trans('homepage.reviews.heading') }}</p>
    <div data-flickity>
        @foreach($reviews as $review)
            <div class="w-full">
                <div class="w-full max-w-md mx-auto overflow-auto text-green-main">
                    @if($review['title'])
                        <p class="font-heading mb-4">{{ $review['title'] }}</p>
                    @endif
                    <p class="mb-4">
                        {{ $review['content'] }}
                    </p>
                    <p class="text-right italic"> - {{ $review['name'] }}</p>
                    <p class="text-right italic pb-16">({{ $review['source'] }})</p>
                    <div class="flex justify-center">
                        @foreach(range(1, floor($review['rating'])) as $index)
                            @include('svgs.icons.star_full')
                        @endforeach
                        @if(($review['rating']*10) % 10 !== 0 )
                            @include('svgs.icons.star_half')
                        @elseif($review['rating'] < 5)
                            @include('svgs.icons.star_blank')
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>