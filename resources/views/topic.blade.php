@extends('layouts.master')

@section('content')
    <header class="main">
        <h1>Watch topics</h1>
    </header>
    @foreach($articles as $article)
        <h1>{{ $article->id }}</h1>
    @endforeach
@stop
