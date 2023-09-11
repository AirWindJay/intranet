<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class BillingCtr extends Controller
{
    public function index()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $depts = DB::SELECT("SELECT DISTINCT tsdesc FROM les.tsdesc");

        return view('billing.index', compact(
            'hpersonal',
            'mydata',
            'depts'
        ));
    }

    public function patlist(request $request)
    {
        $toecode = $request->toecode;
        $dept2 = $request->dept;

        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        // $disdate = $request->disdate.' 00:00:00.000';
        $datefrom = $request->datefrom.' 00:00:00.000';
        $dateto = $request->dateto.' 00:00:00.000';
        

        // $pats = DB::select("SELECT * FROM les.fnIncompleteCF4('$disdate') WHERE toecode = '$toecode' AND dept = '$dept2' ORDER BY patlast");
        $pats = DB::select("SELECT * FROM les.fnIncompleteCF4('$datefrom', '$dateto', '$dept2') WHERE toecode = '$toecode' ORDER BY patlast");
        
        $datefrom = $request->datefrom;
        $dateto = $request->dateto;

        // $pats = DB::select("SELECT * FROM les.fnIncompleteCF4('$disdate') ORDER BY patlast");
        $depts = DB::SELECT("SELECT DISTINCT tsdesc FROM les.tsdesc");


        return view('billing.patlist', compact(
            'hpersonal',
            'mydata',
            'pats',
            'date',
            'depts',
            'dept2',
            'toecode',
            'datefrom',
            'dateto'
        ));
    }

    public function allpatlist(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $daily = $request->daily.' 00:00:00.000';
        $daily2 = $request  ->daily;

        // $pats = DB::select("SELECT * FROM les.fnIncompleteCF4('$disdate') WHERE toecode = '$toecode' AND dept = '$dept2' ORDER BY patlast");
        $pats = DB::select("SELECT * FROM les.fnIncompleteCF42('$daily') ORDER BY patlast");
        
        return view('billing.allpatlist', compact(
            'hpersonal',
            'mydata',
            'pats',
            'daily2'
        ));
    }

    public function CF4Patient(request $request)
    {
        $lists = DB::SELECT("select * from jhay.fnIncompleteCF4_all() where hpercode = '$request->hpercode' order by disdate desc");

        return response()->json($lists);
    }
}