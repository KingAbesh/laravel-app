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

    public function create() {
        
    }
    
    public function store() {
        
    }

    public function edit() {
        
    }
    
    public function update() {
        
    }
    
    public function destroy() {
        
    }
}