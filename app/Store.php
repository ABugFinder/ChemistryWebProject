<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'tip', 'description', 'price', 'image', 'ventas'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'purchases', 'id_store','id_user');
    }
}
