<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Topic;

class ArticleController extends Controller
{
    /**
     * Display a posts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(5);
        return view('articles')->with('articles', $articles);
    }

    /**
     * Display article by id
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data = Article::where('id', $id)->get();
        return view('article')->with('article', $data);
    }

    /**
     *  returns pages with artciles from selected topic
     * @param string $topic
     */

    public function getArticleByTopic(string $slug)
    {
        $articles = Topic::where('title', $slug)->getArticles;

        return view('topic')->with('articles', $articles);
    }
}