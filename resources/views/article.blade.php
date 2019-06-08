@extends('layouts.master')
@section('title')
    {{ $article->title }}
@stop

@section('content')
    <h1>{{ $article->title }}</h1>
    <span class="image main"><img src="{{ asset("images/pic11.jpg") }}" alt="" /></span>
    <p>{{ $article->text_field }}</p>

@stop
