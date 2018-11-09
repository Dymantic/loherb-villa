<div class="flex flex-col justify-between mb-20 w-64 max-w-full p-4 bg-cream-light mx-auto">
    <div>
        <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="hidden md:block">
            <img src="{{ $post['title_image_thumb'] }}"
                 alt="" class="w-full">
        </a>
        <p class="heading-text text-brown-dark">{{ $post['title'] }}</p>
        <p class="reviews-text text-brown-light">Posted on {{ $post['publish_date_string'] }}</p>
        <p class="text-brown-dark">{{ $post['intro'] }}</p>
    </div>

    <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="no-underline btn btn-brown mb-4 mt-8">{{ trans('homepage.journal.read-button') }}</a>
</div>