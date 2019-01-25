<div class="reg-section-space">
    @include('front.partials.heading-green', ['text' => trans('homepage.journal.heading')])
    <div class="journal-grid max-w-xl mx-auto mt-8">
        @foreach($posts as $post)
            @include('front.posts.index-card', ['post' => $post])
        @endforeach
    </div>
    <div class="text-center mt-12">
        <a class="text-link text-green-main hover:text-hover-green" href="">{{ trans('homepage.journal.link') }} &rarr;</a>
    </div>
</div>