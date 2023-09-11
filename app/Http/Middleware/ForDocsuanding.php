<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;


class ForDocsuanding
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
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $access_level = $hpersonal[0]->user_level;

        if($role == 16)
        {
            return $next($request);
        }
        elseif($role == 17)
        {
            return $next($request);
        }
        elseif($access_level == 25)
        {
            return $next($request);
        }
        elseif($access_level == 65)
        {
            return $next($request);
        }
        elseif($access_level == 67)
        {
            return $next($request);
        }
        elseif($access_level == 101)
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
