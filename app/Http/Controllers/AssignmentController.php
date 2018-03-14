<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Validator;
use App\Models\Assignment;
use Auth;
use Image;
use File;
use Cloudder;


class AssignmentController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function getAssignment()
    {
    	return view('assignments');
    }

    public function postAssignment(Request $request)
    {
    	$this->validate($request, [
            'assignment_submitted' => 'required|mimes:pdf,docx,doc,xls,xlsx,pptx,ppt',
        ]);

        $assignment = $request->file('assignment_submitted')->getRealPath();

        Cloudder::upload($assignment, null);
        list($width, $height) = getimagesize($assignment);

        $assignmentUrl = Cloudder::show(Cloudder::getPublidId(), ['width' => 150, 'height' => 150 ]);

        $this->saveAssignment($request, $assignmentUrl);

        $request->session()->flash('success', 'Assignment succesfully submitted!!!');
 
        return back();

    }
    private function saveAssignment(Request $request, $assignmentUrl)
    {
        $assign = new Assignment;
        $assign->assignment_submitted = $request->file('assignment_submitted')->getClientOriginalName();
        $assign->assignment_url = $assignmentUrl;
        $assign->user_id        = Auth::user()->id;
        
        $assign->save();
    }

}
