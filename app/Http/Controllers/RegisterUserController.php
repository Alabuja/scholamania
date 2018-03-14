<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\NewGuestMail;
use App\Mail\NewGuestFile;
use MAbiola\Paystack\Paystack;
use App\Individuals\Resource;
use Mail;

class RegisterUserController extends Controller
{
    //
    public $sendMessage = [];
	public function getGuest()
	{
		return view('guest.newusers');
	}

	public function initiate(Request $request)
	{
		//(new \Dotenv\Dotenv(__DIR__))->load();
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'phone_number' => '',
			'address' => '',
			'username' => 'required',
		]);

		//$sendMessage = [];
		$sendMessage['name'] = $request->input('name');
		$sendMessage['email'] = $request->input('email');
		$sendMessage['phone_number'] = $request->input('phone_number');
		$sendMessage['address'] = $request->input('address');
		$sendMessage['username'] = $request->input('username');
		$request->session()->put('sendMessage', $sendMessage);
		//$email = $sendMessage['email'];

		
		//create paystack lib object
		$paystack = Paystack::make();

		//create transaction
	
		$getAuthorization = $paystack->startOneTimeTransaction('20000', $sendMessage['email']);
		
		return redirect($getAuthorization['authorization_url'])->with($request->session()->get('sendMessage'));

		
	}

	 public function verify(Request $request)
    {

		$this->validate($request, [
			'trxref' => 'required',
		]);

      	$sendMessage = [];
     	$sendMessage['name'] = $request->input('name');
	    $sendMessage['email'] = $request->input('email');
		$sendMessage['phone_number'] = $request->input('phone_number');
		$sendMessage['address'] = $request->input('address');
		$sendMessage['username'] = $request->input('username');

    	$sendMessage = $request->session()->get('sendMessage');
    	$datas = [
			'resources' => Resource::all()
		];
                         
		    $paystack = Paystack::make();
		    $verifyTransaction = $paystack->verifyTransaction($request->trxref);
		    //if verification successful
		if ($verifyTransaction) {
		        
		    /**
			*Send file Attachment if transaction is successful 
		    */
		    
		    Mail::to('alabujadaniel@gmail.com')->send(new NewGuestMail($sendMessage));
		    foreach($datas as $data){
		       	Mail::to($sendMessage['email'])->send(new NewGuestFile($data));
		    }
		        
        	$request->session()->flash('success', 'Your transaction was successful. In the mean time, check your Email for your materials!!!');
 
        	return back();
    	}
    	else
    	{
    		$request->session()->flash('failure', 'Oops, Something Went Wrong!!!');
 
        	return back();
    	}

    }
}
