<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'type',
        'stadium',
        'home',
        'guest',
        'time',
        'user_id',
    ];
}
