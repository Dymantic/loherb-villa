<div class="section-height testimonial-section flex items-center">
    <div class="md:ml-20 bg-opaque max-w-sm p-12 pt-8 text-green-main mr-4 md:mr-0 ml-4">
        <p class="font-medium font-heading mb-4">{{ $review['title'] }}</p>
        <p class="reviews-text"><span class="font-heading"></span>{{ $review['content'] }}</p>
        <p class="text-right mt-4 font-heading">- {{ $review['name'] }}</p>
{{--        <p class="text-right text-xs">{{ $review['source'] }}</p>--}}
    </div>
</div>