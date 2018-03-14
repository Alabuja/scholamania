<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Student;
use App\User;
use Auth;

class StudentController extends Controller
{
    //

    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function getStudents()
    {
        return view('students');
    }

    public function postStudents(Request $request)
    {

    	$students = new Student;
    	$this->validate($request, [
            'student_number' => 'required|numeric',
        ]);

    	$user = User::find(Auth::id());


    	if(empty($student_number))
    	{
    		$user->fill([
                'student_number' => $request->input('student_number')
            ])->save();
    	}
    	$students = new Student;

    	$students->user_id        = Auth::user()->id;

    	$students->save();
    		
        $request->session()->flash('success', 'You just added a new user!!!');
        return back();

            // Image::make($avatar)->resize(120, 120)->saveAs(public_path('/applicationimages/'. $filename));

            // $user = Auth::user();
            // $user->image = $avatar;
            // $user->save();

    }
}
