<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\announcements;
use App\announcements2;
use App\ccruposts;
use App\suggestions;
use Carbon\Carbon;
use App\departments;
use App\message;
use App\servicerequest;
use App\intranet_users;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function authname()
    {
        
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function updateuser()
    {
        $departmentOMCC = DB::select("select * from jhay.intranet_department Where division = 'OFFICE OF THE MEDICAL CENTER CHIEF' order by 'department' ASC");
        $departmentMEDICAL = DB::select("select * from jhay.intranet_department Where division = 'MEDICAL SERVICES' order by 'department' ASC");
        $departmentNURSING = DB::select("select * from jhay.intranet_department Where division = 'NURSING SERVICES' order by 'department' ASC");
        $departmentHOPSS = DB::select("select * from jhay.intranet_department Where division = 'HOSPITAL OPERATIONS AND PATIENT SUPPORT SERVICES' order by 'department' ASC");
        $departmentFINANCE = DB::select("select * from jhay.intranet_department Where division = 'FINANCE SERVICES' order by 'department' ASC");
        return view('updateuser', compact(
            'departmentOMCC',
            'departmentMEDICAL',
            'departmentNURSING',
            'departmentHOPSS',
            'departmentFINANCE'
        ));
    }

    public function updateusersave(request $request)
    {

        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        if(($request->department <= 6) && ($request->department >= 1))
        {
            $division     =5;
        }elseif(($request->department <= 14) && ($request->department >= 7))
        {
            $division     =4;
        }elseif(($request->department <= 58) && ($request->department >= 15))
        {
            $division     =2;
        }elseif(($request->department <= 88) && ($request->department >= 59))
        {
            $division     =3;

            DB::table('jhay.intranet_fornursing')->insert(
                ['employeeid' => Auth::user()->employeeid, 'is_active' => '0', 'is_registered' => '0', 'is_thismonth' => '1']
            );

            DB::table('jhay.intranet_fornursing')->insert(
                ['employeeid' => Auth::user()->employeeid, 'is_active' => '0', 'is_registered' => '0', 'is_thismonth' => '2']
            );
        }
        elseif(($request->department <= 97) && ($request->department >= 89))
        {
            $division     =1;
        }

        DB::table('jhay.intranet_user')->insert(
            ['employeeid' => Auth::user()->employeeid, 'role_id' => '1', 'department' =>$request->department, 'division' => $division]
        );

        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        if($mydata[0]->division == 3)
        {
            return redirect('/nurse/dashboard/'.$date2);
        }

        if($mydata[0]->department == 91)
        {
            $updateDetails=array(
                'role_id'           =>8
            );
    
            DB::table('jhay.intranet_user')
                ->where('employeeid', Auth::user()->employeeid)
                ->update($updateDetails);
        }

        if($mydata[0]->department == 53)
        {
            $updateDetails=array(
                'role_id'           =>13
            );
    
            DB::table('jhay.intranet_user')
                ->where('employeeid', Auth::user()->employeeid)
                ->update($updateDetails);
        }

        return redirect('/home');
    }

    
    public function index()
    {   
        
        $user_level = DB::select("select top 1 * from dbo.user_acc where employeeid = '".Auth::user()->employeeid."'");
        $linenusers = DB::select("SELECT * FROM jhay.linen_user");
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata2 = DB::select("select * from hprovider WHERE employeeid = '".Auth::user()->employeeid."' AND empdegree = 'RSW'");
        // $home_announcements = DB::select("SELECT top 15 *  FROM jhay.intranet_announcement where division = '".$mydata[0]->division."' AND is_archived = '0' UNION SELECT top 15 * FROM jhay.intranet_announcement2 Where is_archived = '0' ORDER BY created_at DESC");
        $home_announcements = announcements2::where('is_archived', '0')->orderBy('id', 'desc')->with('animage')->take(18)->get();
        // $first = announcements::where('division', $mydata[0]->division)->where('is_archived', '0');

        // $home_announcements = announcements2::where('division', '10')->where('is_archived', '0')->union($first)->paginate(10);
        $home_animage = DB::select("select * from jhay.intranet_animage");
        $home_animage2 = DB::select("select * from jhay.intranet_animage2");
        $count_suggestionsdaily = DB::select("select count(*) as counter from jhay.intranet_suggestion Where cast(created_at as date) = cast(getdate() as date) and to_me = '1'");
        $count_suggestionstotal = DB::select("select count(*) as counter from jhay.intranet_suggestion where to_me = '1'");
        $count_suggestionsdaily2 = DB::select("select count(*) as counter from jhay.intranet_suggestion Where cast(created_at as date) = cast(getdate() as date) and to_me = '0' and employeeid = '".Auth::user()->employeeid."'");
        $count_suggestionstotal2 = DB::select("select count(*) as counter from jhay.intranet_suggestion where to_me = '0' and employeeid = '".Auth::user()->employeeid."'");
        $count_ccru = DB::select("select count(*) as counter from jhay.intranet_ccrupost Where is_archived = '0' AND cast(created_at as date) = cast(getdate() as date)");
        $count_omcc = DB::select("select count(*) as counter from jhay.intranet_announcement WHERE is_archived = '0' AND division = '1' AND cast(created_at as date) = cast(getdate() as date)");
        $count_medical = DB::select("select count(*) as counter from jhay.intranet_announcement WHERE is_archived = '0' AND division = '2' AND cast(created_at as date) = cast(getdate() as date)");
        $count_nursing = DB::select("select count(*) as counter from jhay.intranet_announcement WHERE is_archived = '0' AND division = '3' AND cast(created_at as date) = cast(getdate() as date)");
        $count_hopss = DB::select("select count(*) as counter from jhay.intranet_announcement WHERE is_archived = '0' AND division = '4' AND cast(created_at as date) = cast(getdate() as date)");
        $count_finance = DB::select("select count(*) as counter from jhay.intranet_announcement WHERE is_archived = '0' AND division = '5' AND cast(created_at as date) = cast(getdate() as date)");

        $countsuggestionstoday = $count_suggestionsdaily[0]->counter;
        $countsuggestions = $count_suggestionstotal[0]->counter;
        $countsuggestionstoday2 = $count_suggestionsdaily2[0]->counter;
        $countsuggestions2 = $count_suggestionstotal2[0]->counter;
        $countccru = $count_ccru[0]->counter;
        $countomcc = $count_omcc[0]->counter;
        $countmedical = $count_medical[0]->counter;
        $countnursing = $count_nursing[0]->counter;
        $counthopss = $count_hopss[0]->counter;
        $countfinance = $count_finance[0]->counter;


        
        $departments = departments::orderBy('department', 'asc')->get();
            return view('home',compact(
                'home_announcements',
                'home_animage',
                'home_animage2',
                'date2',
                'countccru',
                'countomcc',
                'countmedical',
                'user_level',
                'countnursing',
                'counthopss',
                'countfinance',
                'countsuggestions',
                'countsuggestionstoday',
                'countsuggestions2',
                'countsuggestionstoday2',
                'hpersonal',
                'mydata',
                'mydata2',
                'linenusers',
                'departments'
            
            ));
    }

    //confirmations
    public function confirmation()
    {
        return view('confirmations.confirmation');
    }

    public function editconfirmation()
    {
        return view('confirmations.editconfirmation');
    }

    public function deleteconfirmation()
    {
        return view('confirmations.deleteconfirmation');
    }

    public function messageconfirmation()
    {
        return view('confirmations.messageconfirmation');
    }



    //about intranet
    public function intranet()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('about.intranet', compact(
            'hpersonal'
        ));
    }
    

    

    //ABOUT US
    public function history()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('aboutus.history', compact(
            'hpersonal'
        ));
    }

    public function mvqp()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('aboutus.mvqp', compact(
            'hpersonal'
        ));
    }

    public function coh()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('aboutus.coh', compact(
            'hpersonal'
        ));
    }

    public function function()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('aboutus.function', compact(
            'hpersonal'
        ));
    }

    public function orgchart()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('aboutus.orgchart', compact(
            'hpersonal'
        ));
    }

    //WEBMASTER
    public function adduser()
    {   
        return 'Homis Registration';
        // $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        // return view('webmaster.adduser', compact(
        //     'hpersonal'
        // ));
    }

    public function saveuser(request $request)
    {
        // $password = DB::select("select [dbo].[ufn_crypto]('".$request->password."',1) as pass");

        // DB::table('dbo.user_acc')->insert([
        //     'employeeid'            => $request->employeeid,
        //     'user_name'             => $request->username,
        //     'user_pass'             => $password[0]->pass,
        //     'user_level'            => '25',
        //     'user_exp'              => '2050-12-31 00:00:00.000'
        //     ]);

        // DB::table('dbo.hpersonal')->insert([
        //     'employeeid'            => $request->employeeid,
        //     'lastname'              => $request->lname,
        //     'firstname'             => $request->fname,
        //     'middlename'            => $request->mname,
        //     'postitle'              => $request->postitle,
        //     'empstat'               =>'A',
        //     'emplock'               =>'N',
        //     ]);

        // return redirect('/adduser');
        
    }

    public function monitoring()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $counttodayservicerequest = DB::select("select count (*) as count from jhay.intranet_servicerequest WHERE cast(created_at as date) = cast(getdate() as date)");
        $counttodayservicerequest = $counttodayservicerequest[0]->count;
        $counttotalservicerequest = DB::select("select count (*) as count from jhay.intranet_servicerequest");
        $counttotalservicerequest = $counttotalservicerequest[0]->count;

        $counttotalannouncement = DB::select("select count (*) as count from jhay.intranet_announcement");
        $counttotalannouncement = $counttotalannouncement[0]->count;
        $counttodayannouncement = DB::select("select count (*) as count from jhay.intranet_announcement WHERE cast(created_at as date) = cast(getdate() as date)");
        $counttodayannouncement = $counttodayannouncement[0]->count;

        $counttotalccru = DB::select("select count (*) as count from jhay.intranet_ccrupost where is_archived = '0'");
        $counttotalccru = $counttotalccru[0]->count;
        $counttodayccru = DB::select("select count (*) as count from jhay.intranet_ccrupost WHERE cast(created_at as date) = cast(getdate() as date)");
        $counttodayccru = $counttodayccru[0]->count;

        $countusers = DB::select("select count (*) as count from jhay.intranet_user");
        $countusers = $countusers[0]->count;

        $countsuggestions = DB::select("select count (*) as count from jhay.intranet_suggestion where to_me = '1'");
        $countsuggestions = $countsuggestions[0]->count;
        return view('webmaster.monitoring', compact(
            'counttotalservicerequest',
            'counttodayservicerequest',
            'counttotalannouncement',
            'counttodayannouncement',
            'counttotalccru',
            'counttodayccru',
            'countusers',
            'countsuggestions',
            'hpersonal'
        ));
    }
}
