<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $fillable = [
        'name',
        'symbol',
        'atomicNumber',
        'atomicMass',
        'category',
        'elementType',
        'stateMass',
        'group',
        'block',
        'description',
        'image',
    ];
}
