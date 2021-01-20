<div class="reg-section-space">
    @include('front.partials.heading-green', ['text' => trans('homepage.journal.heading')])
    <div class="journal-grid max-w-5xl mx-auto mt-12">
        @foreach($posts as $post)
            @include('front.posts.index-card', ['post' => $post])
        @endforeach
    </div>
    <div class="text-center mt-12">
        <a class="text-link text-green-main hover:text-hover-green" href="{{ localUrl('/journal') }}">{{ trans('homepage.journal.link') }} &rarr;</a>
    </div>
</div>
