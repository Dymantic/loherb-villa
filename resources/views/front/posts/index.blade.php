@extends('front.base')

@section('content')
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <a href="/blog/{{ $post->slug }}">See</a>
    @endforeach
@endsection