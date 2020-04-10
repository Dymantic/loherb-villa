<div class="flex flex-col justify-between mb-8 w-64 max-w-full bg-green-softest mx-auto">
    <div>
        <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="hidden md:block">
            <img data-src="{{ $post['title_image_thumb'] }}"
                 alt="{{ $post['title'] }}" class="w-full lazyload">
        </a>
        <div class="p-4">
            <p class="heading-text text-green-main">{{ $post['title'] }}</p>
            <p class="slanted-text text-brown-dark">{{ $post['publish_date_string'] }}</p>
            <p class="text-green-main">{{ $post['intro'] }}</p>
        </div>

    </div>

    <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="no-underline btn btn-green mb-4 mt-4">{{ trans('homepage.journal.read-button') }}</a>
</div>
