<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;


class himoadmin
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

        if($role == 10)
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
