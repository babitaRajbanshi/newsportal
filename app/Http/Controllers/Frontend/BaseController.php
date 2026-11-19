<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\View;
//use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        $categories=Category::all();
        View::share([
            "categories"=> $categories,
        ]);
    }
}
