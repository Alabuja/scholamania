<?php

namespace App\Http\Controllers\Individuals\Auth;

use App\Individuals\Guest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/individual/home'; //Put dasboard as the url

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLoginForm()
    {
    	return view('guest.auth.login');
    }

    public function authenticate(Request $requests)
    {
    	$email = $requests->input('email');
    	$password = $requests->input('password');

    	if(auth()->guard('individual')->attempt(['email' => $email, 'password' => $password], $requests->has('remember') ))
    	{
    		return redirect()->intended('individual/home');
    	}

    	return redirect()->intended('individual/login')->with('status', 'Invalid Login Credentials!!!');
    }

    public function getLogout()
    {
    	auth()->guard('individual')->logout();
    	return redirect()->intended('individual/login');
    }
}
