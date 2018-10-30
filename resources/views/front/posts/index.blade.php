@extends('front.base', ['bodyClass' => 'md:pt-12'])

@section('title')
    {{ trans('journal.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogImage' => '',
        'ogTitle' => trans('journal.title'),
        'ogDescription' => trans('journal.description')
    ])
@endsection

@section('content')
    @component('front.components.info-section', ['title' => trans('journal.index.heading')])
        <p class="mt-8 body-text text-green-main">{{ trans('journal.index.subheading') }}</p>
    @endcomponent

    <div class="px-4 py-12">
        <div class="flex flex-col md:flex-row flex-wrap justify-around max-w-xl mx-auto">
            @foreach($posts as $post)
                @include('front.posts.index-card', ['post' => $post])
            @endforeach
        </div>
    </div>
@endsection