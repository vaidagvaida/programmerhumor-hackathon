@extends('layouts/home-layout')

@section('title')
    Image
@endsection

@section('content')
    <h1 class="headerPadding">Base64 Image</h1>
    @if ($imgsrc)
    <img src={{$imgsrc}} alt="Programming Meme">
    @else
    <p>Nothing to see here!</p>
    @endif
@endsection