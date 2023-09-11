<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;


class forsect
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
        
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $role = $mydata[0]->role_id;
        $department = $mydata[0]->department;

        if($role == 14)
        {
            return $next($request);
        }
        elseif($role == 18)
        {
            return $next($request);
        }
        elseif($role == 19)
        {
            return $next($request);
        }
        elseif($role == 20)
        {
            return $next($request);
        }
        elseif($role == 9)
        {
            return $next($request);
        }
        else
        {
            return redirect ('/home');
        }
    }
}
