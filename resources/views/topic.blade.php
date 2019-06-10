@extends('layouts.master')

@section('title')
    {{ $topic->title }}
@stop

@section('content')
    <header class="main">
        <h1>Watch articles related to {{ $topic->title }}</h1>
    </header>
    <span class="image main"><img src="images/pic11.jpg" alt="" /></span>
    @foreach($articles as $article)
        <h1>{{ $article->title }}</h1>
        <p>{{ substr($article->text_field, 0, 100) }}</p>
    @endforeach

    {{ $articles->links() }}
@stop
