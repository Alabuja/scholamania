<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!empty(auth()->guard('admin')->id() ))
        {
            $data = DB::table('admins')
                        ->select('admins.id')
                        ->where('admins.id', auth()->guard('admin')->id())
                        ->get();

            if(!$data[0]->id)
            {
                return redirect()->intended('admin/login/')->with('danger', 'You do not have access to this area!!!'); // Status becomes danger
            }

            return $next($request);
        }
        
        return redirect()->intended('admin/login/')->with('status', 'Please login to access this area');
    }
}
