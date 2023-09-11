<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;


class watchid
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
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $user_name = $hpersonal[0]->user_name;
        $cc = DB::SELECT("SELECT cc = (case when exists(select * from user_acc_ncare where user_name = '$user_name') then 1 else 0 end)");
        $cc = $cc[0]->cc;
        
        if($cc == 1)
        {
            return $next($request);
        }
        elseif($role == 9)
        {
            return $next($request);
        }
        else
        {
            return redirect('home');
        }
    }
}
