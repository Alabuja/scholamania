<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'username', 'email', 'address', 'phone_number','password', 'student_number',
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
        return $this->hasMany('App\Models\Assignment');
    }
    public function score()
    {
        return $this->hasMany('App\Models\Score');
    }
    public function coach()
    {
        return $this->hasMany('App\Models\Coach');
    }
}
