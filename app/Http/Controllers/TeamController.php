<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $teams = \App\Team::all();

        return view('teams.index', compact('teams'));//vracamo niz sa zeljenim timovima
    }
    public function show($team_id)
    {
        $team = \App\Team::getTeamAndPlayes($team_id); //punimo promenjivu trazenim timom
        $news = \App\News::all();
        // $team->news()->attach($news);

        return view('teams.show', compact('team'));//renderujemo trazeni tim
    }
}
