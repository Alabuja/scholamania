<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;
class Coach extends Model
{
    //
    protected $fillable = ['coach_name', 'user_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
 