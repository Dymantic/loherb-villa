<div class="flex flex-col justify-between mb-8 w-9/10 md:w-64 max-w-full bg-green-softest mx-auto" data-usher>
    <div>
        <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="block relative" style="padding-bottom: 75%">
            <img data-src="{{ $post['title_image_thumb'] }}"
                 alt="{{ $post['title'] }}" class="w-full h-full object-cover absolute inset-0 lazyload">
        </a>
        <div class="p-4">
            <p class="type-h2 text-green-main">{{ $post['title'] }}</p>
            <p class="type-b2 text-brown-dark">{{ $post['publish_date_string'] }}</p>
            <p class="text-green-main">{{ $post['intro'] }}</p>
        </div>

    </div>

    <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="no-underline btn btn-green mb-4 mt-4">{{ trans('homepage.journal.read-button') }}</a>
</div>
