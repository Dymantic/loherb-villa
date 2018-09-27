@extends('front.base')

@section('content')
    {{ trans('homepage.title') }}
    <h3>Testimonials</h3>
    @foreach(data('testimonials') as $testimonial)
    <div>
        <p>{{ $testimonial['content'] }}</p>
        <p>{{ $testimonial['name'] }}</p>
        <p>{{ $testimonial['source'] }}</p>
    </div>
    @endforeach
@endsection