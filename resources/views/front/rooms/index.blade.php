@extends('front.base')

@section('content')
    <h1>These are the rooms</h1>
    <ul>
        <li><a href="{{ localUrl("/rooms/luxury") }}">luxury</a></li>
        <li><a href="{{ localUrl("/rooms/economy") }}">economy</a></li>
        <li><a href="{{ localUrl("/rooms/villa") }}">villa</a></li>
        <li><a href="{{ localUrl("/rooms/vip") }}">vip</a></li>
    </ul>
@endsection