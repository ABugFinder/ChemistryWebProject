<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curiosidades extends Model
{
    protected $fillable = [
        'nombre',
        'contenido',
        'imagen',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'miscuriosidades', 'id_curiosidad', 'id_user');
    }
}
