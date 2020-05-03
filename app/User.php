<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'username', 'email', 'password','points'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function hasAnyRoles($roles)
    {
        if($this->roles()->whereIn('name', $roles)->first()) { //check if the current user has a role
            return true;
        } else {
            return false;
        }
    }

    public function hasRole($role)
    {
        if($this->roles()->where('name', $role)->first()) { //check if the current user has the same role as the giving one
            return true;
        } else {
            return false;
        }
    }

    public function store()
    {
        return $this->belongsToMany('App\Store','purchases', 'id_user', 'id_store');
    }

    public function recordTetris()
    {
        return $this->hasMany('App\RecordTetris','id_user');
    }

    public function recordMemorama()
    {
        return $this->hasMany('App\RecordMemorama','id_user');
    }


}
