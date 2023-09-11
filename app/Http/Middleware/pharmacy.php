<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;

class pharmacy
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
        
        $department = $mydata[0]->department;
        $division = $mydata[0]->division;
        $role = $mydata[0]->role_id;

        if($role == 13)
        {
            return $next($request);
        }
        elseif($department == 4)
        {
            return $next($request);
        }
        elseif($department == 26)
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
