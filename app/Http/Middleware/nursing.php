<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;

class nursing
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
        
        $division = $mydata[0]->division;
        $role = $mydata[0]->role_id;

        if($division == 3)
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
