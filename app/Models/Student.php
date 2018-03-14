<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['user_id'];

    // protected $fillable = ['user_id', 'student_number'];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
