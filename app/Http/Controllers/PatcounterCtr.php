<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class PatcounterCtr extends Controller
{
    public function index()
    {
        $patcount = 0;
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('PatientCounter.index', compact(
            'hpersonal',
            'patcount'
        ));
    }
    public function generate(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");

        if($request->type == 'OPD')
        {
            $patcount = DB::SELECT("SELECT Count(Distinct hpercode) as patcount from hopdlog where cast(opddtedis as date) = cast('$request->date' as date)");
            $patcount = $patcount[0]->patcount;
        }
        elseif($request->type == 'ER')
        {
            $patcount = DB::SELECT("SELECT Count(Distinct hpercode) as patcount from herlog where cast(erdtedis as date) = cast('$request->date' as date)");
            $patcount = $patcount[0]->patcount;
        }
        elseif($request->type == 'ADM')
        {
            $patcount = DB::SELECT("SELECT Count(Distinct hpercode) as patcount from hadmlog where cast(admdate as date) <= cast('$request->date' as date) and
            ((CASE WHEN cast(disdate as date) >= cast('$request->date' as date) THEN 1 ELSE 0 END) +
            (CASE WHEN disdate IS NULL THEN 1 ELSE 0 END)) > 0");
            $patcount = $patcount[0]->patcount;
        }


        return view('PatientCounter.index', compact(
            'hpersonal',
            'patcount'
        ));
    }

    public function generatedept(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $patcount = DB::SELECT("SELECT count(DISTINCT hpercode) as patcount
        from hadmlog tbl
        inner join htypser tps on tps.tscode = tbl.tscode
        inner join les.tsdesc ts on tps.tstype = ts.tscode
        where upper(tps.tsdesc) = '$request->dept' and cast(admdate as date) <= cast('$request->date' as date) and
        ((CASE WHEN cast(disdate as date) >= cast('$request->date' as date) THEN 1 ELSE 0 END) +
        (CASE WHEN disdate IS NULL THEN 1 ELSE 0 END)) > 0");
        $patcount = $patcount[0]->patcount;
    

        return view('PatientCounter.index', compact(
            'hpersonal',
            'patcount'
        ));
    }
}