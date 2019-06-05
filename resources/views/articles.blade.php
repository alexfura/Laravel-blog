@extends('layouts.master')

@section('content')
    <header class="main">
        <h1>Read out posts</h1>
    </header>
    <span class="image main"><img src="images/pic11.jpg" alt="" /></span>
    @foreach($articles as $article)
        <h2>{{ $article->title }}</h2>
        <p>{{ substr($article->text_field, 0, 100) }}</p>
        <ul class="actions">
            <li><a href="{{ route('article', ['id' => $article->id]) }}" class="button">More</a></li>
        </ul>
    @endforeach
@stop
