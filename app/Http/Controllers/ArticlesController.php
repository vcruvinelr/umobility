<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller

{
    public function getAllArticles(){
        $articles = Article::all();
        
        return view('articles', compact('articles'));

    }
}