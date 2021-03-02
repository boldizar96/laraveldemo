<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles=Article::all();

        return view('articles.index', ['articles'=>$articles]);
    }
    public function show($id)
    {
        //dd($id);
        $article=Article::find($id);

        return view('articles.show', ['article'=> $article]);
    }
}
