<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        //$articles=Article::all();
        $articles = Article::orderBy('titre')->get();
        $article5 = Article::find(5);
       // $article5images = $article5->images()->get();
        

        return view('home' , [
            'articles' => $articles,
            'article5' => $article5,
           // 'article5images' => $article5images,
        ]);
}
}