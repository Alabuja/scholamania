<?php

namespace App\Individuals;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
	protected $table = 'individualScores';
    protected $fillable = ['guest_id', 'score_number'];

    public function guest()
    {
    	return $this->belongsTo('App\Individuals\Guest', 'guest_id');
    }
}
