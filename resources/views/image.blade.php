@extends('layouts/home-layout')

@section('title')
    Image
@endsection

@section('content')
    <h1 class="headerPadding">Age Calculator</h1>
    @if ($imgsrc)
    <img src={{$imgsrc}} alt="Programming meme">
    @else
    <p>Nothing to see here!</p>
    @endif
@endsection