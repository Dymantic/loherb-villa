@extends('front.base')

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
    <div class="px-4 pb-12 pt-24 bg-green-soft">
        <div class="max-w-md mx-auto flex flex-col items-center">
            <p class="heading-text mb-4 text-green-main">{{ trans('journal.index.heading') }}</p>
            <span>
                @include('svgs.logos.leaf')
            </span>
            <p class="my-8 body-text text-green-main">{{ trans('journal.index.subheading') }}</p>
        </div>
    </div>
    <div class="px-4 py-12">
        <div class="flex flex-col md:flex-row flex-wrap justify-around max-w-xl mx-auto">
            @foreach($posts as $post)
                @include('front.posts.index-card', ['post' => $post])
            @endforeach
        </div>
    </div>

@endsection