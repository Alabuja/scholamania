<?php

namespace App\Individuals;

use App\Individuals\Guest;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $table = 'individualAssignments';

    protected $fillable = ['guest_id', 'assignment_submitted', 'assignment_url'];

    public function guest()
    {
    	return $this->belongsTo('App\Individuals\Guest', 'guest_id');
    }
}
