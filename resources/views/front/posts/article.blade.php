<div class="px-4 pt-24 pb-12">
    <p class="article-title type-h1 mb-4 text-chocolate text-center">{{ $post['title'] }}</p>
    <p class="type-b2 text-brown-light text-center">Posted on {{ $post['publish_date_string'] }}</p>
</div>
<div class="max-w-3xl mx-auto px-4 py-12">
    <img src="{{ $post['title_image_web'] }}"
         alt="" class="w-full block mx-auto mb-8">
    <div class="journal-entry">
        {!! $post['body'] !!}
    </div>
</div>
<div class="px-4 py-12 sharing-container">
    <p class="heading-text mb-4 text-green-main text-center">{{ trans('journal.show.share_prompt') }}</p>
    <div class="flex justify-center items-center">
        <a href="https://twitter.com/home?status={{ urlencode($post['title'] . ' ' . Request::url()) }}"
           class="no-underline text-green-main hover:text-green-mid mx-4">
            @include('svgs.social.twitter')
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
           class="no-underline text-green-main hover:text-green-mid mx-4">
            @include('svgs.social.facebook')
        </a>
        <a href="mailto:?&subject=Read&body={{ Request::url() }}"
           class="no-underline text-green-main hover:text-green-mid mx-4">
            @include('svgs.social.mail')
        </a>
    </div>
    <div class="text-center mt-12">
        <a href="{{ localUrl('/journal') }}"
           class="text-link text-green-main hover:text-hover-green">&larr; {{ trans('journal.show.back_button') }}</a>
    </div>
</div>
