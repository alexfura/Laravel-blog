@extends('layouts.master')

@section('title')
    Home
@stop

@section('content')
    <section id="banner">
        <div class="content">
            <header>
                <h1>{{ $articles[0]->title }}</h1>
                <p>{{ $articles[0]->creation_time }}</p>
            </header>
            <p>{{ substr($articles[0]->text_field, 0, 150) }}</p>
            <ul class="actions">
                <li><a href="{{ route('article', ['id' => $articles[0]->id]) }}" class="button big">Learn More</a></li>
            </ul>
        </div>
        <span class="image object">
            <img src="images/pic10.jpg" alt="" />
        </span>
    </section>
    <section>
        <!-- Other articles -->
        <header class="major">
            <h2>Other posts</h2>
        </header>
        <div class="posts">
        @for($i = 1;$i < $articles->count();$i++)
                <article>
                    <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
                    <h3>{{ $articles[$i]->title }}</h3>
                    <p> {{ substr($articles[$i]->text_field, 0, 100) }}</p>
                    <ul class="actions">
                        <li><a href="{{ route('article', ['id' => $articles[$i]->id]) }}" class="button">More</a></li>
                    </ul>
                </article>
        @endfor
        </div>
    </section>
@stop
