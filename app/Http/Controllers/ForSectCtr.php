<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ForSectCtr extends Controller
{
    public function dashboard()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");

        return view('ForSecretary.dashboard', compact(
            'hpersonal'
        ));
    }

    public function updateaccount(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $updateDetails=array(
            'role_id'          =>$request->role_id,
        );

        // DB::table('jhay.intranet_user')
        //     ->where('employeeid', $employeeid)
        //     ->update($updateDetails);

        if($request->role_id == 18)
        {
            return redirect('/Consignment/ENTdashboard');
        }
        elseif($request->role_id == 19)
        {
            return redirect('/Consignment/ORTHOdashboard');
        }
        elseif($request->role_id == 20)
        {
            return redirect('/Consignment/OPHTHAdashboard');
        }
    }
    
    public function ENTdashboard()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $dept = 'ENT-HNS';
        return view('ForSecretary.searchpatient', compact(
            'hpersonal',
            'dept'
        ));
    }
    
    public function ORTHOdashboard()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $dept = 'ORTHOPEDICS';
        return view('ForSecretary.searchpatient', compact(
            'hpersonal',
            'dept'
        ));
    }
    
    public function OPHTHAdashboard()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $dept = 'OPHTHALMOLOGY';
        return view('ForSecretary.searchpatient', compact(
            'hpersonal',
            'dept'
        ));
    }

    public function patientlist(request $request)
    {
        $dept = $request->dept;
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $patlist = DB::SELECT("SELECT hp.hpercode, hp.patlast, hp.patfirst, hp.patmiddle, hp.patbdate, hp.patbplace, hp.patsex FROM [hospital].[dbo].[hperson] AS hp WHERE hpercode LIKE '%$request->hospnumber' AND patlast LIKE '%$request->patlast%' AND patfirst LIKE '%$request->patfirst%' AND patmiddle LIKE '%$request->patmiddle%'");

        return view('ForSecretary.patientlist', compact(
            'hpersonal',
            'dept',
            'patlist'
        ));
    }

    public function JSgetencctrs(request $request)
    {
        $enctrs = DB::SELECT("SELECT * FROM jhay.GetLogsViaTSCODE('$request->dept', '$request->hpercode')");
    }
}
