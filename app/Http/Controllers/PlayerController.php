<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show($player_id)
    {
        $player = \App\Player::getPlayerById($player_id);

        return view('players.show', compact('player'));
    }
}
