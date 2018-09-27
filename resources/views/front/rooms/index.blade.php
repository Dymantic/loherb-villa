@extends('front.base')

@section('content')
    <h1>These are the rooms</h1>
    <ul>
        <li><a href="{{ localUrl("/rooms/lily") }}">lily</a></li>
        <li><a href="{{ localUrl("/rooms/rose") }}">rose</a></li>
        <li><a href="{{ localUrl("/rooms/sunflower") }}">sunflower</a></li>
        <li><a href="{{ localUrl("/rooms/frangipani") }}">frangipani</a></li>
        <li><a href="{{ localUrl("/rooms/plum") }}">plum</a></li>
        <li><a href="{{ localUrl("/rooms/orchid") }}">orchid</a></li>
        <li><a href="{{ localUrl("/rooms/villa") }}">villa</a></li>
    </ul>
@endsection