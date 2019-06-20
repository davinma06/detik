<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;

class MainController extends Controller
{
    public function index()
    {
        $data = Article::select('articles.*','users.name')->leftJoin('users', 'users.id', '=', 'articles.created_id')->get();
        return view('welcome', ["data"=>$data]);
    }
}
