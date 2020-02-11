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

    public static function getTeamById($team_id)
    {
        return self::where('id', $team_id)->with('players')->first();//vracamo trazeni tim sa igracima
    }
}
