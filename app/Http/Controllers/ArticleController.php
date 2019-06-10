<?php

namespace App\Http\Controllers;

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
        $data = Article::findOrFail($id);
        return view('article')->with('article', $data);
    }

    /**
     *  returns pages with artciles from selected topic
     * @param string $topic
     */

    public function getArticleByTopic(int $id)
    {
        $topic = Topic::findOrFail($id);
        $articles = Article::where('topic', $topic->id)->paginate(1);
        return view('topic',['topic' => $topic, 'articles' => $articles]);
    }
}
