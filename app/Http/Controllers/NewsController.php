<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('user')->latest()->paginate(10);

        return view('news.index', compact('news'));
    }
    public function show($news_id)
    {
        $news = News::with('user')->find($news_id);

        return view('news.show', compact('news'));
    }
}
