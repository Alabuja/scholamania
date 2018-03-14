<?php

namespace App\Http\Controllers\Individuals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Auth;
use Validator;
use App\Individuals\Guest;

class ProfileController extends Controller
{
	public function profile()
	{
		return view('guest.profile');
	}

    public function updateprofile(Request $request)
    {
    	$rules = array (
            'phone_number' => 'required|numeric',
            'address' => 'required',
            'username' => 'required'
            // 'image' => 'required|image|mimes:png,jpg,gif,jpeg'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator-> fails())
        {
            $messages = $validator->messages();
            return redirect()->back()->withErrors($messages)->withInput();
        }
        else 
        { 
            //$students = new Student;
            $guest = Auth::guard('individual')->user();

            $guest->phone_number = $request->input('phone_number');
            $guest->address = $request->input('address');
            //$guest->student_number = $request->input('student_number');
            $guest->username = $request->input('username');

            $guest->save();
            
            $request->session()->flash('success', 'User Profile Successfully Updated!!!');
            return back();
        }
    }
}
