@extends('front.base')

@section('content')
    {{ trans('homepage.title') }}
    <p>{{ data('luxury-room.price', 'NOT FOUND') }}</p>
@endsection