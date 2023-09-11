<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\announcements;
use App\ccruposts;
use App\suggestions;
use Carbon;
use App\departments;
use App\servicerequest;
use App\servicerequesttime;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;
use App\playaudio;
use App\servicerequestcsat;
use App\reminders;

class ServiceRequestController extends Controller
{

    public function request()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $users = User::get();
        $departments = departments::orderBy('department', 'asc')->get();
        $services = servicerequest::orderBy('id', 'desc')->where('created_at', '>=', Carbon\Carbon::today())->get();
        return view('servicerequest.request')
            ->with('services', $services)
            ->with('users', $users)
            ->with('departments', $departments)
            ->with('hpersonal', $hpersonal);
    }

    public function requestsave(request $request)
    {

        $service = new servicerequest();
        $service->employeeid        =Auth::user()->employeeid;
        $service->category          =$request->category;
        $service->location          =$request->location;
        $service->remarks           =$request->remarks;
        $service->status            ='0';
        $service->save();

        $servicetime = new servicerequesttime();
        $servicetime->service_id        =$service->id;
        $servicetime->save();

        DB::table('jhay.intranet_playaudio')
            ->where('id', 1)
            ->update(['trigger' => 1]);

        return redirect('/home');
    }

    public function myrequests(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $hpersonal2 = DB::select("select * from hpersonal");
        $services = DB::select("select top 10 * from jhay.intranet_servicerequest WHERE employeeid = '".Auth::user()->employeeid."' order by id desc");
        return view('servicerequest.myrequests', compact(
            'services',
            'hpersonal2',
            'hpersonal'
        ));
    }
    
    public function myrequestsack($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $services = DB::select("select top (1) * from jhay.intranet_servicerequest where id = ".$id);
        return view('servicerequest.myrequestack', compact(
            'services',
            'hpersonal'
        ));
    }

    public function myrequestsacksave(request $request)
    {      
        $loc = DB::select("SELECT * FROM jhay.intranet_servicerequest WHERE id = '".$request->id."'");
        $loc = $loc[0]->location;
        
        $timer = DB::select("select getdate() as time");
        $timer = $timer[0]->time;

        $csat = new servicerequestcsat();
        $csat->servicerequest_id        =$request->id;
        // $csat->rating                   =$request->rating;
        $csat->timer                    =$request->timer;
        $csat->bghmc_employee           =$request->bghmc_employee;
        $csat->purpose1                 =$request->purpose1;
        $csat->purpose2                 =$request->purpose2;
        $csat->purpose3                 =$request->purpose3;
        $csat->purpose4                 =$request->purpose4;
        $csat->purpose5                 =$request->purpose5;
        $csat->purpose6                 =$request->purpose6;
        $csat->purpose7                 =$request->purpose7;
        $csat->purpose7_1               =$request->purpose7_1;
        $csat->purpose7_2               =$request->purpose7_2;
        $csat->purpose8                 =$request->purpose8;
        $csat->purpose_others           =$request->purpose_others;
        $csat->survey1                  =$request->survey1;
        $csat->survey2                  =$request->survey2;
        $csat->survey3                  =$request->survey3;
        $csat->survey4                  =$request->survey4;
        $csat->survey5                  =$request->survey5;
        $csat->survey6                  =$request->survey6;
        $csat->satisfied                =$request->satisfied;
        $csat->requester_name           =$request->requester_name;
        $csat->requester_address        =$request->requester_address;
        $csat->requester_contact        =$request->requester_contact;
        $csat->save();
        
        $updateDetails2=array(
            'time_acknowledge'          => date('H:i:s', strtotime($timer)),
        );

        $csat = new servicerequestcsat();
        $csat->servicerequest_id        =$request->id;
        
        
        DB::table('jhay.intranet_servicerequesttime')
            ->where('service_id', $request->id)
            ->update($updateDetails2);

        $updateDetails=array(
            'ack_remarks'     =>$request->ack_remarks,
            'status'          => '3',
        );

        DB::table('jhay.intranet_servicerequest')
            ->where('id', $request->id)
            ->update($updateDetails);
        
        return redirect('/myrequests');

    }

    public function adminmyrequestsack($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $services = DB::select("select top (1) * from jhay.intranet_servicerequest where id = ".$id);
        return view('servicerequest.adminmyrequestack', compact(
            'services',
            'hpersonal'
        ));
    }

    public function adminmyrequestsacksave(request $request)
    {        
        $loc = DB::select("SELECT * FROM jhay.intranet_servicerequest WHERE id = '".$request->id."'");
        $loc = $loc[0]->location;

        $timer = DB::select("select getdate() as time");
        $timer = $timer[0]->time;

        $csat = new servicerequestcsat();
        $csat->servicerequest_id        =$request->id;
        // $csat->rating                   =$request->rating;
        $csat->timer                    =$request->timer;
        $csat->bghmc_employee           =$request->bghmc_employee;
        $csat->purpose1                 =$request->purpose1;
        $csat->purpose2                 =$request->purpose2;
        $csat->purpose3                 =$request->purpose3;
        $csat->purpose4                 =$request->purpose4;
        $csat->purpose5                 =$request->purpose5;
        $csat->purpose6                 =$request->purpose6;
        $csat->purpose7                 =$request->purpose7;
        $csat->purpose7_1               =$request->purpose7_1;
        $csat->purpose7_2               =$request->purpose7_2;
        $csat->purpose8                 =$request->purpose8;
        $csat->purpose_others           =$request->purpose_others;
        $csat->survey1                  =$request->survey1;
        $csat->survey2                  =$request->survey2;
        $csat->survey3                  =$request->survey3;
        $csat->survey4                  =$request->survey4;
        $csat->survey5                  =$request->survey5;
        $csat->survey6                  =$request->survey6;
        $csat->satisfied                =$request->satisfied;
        $csat->requester_name           =$loc.' - '.$request->requester_name;
        $csat->requester_address        =$request->requester_address;
        $csat->requester_contact        =$request->requester_contact;
        $csat->save();
        
        $updateDetails2=array(
            'time_acknowledge'          => date('H:i:s', strtotime($timer)),
        );
        
        DB::table('jhay.intranet_servicerequesttime')
            ->where('service_id', $request->id)
            ->update($updateDetails2);


        $updateDetails=array(
            'ack_remarks'     =>$request->ack_remarks,
            'status'          => '3',
        );

        DB::table('jhay.intranet_servicerequest')
            ->where('id', $request->id)
            ->update($updateDetails);
        
        return redirect('/admin/maintenance');

    }

    public function home()
    {   
        $users = DB::select("select * from hpersonal");
        $department = DB::select("select * from jhay.intranet_department");
        $services0 = DB::select("select * from jhay.intranet_servicerequest where status = '0'  order by id desc");
        $services1 = DB::select("select * from jhay.intranet_servicerequest where status = '1'  order by id desc");
        return view('servicerequest.home', compact(
            'users',
            'department',
            'services0',
            'services1'
        ));

        return view('servicerequest.home');
       
    }

    public function getservicerequest()
    {
        $services = DB::SELECT("EXEC jhay.spGetServiceRequest");
        return response()->json($services);
    }

    public function index()
    {   
        $users = User::get();
        $departments = departments::get();
        $services = servicerequest::orderBy('id', 'desc')->get();
        return view('servicerequest.home')
            ->with('services', $services)
            ->with('users', $users)
            ->with('departments', $departments);
    }

    public function servicelist()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $hpersonal2 = DB::select("select * from hpersonal");
        $services0 = DB::select("select * from jhay.intranet_servicerequest where status = '0'  order by id desc");
        $services1 = DB::select("select * from jhay.intranet_servicerequest where status = '1'  order by id desc");
        return view('servicerequest.servicelist', compact(
            'services0',
            'services1',
            'hpersonal',
            'hpersonal2'
        ));
    }

    public function serviceprocess(request $request)
    {   
        $timer = DB::select("select getdate() as time");
        $timer = $timer[0]->time;
        
        $updateDetails2=array(
            'time_process'          => date('H:i:s', strtotime($timer)),
        );
        
        DB::table('jhay.intranet_servicerequesttime')
            ->where('service_id', $request->id)
            ->update($updateDetails2);

        
        $updateDetails=array(
            'status'          => '1',
            'officerid'       => Auth::user()->employeeid
        );

        $thisservice = DB::SELECT("SELECT top 1 * FROM jhay.intranet_servicerequest WHERE id = '$request->id'");
        $thisservice = $thisservice[0];

        if($thisservice->officerid == null)
        {  
        DB::table('jhay.intranet_servicerequest')
            ->where('id', $request->id)
            ->update($updateDetails);

        
        DB::table('jhay.intranet_playaudio')
            ->where('id', 1)
            ->update(['trigger' => 1]);
        }
        return redirect('/servicelist');
    }

    public function servicefinish(request $request)
    {   
        $timer = DB::select("select getdate() as time");
        $timer = $timer[0]->time;
        
        $updateDetails2=array(
            'time_finish'          => date('H:i:s', strtotime($timer)),
        );
        
        DB::table('jhay.intranet_servicerequesttime')
            ->where('service_id', $request->id)
            ->update($updateDetails2);

        $updateDetails=array(
            'status'          => '2'
        );

        DB::table('jhay.intranet_servicerequest')
            ->where('id', $request->id)
            ->update($updateDetails);

        return redirect('/servicelist');
    }

    public function playaudio()
    {
        $audio = DB::select("select top 1 * from jhay.intranet_playaudio");
        $trigger = $audio[0]->trigger;
    	return response()->json($trigger);
    }

    public function stopaudio()
    {
        DB::table('jhay.intranet_playaudio')
            ->where('id', 1)
            ->update(['trigger' => 0]);
    }

    public function servicemaintenance()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $hpersonal2 = DB::select("select * from hpersonal");
        $services = DB::select("select top 15 * from jhay.intranet_servicerequest order by id desc");
        return view('servicerequest.maintenance', compact(
            'services',
            'hpersonal2',
            'hpersonal'
        ));
    }

    public function deleterequest($id)
    {
        $service = servicerequest::where('id', $id)->first();
        $service->delete();

        return redirect('/admin/maintenance');
    }

    public function servicereports()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $hpersonal2 = DB::select("select * from hpersonal");
        $services = DB::select("SELECT * FROM jhay.intranet_servicerequest AS tb1 LEFT JOIN jhay.intranet_servicerequesttime AS tb2 ON tb1.id = tb2.service_id LEFT JOIN jhay.intranet_servicerequestcsat AS tb3 ON tb1.id = tb3.servicerequest_id WHERE status = '3'");
        return view('servicerequest.report.index', compact(
            'services',
            'hpersonal2',
            'hpersonal'
        ));
    }

    public function perservice($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $hpersonal2 = DB::select("select * from hpersonal");
        $services = DB::select("SELECT * FROM jhay.intranet_servicerequest AS tb1 LEFT JOIN jhay.intranet_servicerequesttime AS tb2 ON tb1.id = tb2.service_id LEFT JOIN jhay.intranet_servicerequestcsat AS tb3 ON tb1.id = tb3.servicerequest_id WHERE status = '3' AND tb1.id = '".$id."");
        
        return view('servicerequest.report.perservice', compact(
            'services',
            'hpersonal2',
            'hpersonal'
        ));
    }

    public function reportgenerate(request $request)
    {

        // SELECT * FROM jhay.intranet_servicerequest WHERE CONVERT(VARCHAR(7), created_at, 111) = CONVERT(VARCHAR(7), convert(datetime, '2019-03-01', 121), 111)
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $month = $request->month;
        $year = $request->year;
        $date = "'".$year."-".$month."-01'";
        $monthname = DB::SELECT("SELECT MONTH(getdate()) AS CSATM");
        $monthname = $monthname[0]->CSATM;
        $result = DB::SELECT("SELECT * FROM jhay.intranet_servicerequest WHERE [status] = '3' AND CONVERT(VARCHAR(7), created_at, 111) = CONVERT(VARCHAR(7), convert(datetime, $date, 121), 111)");
        $total_count = DB::SELECT("SELECT COUNT(id) AS TOTAL_COUNT FROM jhay.intranet_servicerequest WHERE CONVERT(VARCHAR(7), created_at, 111) = CONVERT(VARCHAR(7), convert(datetime, $date, 121), 111)");
        

        return view('servicerequest.report.print', compact(
            'hpersonal',
            'result',
            'monthname'
        ));
    }

    public function generatereportservicerequest()
    {
        $services1 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '1' group by category");
        $services2 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '2' group by category");
        $services3 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '3' group by category");
        $services4 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '4' group by category");
        $services5 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '5' group by category");
        $services6 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '6' group by category");
        $services7 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '7' group by category");
        $services8 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '8' group by category");
        $services9 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '9' group by category");
        $services10 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '10' group by category");
        $services11 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '11' group by category");
        $services12 = DB::SELECT("SELECT category, count(*) as cc from jhay.intranet_servicerequest where month(created_at) = '12' group by category");
        
        $hpersonal2 = DB::select("select * from hpersonal");
        return view('servicerequest.report.test', compact(
            'services1',
            'services2',
            'services3',
            'services4',
            'services5',
            'services6',
            'services7',
            'services8',
            'services9',
            'services10',
            'services11',
            'services12'
        ));
    }
}
