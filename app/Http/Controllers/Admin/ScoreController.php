<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\User;
use App\Models\Score;

class ScoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $data = [
            'users' => User::all()
        ];

        return view('admin.score', $data);
    }

    public function store(Request $request)
    {
    	$scores = new Score;
    	$this->validate($request, [
            'score_number' => 'required|numeric',
            'user_id' => 'required',
        ]);

    	$scores->score_number = $request->input('score_number');
    	$scores->user_id = $request->input('user_id');

    	$scores->save();
        $request->session()->flash('success', 'You Just added a score!!!');
    	return back();
    }
}
