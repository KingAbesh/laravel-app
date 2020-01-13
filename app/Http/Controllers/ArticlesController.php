<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->get();

        return view("articles.index", ['articles' => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        dump(request()->all());
    }

    public function edit($id)
    {

        $article = Article::find($id);

        return view('articles.edit', ['articles' => $articles]);
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}