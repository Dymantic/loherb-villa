@extends('front.base')

@section('title')
    {{ $post['title'] }} - LOHERB
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => $post['title_image_banner'] ?? '',
        'ogTitle' => $post['title'] . ' - LOHERB',
        'ogDescription' => $post['description']
    ])
@endsection

@section('content')
    <div class="main-shell">
        <div class="article-{{ $post['id'] }}-shell">
            @include('front.posts.article', ['post' => $post])
        </div>
    </div>
@endsection

@section('bodyscripts')
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new window.HolyScroller({{ $post['id'] }}, null, null, '{{ app()->getLocale() }}');
            window.addEventListener('popstate', ({state}) => {
                if(state && state.page_url) {
                    return window.location = state.page_url;
                }
                history.back();
            });
        });
    </script>
@endsection
