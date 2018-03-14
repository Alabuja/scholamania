<?php

namespace App\Http\Controllers\Individuals;

use App\Individuals\Resource;
use Cloudder;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Auth;
use Validator;
use App\Individuals\Guest;

class ResourceController extends Controller
{
    
	public function getResources()
    {
    	return view('admin.individuals.resource');
    }

    public function getUsersResources()
    {
    	$resources = DB::table('individualResources')->paginate(15);
    	return view('guest.resource')->with('resources', $resources);
    }

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

        $request->session()->flash('success', 'Resources succesfully posted to individuals!!!');
 
        return back();
    }

    private function saveResource(Request $request, $resourceUrl){
        $resource = new Resource;
        $resource->name = $request->file('name')->getClientOriginalName();
        $resource->resource_url = $resourceUrl;

        $resource->save();
    }
}
