<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded =['id'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public static function getTeamAndPlayes($team_id)
    {
        return self::where('id', $team_id)->with('players', 'comments' )->first();//vracamo trazeni tim sa igracima i komentarima
    }
    public static function getTeamById($team_id){
        
        return self::find($team_id);
    }
}
