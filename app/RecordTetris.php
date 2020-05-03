<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordTetris extends Model
{
    //
    protected $fillable = [
        'top', 'record', 'id_user'
    ];
    public $timestamps = false;
}

