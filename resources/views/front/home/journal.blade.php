<div class="px-4 py-12">
    <p class="text-center heading-text text-green-main mb-12">{{ trans('homepage.journal.heading') }}</p>
    <div class="flex flex-col md:flex-row justify-around max-w-xl mx-auto">
        @foreach($posts as $post)
            <div class="flex flex-col justify-between mx-auto mb-4 w-64 p-4 bg-cream-light">
                <div>
                    <a href="" class="hidden md:block">
                        <img src="{{ $post['title_image_thumb'] }}"
                             alt="" class="w-full">
                    </a>
                    <p class="heading-text text-brown-dark">{{ $post['title'] }}</p>
                    <p class="reviews-text text-brown-light">Posted on {{ $post['publish_date_string'] }}</p>
                    <p class="text-brown-dark">{{ $post['intro'] }}</p>
                </div>

                <a href="" class="no-underline btn btn-brown mb-4 mt-8">{{ trans('homepage.journal.read-button') }}</a>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-12">
        <a class="text-link text-green-main" href="">{{ trans('homepage.journal.link') }} &rarr;</a>
    </div>
</div>