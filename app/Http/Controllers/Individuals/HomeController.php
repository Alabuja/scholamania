<?php

namespace App\Http\Controllers\Individuals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    
    public function index()
    {
    	$topUserScores = DB::table('individualScores')
                        ->join('guests', 'guests.id', '=', 'individualScores.guest_id')
                        ->select('guests.*', 'individualScores.*')
                        ->where('individualScores.score_number', '<=', '100')
                        ->where('individualScores.score_number', '>=', '0')
                        ->groupBy('individualScores.guest_id')
                        ->selectRaw( "round(avg( score_number ), 2) as score_number, individualScores.guest_id" )
                        ->orderBy('score_number', 'desc')
                        ->take(3)
                        ->get();

        //$avg = $topScores->sum("score_number")/$topScores->count();

        $currentUserScore =  round(DB::table('individualScores')
                            ->select('score_number')
                            ->where('guest_id', Auth::guard('individual')->user()->id)
                            ->where('score_number', '<=', '100')
                            ->where('score_number', '>=', '0')
                            ->avg('score_number'), 2);
        
        return view('guest.home')->with('currentUserScore', $currentUserScore)
        				         ->with('topUserScores', $topUserScores);
    }
}
