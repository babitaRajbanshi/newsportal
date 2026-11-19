<?php

namespace App\Http\Controllers\Frontend;

//use App\Http\Controllers\Controller;
use App\Models\Article;
//use Illuminate\Http\Request;

class PageController extends BaseController
{

    public function home(){
         $article = Article::latest('id')->first();
        return view("frontend.home",compact('article'));
    }
}
