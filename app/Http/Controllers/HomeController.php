<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Student;
use App\Models\Score;
use App\Models\Coach;
use Auth;
use Image;
use File;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

        // $userscores = [];

        //$topUsers = [];
        //$users = User::findOrFail(1);

        $topScores = DB::table('scores')
                        ->join('users', 'users.id', '=', 'scores.user_id')
                        ->select('users.*', 'scores.*')
                        ->where('scores.score_number', '<=', '100')
                        ->where('scores.score_number', '>=', '0')
                        ->groupBy('scores.user_id')
                        ->selectRaw( "round(avg( score_number ), 2) as score_number, scores.user_id" )
                        ->orderBy('score_number', 'desc')
                        ->take(3)
                        ->get();

        //$avg = $topScores->sum("score_number")/$topScores->count();

        $currentLoggedIn =  round(DB::table('scores')
                            ->select('score_number')
                            ->where('user_id', Auth::user()->id)
                            ->where('score_number', '<=', '100')
                            ->where('score_number', '>=', '0')
                            ->avg('score_number'), 2);

        return view('home')
                ->with('currentLoggedIn', $currentLoggedIn)
                ->with('topScores', $topScores);
    }

    public function updateUser()
    {
        return view('update');
    }

    public function getResources()
    {
        $resources = DB::table('resources')->paginate(15);
        // return view('admin.coach',  ['slides' => $users]);

        return view('resource', ['viewresources' => $resources]);
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateprofile(Request $request)
    {
        $rules = array (
            'phone_number' => 'required|numeric',
            'address' => 'required',
            'student_number' => 'required',
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
            $user = Auth::user();

      //       $file = $request->file('image');
            // $ext = $file->getClientOriginalExtension();

            // $time = time();

            $user->phone_number = $request->input('phone_number');
            $user->address = $request->input('address');
            $user->student_number = $request->input('student_number');
            $user->username = $request->input('username');

            //$students->user_id  = Auth::user()->id;

            //$students->save();
            $user->save();
            // $users->image = $file->storeAs('applicationimages', $time.".{$ext}");


            //$users->save();

      //       $imageName = $time. '.' . $ext;
            // $request->image->move(public_path('applicationimages'), $imageName);
            $request->session()->flash('success', 'User Profile Successfully Updated!!!');
            return back();
       }
        
    }
}
