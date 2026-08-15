<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $article = $articles->first();
        return view('article/index', compact('articles', 'article'));
    }

    public function show(Article $article)
    {
        return view('article/article', compact('article'));
    }
}
