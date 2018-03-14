<?php

namespace App\Http\Controllers;

use DB;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\User;
use Image;
use File;

class UserController extends Controller 
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function store(Request $request)
    {
    	$rules = array (
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'address' => 'required',
            'phone_number' => 'required|numeric|unique:users',
            'password' => 'required'
            // 'image' => 'required|image|mimes:png,jpg,gif,jpeg'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator-> fails()){
            $messages = $validator->messages();
            return redirect()->back()->withErrors($messages)->withInput();
        }
        else { 

            $users = new User;

      //       $file = $request->file('image');
    		// $ext = $file->getClientOriginalExtension();

    		// $time = time();

            $users->name = $request->input('name');
            $users->username = $request->input('username');
            $users->email = $request->input('email');
            $users->address = $request->input('address');
            $users->phone_number = $request->input('phone_number');
            $users->password = bcrypt($request->input('password'));
            // $users->image = $file->storeAs('applicationimages', $time.".{$ext}");


            $users->save();

      //       $imageName = $time. '.' . $ext;
    		// $request->image->move(public_path('applicationimages'), $imageName);

            $request->session()->flash('success', 'You just added a new user!!!');
            return back();
       }

    }
}
