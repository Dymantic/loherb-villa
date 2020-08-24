@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ $page_title ?? trans('journal.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/villa_facebook.jpg'),
        'ogTitle' => $page_title ?? trans('journal.title'),
        'ogDescription' => $page_description ?? trans('journal.description')
    ])
@endsection

@section('content')
    @component('front.components.info-section', ['title' => $page_title ?? trans('journal.index.heading')])
        <p class="mt-8 body-text text-center text-green-main">{{ $page_intro ?? trans('journal.index.subheading') }}</p>
    @endcomponent

    <x-blog-subnav :current="Request::path()"></x-blog-subnav>

    <div class="px-4 pt-12">
        <div class="journal-grid max-w-xl mx-auto">
            @foreach($posts as $post)
                @include('front.posts.index-card', ['post' => $post])
            @endforeach
        </div>
    </div>

    @include('front.posts.pagination')
@endsection
