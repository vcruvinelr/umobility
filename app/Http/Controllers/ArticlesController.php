<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller

{
    public function getAllArticles(){
        
        return view('articles.articles');

    }

    public function addArticle(Request $request){

        {
            $article = new Article;
            $article->name = $request->name;
            $article->save();
    
            return response($article);
        }

    }
}