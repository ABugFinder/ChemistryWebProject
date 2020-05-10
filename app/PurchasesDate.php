<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchasesDate extends Model
{
    protected $fillable = [
        'date',
        'Memorama - Medieval', 
        'Tetris - Medieval', 
        'Memorama - Cyber', 
        'Tetris - Cyber', 
        'Memorama - Experto',
        'Tetris - Experto', 
        'Memorama - Extremo', 
        'Tetris - Extremo'
    ];
    public $timestamps = false;
}
