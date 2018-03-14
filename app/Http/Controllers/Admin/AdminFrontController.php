<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Admin;
use App\Models\Assignment;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminFrontController extends Controller
{
    //
    public function getUsers() 
    {
    	$users = DB::table('users')->simplePaginate(15);
    	// $data = [
    	// 	'slides' => User::all();
    	// 	'slides' => $users;
    	// ];

    	return view('admin.coach',  ['slides' => $users]);
    }

    public function getAssignments()
    {
        // $assignments = DB::table('assignments')->simplePaginate(10);
        $data = [
            'assignment' => Assignment::all(),
            'assignment' => Assignment::simplePaginate(10)
            // 'assignment' => DB::table('assignments')->simplePaginate(10)
        ];

        return view('admin.assignment', $data);
    }

    public function postUpdatePassword(Request $request)
    {
    	$this->validate($request, [
            'old' => 'required',
            'password' => 'required|confirmed', 
        ]);

    	$user = Admin::find(Auth::guard('admin')->id());
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
