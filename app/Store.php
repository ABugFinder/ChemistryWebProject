<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'tip', 'description', 'price', 'image'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'purchases', 'id_user','id_store');
    }
}
