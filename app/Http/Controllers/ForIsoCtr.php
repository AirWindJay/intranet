<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\forisocsat;
use App\actlog;
use App\city;

class ForIsoCtr extends Controller
{
    public function dashboard()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $units = DB::SELECT("SELECT * FROM jhay.intranet_forisounits ORDER BY ward asc");
        return view('qualityassurance.dashboard', compact(
            'hpersonal',
            'units'
        ));
    }

    public function generatereport(request $request)
    {

    }

    public function form()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $cities = city::ORDERBY('cty', 'asc')->get();
        $units = DB::SELECT("SELECT * FROM jhay.intranet_forisounits ORDER BY ward asc");
        return view('qualityassurance.csat', compact(
            'hpersonal',
            'units',
            'cities'
        ));
    }

    public function saveform(request $request)
    {
        // return $request;
        $csat = new forisocsat();
        $csat->bghmc_employee           =$request->bghmc_employee;
        $csat->unit_id                  =$request->area;
        $csat->staff_name               =$request->staff;


        if($request->originalpurpose == '1')
        {
            $csat->purpose1 = '1';
        }
        elseif($request->originalpurpose == '2')
        {
            $csat->purpose2 = '1';
        }
        elseif($request->originalpurpose == '3')
        {
            $csat->purpose3 = '1';
        }
        elseif($request->originalpurpose == '4')
        {
            $csat->purpose4 = '1';
        }
        elseif($request->originalpurpose == '5')
        {
            $csat->purpose5 = '1';
        }
        elseif($request->originalpurpose == '6')
        {
            $csat->purpose6 = '1';
        }
        elseif($request->originalpurpose == '7')
        {
            $csat->purpose7 = '1';
        }
        elseif($request->originalpurpose == '8')
        {
            $csat->purpose7_1 = '1';
        }
        elseif($request->originalpurpose == '9')
        {
            $csat->purpose7_2 = '1';
        }
        elseif($request->originalpurpose == '10')
        {
            $csat->purpose8 = '1';
        }
        $csat->purpose_others           =$request->purpose_others;
        $csat->time_survey              =$request->timer;
        $csat->survey1                  =$request->survey1;
        $csat->survey2                  =$request->survey2;
        $csat->survey3                  =$request->survey3;
        $csat->survey4                  =$request->survey4;
        $csat->survey5                  =$request->survey5;
        $csat->survey6                  =$request->survey6;
        $csat->survey7                  =$request->survey7;
        $csat->satisfied                =$request->satisfied;
        $csat->comment_type             =$request->comment_type;
        $csat->comment                  =$request->ack_remarks;
        $csat->requester_name           =$request->requester_name;
        $csat->requester_address        =$request->requester_address;
        $csat->requester_contact        =$request->requester_contact;
        $csat->save();

        $actlog = new actlog();
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'Save CSAT: '.$csat->id. ' Area: '.$csat->unit_id;
        $actlog->save();
        
        return redirect('/foriso/dashboard')
        ->withErrors(['username' => 'Invalid username or password']);
    } 

    public function reports(request $request)
    {   
        if($request->month == '01')
        {
            $month = 'January';
        }
        elseif($request->month == '02')
        {
            $month = 'February';
        }
        elseif($request->month == '03')
        {
            $month = 'March';
        }
        elseif($request->month == '04')
        {
            $month = 'April';
        }
        elseif($request->month == '05')
        {
            $month = 'May';
        }
        elseif($request->month == '06')
        {
            $month = 'June';
        }
        elseif($request->month == '07')
        {
            $month = 'July';
        }
        elseif($request->month == '08')
        {
            $month = 'August';
        }
        elseif($request->month == '09')
        {
            $month = 'September';
        }
        elseif($request->month == '10')
        {
            $month = 'October';
        }
        elseif($request->month == '11')
        {
            $month = 'November';
        }
        elseif($request->month == '12')
        {
            $month = 'December';
        }
        $year = $request->year;
        $date = "'".$request->year."-".$request->month."-01'";
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $data = DB::SELECT("EXEC jhay.sp_forisocsat $date, $request->unit");
        $pos = DB::SELECT("EXEC jhay.sp_forisocomments $date, $request->unit");
        $neg = DB::SELECT("EXEC jhay.sp_forisocomments2 $date, $request->unit");

        if($data[0]->result1 == '0')
        {
            return redirect('/foriso/dashboard')
            ->withErrors(['err' => 'No Data Found']);
        }
        return view('qualityassurance.reports', compact(
            'hpersonal',
            'data',
            'date',
            'month',
            'year',
            'pos',
            'neg'
        ));
    }

    Public function ratings(request $request)
    {
        if($request->month == '01')
        {
            $month = 'January';
        }
        elseif($request->month == '02')
        {
            $month = 'February';
        }
        elseif($request->month == '03')
        {
            $month = 'March';
        }
        elseif($request->month == '04')
        {
            $month = 'April';
        }
        elseif($request->month == '05')
        {
            $month = 'May';
        }
        elseif($request->month == '06')
        {
            $month = 'June';
        }
        elseif($request->month == '07')
        {
            $month = 'July';
        }
        elseif($request->month == '08')
        {
            $month = 'August';
        }
        elseif($request->month == '09')
        {
            $month = 'September';
        }
        elseif($request->month == '10')
        {
            $month = 'October';
        }
        elseif($request->month == '11')
        {
            $month = 'November';
        }
        elseif($request->month == '12')
        {
            $month = 'December';
        }
        $year = $request->year;
        $date = "'".$request->year."-".$request->month."-01'";
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        
    }
}
