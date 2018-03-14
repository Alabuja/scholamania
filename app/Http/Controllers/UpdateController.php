<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    //
    public function __construct() {

        $this->middleware('auth');

    }

    public function postUpdatePassword(Request $request)
    {
    	$this->validate($request, [
            'old' => 'required',
            'password' => 'required|confirmed',
        ]);

    	$user = User::find(Auth::id());
        $hashedPassword = $user->password;


    	if (Hash::check($request->old, $hashedPassword)) {
            //Change the password
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();
 
            $request->session()->flash('success', 'Your password has been changed.');
 
            return back();
        }
 
        $request->session()->flash('failure', 'Your password has not been changed.');
 
        return back();
    }
}

