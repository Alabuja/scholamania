<?php

namespace App\Http\Controllers\Individuals;

use App\Individuals\Score;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Individuals\Guest;

class ScoreController extends Controller
{
     public function index()
    {
        $data = [
            'guests' => Guest::all()
        ];

        return view('admin.individuals.score', $data);
    }

    public function store(Request $request)
    {
    	$scores = new Score;
    	$this->validate($request, [
            'score_number' => 'required|numeric',
            'guest_id' => 'required',
        ]);

    	$scores->score_number = $request->input('score_number');
    	$scores->guest_id = $request->input('guest_id');

    	$scores->save();
        $request->session()->flash('success', 'You Just added a score!!!');
    	return back();
    }
}
