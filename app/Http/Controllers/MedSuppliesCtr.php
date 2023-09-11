<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class MedSuppliesCtr extends Controller
{
    public function index()
    {

        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $patname = '';
        $hosnum = '';
        $numcharge = '';
        $details = '';
        $chrgs = DB::SELECT("SELECT * FROM jhay.fngetmedicalsupplies('111111111111119') order by dateoforder desc");
        
        return view('MedSupplies.index', compact(
            'hpersonal',
            'patname',
            'hosnum',
            'numcharge',
            'details',
            'chrgs'
    
        ));
    }

    public function selectpatient(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $numcharge = '';
        $details = '';

        $chrgs = DB::SELECT("SELECT * FROM jhay.fngetmedicalsupplies('$request->hpercode') order by dateoforder desc");

        $pat = DB::SELECT("SELECT * FROM hperson WHERE hpercode = '$request->hpercode'");
        $pat = $pat[0];
        $patname = $pat->patlast.', '.$pat->patfirst.' '.$pat->patmiddle;
        $hosnum = $request->hpercode;
        

        return view('MedSupplies.index', compact(
            'hpersonal',
            'patname',
            'hosnum',
            'numcharge',
            'details',
            'chrgs'
        ));
    }
}