<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Coach;
use App\User;
use Auth;

class CoachController extends Controller
{
    // public function __construct()
    // {
    // 	$this->middleware('auth');
    // }
 
    public function index()
    {
        $data = [
            'users' => User::all()
        ];
        return view('admin.addcoach', $data);
    }

    public function getCoaches()
    {
        $users = DB::table('coaches')->paginate(15);
        // $data = [
        //  'slides' => User::all();
        //  'slides' => $users;
        // ];

        return view('admin.viewcoach',  ['coach' => $users]);
    }

    public function create(Request $request)
    {
    	$rules = array(
    		'coach_name' => 'required',
            'user_id' => 'required',
    	);

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails())
    	{
    		$messages = $validator->messages(); 
    		return redirect()->back()->withErrors($messages)->withInput();
    	}
    	else
    	{
    		$coach = new Coach;

    		$coach->coach_name = $request->input('coach_name');

    		$coach->user_id = $request->input('user_id');

    		$coach->save();

            return redirect()->back()->with('success', 'New Coach Addedd');

    	}
    }

    public function edit($id)
    {
    	$coach = Coach::find($id);
   		return view('admin.editcoach', compact('coach'));
    }

    public function update(Request $request, $id)
    {
    	$coach = Coach::findOrFail($id);
        $this->validate($request, [
            'coach_name'     => 'required'
        ]);

        $values = $request->all();
        $coach->fill($values)->save();

        $request->session()->flash('success', 'Coach has been updated successfully!!!');
        return back();
    }
}
