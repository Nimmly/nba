<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
    $news = News::all();
    return view('posts.news', compact('news'));
    }

    public function show($id)
    {
        $singleNews= News::find($id);
        return view('posts.show',compact('singleNews'));
    }
}
