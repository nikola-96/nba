<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;

class PlayerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($player_id)
    {
        $player = \App\Player::getPlayerById($player_id);

        return view('players.show', compact('player'));
    }
}
