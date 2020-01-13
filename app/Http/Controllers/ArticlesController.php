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

    public function show(Article $article)
    {

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {

        Article::create($this->validateArticle());

        return redirect('/articles');

    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {

        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    public function destroy()
    {

    }

    protected function validateArticle() {
         return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}