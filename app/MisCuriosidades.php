<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MisCuriosidades extends Model
{
    protected $table = 'miscuriosidades';
    protected $fillable = [
        'id_user',
        'id_curiosidad',
    ];
}
