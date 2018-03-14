<?php

namespace App\Models;

use App\User;
use DB;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'scores';
    protected $fillable = ['user_id', 'score_number'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    // public static function points($user_id)
    // {

    //     $scoreCount = DB::table('scores')
    //                   ->select('score_number')
    //                   ->where('user_id',$user_id)
    //                   ->where('score_number', '<=', '100')
    //                   ->where('score_number', '>=', '0')
    //                   ->avg('score_number');
                      
    //     return $scoreCount;
    // }
}
