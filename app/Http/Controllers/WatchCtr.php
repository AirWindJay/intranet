<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class WatchCtr extends Controller
{
    public function index()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $wards = DB::SELECT("SELECT upper(wardname) as ward from hward where wardstat = 'A' order by wardname asc");
        $user_name = $hpersonal[0]->user_name;
        $cc = DB::SELECT("SELECT cc = (case when exists(select * from user_acc_ncare where user_name = '$user_name') then 1 else 0 end)");
        $cc = $cc[0]->cc;
        return view('watcherID.index', compact(
            'hpersonal',
            'wards',
            'cc'
        ));
    }

    public function perward(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $pats = DB::SELECT("SELECT * FROM jhay.fnWatchersIDLog() WHERE ward = '$request->ward'");
        $ward = $request->ward;
        return view('watcherID.perward', compact(
            'hpersonal',
            'pats',
            'ward'
        ));
    }

    public function returned(request $request)
    {
        DB::INSERT("INSERT INTO hospital.jhay.watchidlog (enccode) VALUES ('$request->enccode')");
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $wards = DB::SELECT("SELECT nc.user_name, upper(wardname) as wardname from dbo.user_acc_ncare nc left join hward hw on nc.wardcode = hw.wardcode WHERE nc.user_name = '".$hpersonal[0]->user_name."' ORDER BY wardname");
        $pats = DB::SELECT("SELECT * FROM jhay.fnWatchersIDLog() WHERE ward = '$request->ward'");
        $ward = $request->ward;
        return view('watcherID.perward', compact(
            'hpersonal',
            'pats',
            'ward'
        ));
    }

    public function generatereport(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
    
        $pats = DB::SELECT("SELECT * FROM jhay.fnWatchersIDLog() where cast(iddate as date) between cast('$request->date_from' as date) and cast('$request->date_to' as date) and watchid IS NOT NULL");
        return view('watcherID.reports', compact(
            'hpersonal',
            'pats'
        ));
    }
}
