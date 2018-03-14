<?php

namespace App\Http\Controllers\Individuals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Individuals\Guest;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    public function addNewUsers()
    {
    	return view('admin.individuals.newusers');
    }

    public function getAll()
    {
    	$guests = DB::table('guests')->paginate(15);
    	return view('admin.individuals.allusers', ['guests' => $guests]);
    }

    public function getSingle($id)
    {
    	$guests = DB::table('guests')->find($id);
    	return view('admin.individuals.singleindividual', compact('guests'));
    }

    public function store(Request $request)
    {
    	$rules = array (
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:guests',
            'address' => '',
            'phone_number' => 'numeric|unique:guests',
            'password' => 'required'
            // 'image' => 'required|image|mimes:png,jpg,gif,jpeg'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator-> fails()){
            $messages = $validator->messages();
            return redirect()->back()->withErrors($messages)->withInput();
        }
        else { 

            $guests = new Guest;

            $guests->name = $request->input('name');
            $guests->username = $request->input('username');
            $guests->email = $request->input('email');
            $guests->address = $request->input('address');
            $guests->phone_number = $request->input('phone_number');
            $guests->password = bcrypt($request->input('password'));

            $guests->save();

            $request->session()->flash('success', 'You just added a new user!!!');
            return back();
	    }
    }
}
