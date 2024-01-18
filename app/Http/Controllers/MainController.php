<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        $articles=Article::all();
        $article5 = $articles[4];
        $article5images = $article5->images()->get();
        

        return view('home' , [
            'articles' => $articles,
            'article5' => $article5,
            'article5images' => $article5images,
        ]);
}
}