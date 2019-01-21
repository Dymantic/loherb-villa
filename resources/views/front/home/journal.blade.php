<div class="px-4 py-12">
    <p class="text-center heading-text text-green-main mb-12">{{ trans('homepage.journal.heading') }}</p>
    <div class="journal-grid max-w-xl mx-auto">
        @foreach($posts as $post)
            @include('front.posts.index-card', ['post' => $post])
        @endforeach
    </div>
    <div class="text-center mt-12">
        <a class="text-link text-green-main hover:text-hover-green" href="">{{ trans('homepage.journal.link') }} &rarr;</a>
    </div>
</div>