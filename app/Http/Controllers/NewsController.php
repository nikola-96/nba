<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest; 
use App\News;
use App\Team;
use Session;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('user')->latest()->paginate(10);

        return view('news.index', compact('news'));
    }
    public function show($news_id)
    {
        $news = News::with('user', 'teams')->find($news_id);

        return view('news.show', compact('news'));
    }
    public function showTeamNews($team_id)
    {
        $team = Team::getTeamById($team_id);
        $news = $team->news()->paginate(10);

        return view('news.show_team', compact('team', 'news'));
    }
    public function create()
    {
        $teams = Team::all();
        return view('news.create', compact('teams'));
    }
    public function store(NewsRequest $request)
    {
        $user_id = auth()->user()->id;
        $news = News::create(array_merge($request->except('teams'),['user_id' => $user_id]));
        $news->teams()->attach(request('teams'));
        Session::flash('message', 'Thank you for publishing article on www.nba.com.'); 

        return redirect('/news');
    }
}
