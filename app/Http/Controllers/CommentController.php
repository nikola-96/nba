<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function show(){
        
        return view('users.forbidden_comment');
    }

    public function store($team_id)
    {
        $comment = new \App\Comment;
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = $team_id;
        $comment->save();
        
        $team = \App\Team::getTeamById($team_id);
        Mail::to($team->email)->send(new CommentReceived($team));

        return redirect()->back();
    }
}
