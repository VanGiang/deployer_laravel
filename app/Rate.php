<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
        'point',
        'player_id',
        'match_id',
        'user_id',
    ];
}
