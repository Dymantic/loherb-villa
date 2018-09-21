@extends('front.base')

@section('content')
    {{ trans('contact.title') }}
    <form action="/contact" method="POST">
        {!! csrf_field() !!}
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="message_body">
        <button>Go</button>
    </form>
@endsection