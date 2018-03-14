<?php

namespace App\Http\Controllers\Individuals;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Individuals\Assignment;
use App\Individuals\Guest;
use Cloudder;
use File;
use Auth;

class AssignmentController extends Controller
{
    public function getAssignments()
    {
    	$data = [
            'assignment' => Assignment::all(),
            'assignment' => Assignment::paginate(10)
            // 'assignment' => DB::table('assignments')->simplePaginate(10)
        ];
    	return view('admin.individuals.assignment', $data);
    }

    public function getUsersAssignment()
    {
    	
    	return view('guest.assignment');
    }

    public function store(Request $request)
    {
    	
    }

    public function postAssignment(Request $request)
    {
    	$this->validate($request, [
            'assignment_submitted' => 'required|mimes:pdf,docx,doc,xls,xlsx,pptx,ppt',
        ]);

        $assignment_submitted = $request->file('assignment_submitted')->getRealPath();

        Cloudder::upload($assignment_submitted, null);
        list($width, $height) = getimagesize($assignment_submitted);

        $assignmentUrl = Cloudder::show(Cloudder::getPublicId(), ['width' => 150, 'height' => 150 ]);

        $this->saveAssignment($request, $assignmentUrl);

        $request->session()->flash('success', 'Assignment successfully submitted!!!');
 
        return back();

    }

    private function saveAssignment(Request $request, $assignmentUrl)
    {
        $assign = new Assignment;
        $assign->assignment_submitted = $request->file('assignment_submitted')->getClientOriginalName();
        $assign->assignment_url = $assignmentUrl;
        $assign->guest_id        = Auth::guard('individual')->user()->id;

        $assign->save();
    }
}
