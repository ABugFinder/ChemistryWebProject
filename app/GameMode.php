<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameMode extends Model
{
    protected $fillable = [
        'dificulty',
        'description',
    ];
}
