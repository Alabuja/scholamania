<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Validator;
use App\Models\Resource;
use Image;
use File;
use Cloudder;

class ResourceController extends Controller 
{
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|mimes:pdf,docx,doc,xls,xlsx,pptx,ppt'
    	]);

        $name = $request->file('name')->getRealPath();

        Cloudder::upload($name, null);
        list($width, $height) = getimagesize($name);

        $resourceUrl = Cloudder::show(Cloudder::getPublicId(), ["width" => 150, "height" => 150]);

        $this->saveResource($request, $resourceUrl);

    	// $validator = Validator::make($request->all(), $rules);

    	// if($validator->fails())
    	// {
    	// 	$messages = $validator->messages();
    	// 	return redirect()->back()->withErrors($messages)->withInput();
    	// }
    	// else
    	// {
    	// 	$resources = new Resource;

    	// 	$file = $request->file('actualfile');
    	// 	$filename = $file->getClientOriginalName();


    	// 	$resources->name = $request->input('name');
    	// 	$resources->actualfile = $file->storeAs('documents', $filename);

    	// 	$resources->save();

    	// 	$request->actualfile->move(public_path('documents'), $filename);
     //        $request->session()->flash('success', 'You Just added a new Resource Material!!!');
     //        return back();

    	// }
    }

    private function saveResource(Request $request, $resourceUrl){
        $resource = new Resource;
        $resource->name = $request->file('name')->getClientOriginalName();
        $resource->resource_url = $resourceUrl;

        $resource->save();
    }
}
