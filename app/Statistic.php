<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id',
        'player_id',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
