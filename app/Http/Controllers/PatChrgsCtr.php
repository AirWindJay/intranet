<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class PatChrgsCtr extends Controller
{
    public function index()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");

        return view('PatChrgs.index', compact(
            'hpersonal'
        ));
    }

    public function JS_GenPatientList(request $request)
    {
        $patlist = DB::SELECT("select * from jhay.fnPatSearch('%$request->hospnumber%', '%$request->patlast%', '%$request->patfirst%', '%$request->patmiddle%')");
        return response()->json($patlist);
    }

    public function JS_GenEncounterList(request $request)
    {
        $enctrs = DB::SELECT("SELECT * from les.AllEncounters('$request->hpercode') order by admdate desc");
        return response()->json($enctrs);
    }

    public function JS_submitenccode(request $request)
    {   
        $chrgs = DB::SELECT("SELECT * from les.soaDetails('$request->enccode') order by pcchrgdte");
        return response()->json($chrgs);
    }
}
