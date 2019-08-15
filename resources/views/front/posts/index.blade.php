@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ trans('journal.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => url('/images/villa_facebook.jpg'),
        'ogTitle' => trans('journal.title'),
        'ogDescription' => trans('journal.description')
    ])
@endsection

@section('content')
    @component('front.components.info-section', ['title' => trans('journal.index.heading')])
        <p class="mt-8 body-text text-green-main">{{ trans('journal.index.subheading') }}</p>
    @endcomponent

    <div class="px-4 pt-12">
        <div class="journal-grid max-w-xl mx-auto">
            @foreach($posts as $post)
                @include('front.posts.index-card', ['post' => $post])
            @endforeach
        </div>
    </div>

    @include('front.posts.pagination')
@endsection