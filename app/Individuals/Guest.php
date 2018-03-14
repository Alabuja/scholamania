<?php

namespace App\Individuals;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guest extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'guests';
    protected $fillable = [
        'name', 'username', 'email', 'address', 'phone_number','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function assignment()
    {
        return $this->hasMany('App\Individuals\Assignment');
    }
    public function score()
    {
        return $this->hasMany('App\Individuals\Score');
    }
    // public function coach()
    // {
    //     return $this->hasMany('App\Individuals\Coach');
    // }
}
