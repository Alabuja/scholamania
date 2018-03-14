<?php

namespace App\Models;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $table = 'assignments';

    protected $fillable = ['user_id', 'assignment_submitted', 'assignment_url'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
} 
