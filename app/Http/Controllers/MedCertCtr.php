<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class MedCertCtr extends Controller
{
    public function index()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $test = 'test';

        return view('medicalcert.index', compact(
            'hpersonal',
            'mydata'
        ));
    }

    public function patientsearch(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $patients = [];
        if($request->hos_no != null)
        {
            $patients = DB::select("SELECT * FROM hperson WHERE hpercode LIKE '%$request->hos_no'");
        }
        elseif($request->lastname != null)
        {
            $patients = DB::select("SELECT * FROM hperson WHERE patlast LIKE '$request->lastname'");
        }
        elseif($request->firstname != null)
        {
            $patients = DB::select("SELECT * FROM hperson WHERE patfirst LIKE '$request->firstname'");
        }
        
        
        return view('medicalcert.patientlist', compact(
            'hpersonal',
            'mydata',
            'patients'
        ));
    }

    public function generateenctr($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $encounters = DB::select("EXEC les.getEncounters '$id'");
        $pat = DB::SELECT("SELECT * FROM hperson WHERE hpercode = '$id'");
        $pat = $pat[0];

        return view('medicalcert.enctrlist', compact(
            'hpersonal',
            'mydata',
            'encounters',
            'pat'
        ));
    }

    public function print(request $request)
    {
        $pat = DB::select("EXEC les.spmedicalcertificate '$request->enccode'");
        $hc = $request->hpercode;
        $enccode = $request->enccode;
        $datetoday = DB::select("SELECT GETDATE() AS datetoday");
        $datetoday = $datetoday[0]->datetoday;

        if ($pat == null)
        {
            return view('medicalcert.printnotfound', compact(
                'datetoday',
                'hc'
            ));
        }
        $pat = $pat[0];
        return view('medicalcert.print', compact(
            'pat',
            'datetoday',
            'hc',
            'enccode'
        ));
    }
    
    public function fastprint(request $request)
    {
        DB::statement("exec les.SaveMedCertNo '$request->enccode'");
        $pat = DB::select("EXEC les.spmedicalcertificate '$request->enccode'");
        $hc = $request->hc;
        $enccode = $request->enccode;
        $datetoday = DB::select("SELECT GETDATE() AS datetoday");
        $datetoday = $datetoday[0]->datetoday;
        

        $pat = $pat[0];
        return view('medicalcert.fastprint', compact(
            'pat',
            'datetoday',
            'hc',
            'enccode',
            'request'
        ));
    }

    public function medico_legal()
    {
        $datetoday = DB::select("SELECT GETDATE() AS datetoday");
        $datetoday = $datetoday[0]->datetoday;
        return view('medicalcert.medico_legal', compact(
            'pat',
            'datetoday',
            'hc',
            'enccode'
        ));
    }
}
