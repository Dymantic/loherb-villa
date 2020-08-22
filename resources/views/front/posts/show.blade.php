@extends('front.base')

@section('title')
    {{ $post['title'] }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => $post['title_image_banner'] ?? '',
        'ogTitle' => $post['title'],
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
            new window.HolyScroller({{ $post['id'] }});
            window.addEventListener('popstate', ({state}) => {
                if(state && state.page_url) {
                    console.log({state});
                    window.location = state.page_url;
                }
            });
        });
    </script>
@endsection
