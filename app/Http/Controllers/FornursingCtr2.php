<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\date;
use App\fornursing;
use App\ward;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
use App\Hpersonal;

class FornursingCtr2 extends Controller
{
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    // THIS IS FOR LEVEL 1
    
    public function level1noward()
    {
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $hpersonal2 = DB::select("select * from hpersonal");
        $date = DB::select("select top 1 * from jhay.intranet_date");
        $wards = DB::select("select * from jhay.intranet_ward order by ward_name asc");
        $notregistered = DB::select("SELECT * FROM jhay.intranet_fornursing as tb1 LEFT JOIN jhay.intranet_user as tb2 ON tb1.employeeid = tb2.employeeid where is_thismonth = '1' AND is_registered = '0' AND tb2.role_id = '1'");
        
        return view('nursing.nurselevel1.noward', compact(
            'hpersonal',
            'hpersonal2',
            'mydata',
            'date',
            'wards',
            'notregistered',
            'date2'
        ));
    }

    public function nurse1list()
    {
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $wards = ward::orderby('ward_name', 'asc')->get();
        $fornursing = DB::select("select * from jhay.intranet_user as tb1 join jhay.intranet_fornursing as tb2 on tb1.employeeid = tb2.employeeid join hpersonal as tb3 on tb3.employeeid = tb2.employeeid where is_thismonth = '1' and role_id = '1' order by lastname asc");
        return view('nursing.nurselevel1.nurselist',compact(
            'fornursing',
            'wards',
            'hpersonal',
            'mydata',
            'date2'
            ));
    }

    public function print1list()
    {
        $fornursing = DB::select("select * from jhay.intranet_user as tb1 join jhay.intranet_fornursing as tb2 on tb1.employeeid = tb2.employeeid join hpersonal as tb3 on tb3.employeeid = tb2.employeeid where is_thismonth = '1' and role_id = '1' order by lastname asc");
        return view('nursing.nurselevel1.printlist',compact(
            'fornursing'
            ));
    }

    public function removeward($id)
    {
        $updateDetails=array(
            'ward_id'           =>null,
            'is_registered'       =>'0'
        );

        DB::table('jhay.intranet_fornursing')
            ->where('employeeid', $id)
            ->update($updateDetails);

        return redirect('/nurse1/list');
    }

    public function replaceward($id)
    {   
        $myward = DB::select("select * from jhay.intranet_fornursing where employeeid = '".$id."'");
        $fornursings = DB::select("select * from hpersonal where employeeid = '".$id."'");
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $wards = ward::orderby('ward_name', 'asc')->get();

        return view('nursing.nurselevel1.replaceward', compact(
            'id',
            'date2',
            'hpersonal',
            'mydata',
            'wards',
            'fornursings',
            'myward'
            ));
    }

    public function replacewardsave(request $request)
    {   
        $updateDetails=array(
            'ward_id'           =>$request->ward
        );

        DB::table('jhay.intranet_fornursing')
            ->where('employeeid', $request->employeeid)
            ->update($updateDetails);

        return redirect('/nurse1/list');
    }


    public function getward($id)
    {   
        
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $date = date::first();
        $nursing = fornursing::where('is_registered', 1)->where('ward_id', $id)->where('is_thismonth', 1)->get();
        $nursing2 = fornursing::where('is_registered', 1)->where('ward_id', $id)->where('is_thismonth', 2)->get();
        $fornursing = DB::select("select * from jhay.intranet_user as tb1 join jhay.intranet_fornursing as tb2 on tb1.employeeid = tb2.employeeid join hpersonal as tb3 on tb3.employeeid = tb2.employeeid where is_thismonth = '1' and role_id = '1' and ward_id = '".$id."' order by lastname asc");
        $fornursing2 = DB::select("select * from jhay.intranet_user as tb1 join jhay.intranet_fornursing as tb2 on tb1.employeeid = tb2.employeeid join hpersonal as tb3 on tb3.employeeid = tb2.employeeid where is_thismonth = '2' and role_id = '1' and ward_id = '".$id."' order by lastname asc");
        $users = Hpersonal::get();
        $wards = ward::orderby('ward_name', 'asc')->get();
        $currentward = ward::where('id', $id)->first();

        return view('nursing.nurselevel1.getward',compact(
            'date',
            'nursing',
            'nursing2',
            'fornursing',
            'fornursing2',
            'users',
            'wards',
            'currentward',
            'hpersonal',
            'mydata',
            'date2'
            ));
    }

    public function editschedule($id)
    {
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $date = date::first();
        $nursing = fornursing::where('ward_id', $id)->where('is_thismonth', 1)->get();
        $nursing2 = fornursing::where('ward_id', $id)->where('is_thismonth', 2)->get();
        $users   = DB::select("select * from hpersonal");
        $currentward = ward::where('id', $id)->first();
        $wards = ward::orderby('ward_name', 'asc')->get();
        return view('nursing.nurselevel1.getwardedit', compact(
            'nursing',
            'nursing2',
            'currentward',
            'date',
            'date2',
            'users', 
            'wards',
            'hpersonal',
            'mydata'
        ));
    }


    public function saveschedule(request $request)
    {
        $nursing = fornursing::where('is_thismonth', 1)->where('ward_id', $request->ward_id)->get();
        $nursing2 = fornursing::where('is_thismonth', 2)->where('ward_id', $request->ward_id)->get();

        foreach($nursing as $nurse)
        {
            $nurse->date1       =$request->date1_1[$nurse->id];
            $nurse->date2       =$request->date1_2[$nurse->id];
            $nurse->date3       =$request->date1_3[$nurse->id];
            $nurse->date4       =$request->date1_4[$nurse->id];
            $nurse->date5       =$request->date1_5[$nurse->id];
            $nurse->date6       =$request->date1_6[$nurse->id];
            $nurse->date7       =$request->date1_7[$nurse->id];
            $nurse->date8       =$request->date1_8[$nurse->id];
            $nurse->date9       =$request->date1_9[$nurse->id];
            $nurse->date10       =$request->date1_10[$nurse->id];
            $nurse->date11       =$request->date1_11[$nurse->id];
            $nurse->date12       =$request->date1_12[$nurse->id];
            $nurse->date13       =$request->date1_13[$nurse->id];
            $nurse->date14       =$request->date1_14[$nurse->id];
            $nurse->date15       =$request->date1_15[$nurse->id];
            $nurse->date16       =$request->date1_16[$nurse->id];
            $nurse->date17       =$request->date1_17[$nurse->id];
            $nurse->date18       =$request->date1_18[$nurse->id];
            $nurse->date19       =$request->date1_19[$nurse->id];
            $nurse->date20       =$request->date1_20[$nurse->id];
            $nurse->date21       =$request->date1_21[$nurse->id];
            $nurse->date22       =$request->date1_22[$nurse->id];
            $nurse->date23       =$request->date1_23[$nurse->id];
            $nurse->date24       =$request->date1_24[$nurse->id];
            $nurse->date25       =$request->date1_25[$nurse->id];
            $nurse->date26       =$request->date1_26[$nurse->id];
            $nurse->date27       =$request->date1_27[$nurse->id];
            $nurse->date28       =$request->date1_28[$nurse->id];
            try
            {
                $nurse->date29       =$request->date1_29[$nurse->id];
            } 
            catch(\Exception $e){}
            try
            {
                $nurse->date30       =$request->date1_30[$nurse->id];
            } 
            catch(\Exception $e){}
            try
            {
                $nurse->date31       =$request->date1_31[$nurse->id];
            } 
            catch(\Exception $e){}
            $nurse->save(); 
        }

        foreach($nursing2 as $nurse)
        {
            $nurse->date1       =$request->date2_1[$nurse->id];
            $nurse->date2       =$request->date2_2[$nurse->id];
            $nurse->date3       =$request->date2_3[$nurse->id];
            $nurse->date4       =$request->date2_4[$nurse->id];
            $nurse->date5       =$request->date2_5[$nurse->id];
            $nurse->date6       =$request->date2_6[$nurse->id];
            $nurse->date7       =$request->date2_7[$nurse->id];
            $nurse->date8       =$request->date2_8[$nurse->id];
            $nurse->date9       =$request->date2_9[$nurse->id];
            $nurse->date10       =$request->date2_10[$nurse->id];
            $nurse->date11       =$request->date2_11[$nurse->id];
            $nurse->date12       =$request->date2_12[$nurse->id];
            $nurse->date13       =$request->date2_13[$nurse->id];
            $nurse->date14       =$request->date2_14[$nurse->id];
            $nurse->date15       =$request->date2_15[$nurse->id];
            $nurse->date16       =$request->date2_16[$nurse->id];
            $nurse->date17       =$request->date2_17[$nurse->id];
            $nurse->date18       =$request->date2_18[$nurse->id];
            $nurse->date19       =$request->date2_19[$nurse->id];
            $nurse->date20       =$request->date2_20[$nurse->id];
            $nurse->date21       =$request->date2_21[$nurse->id];
            $nurse->date22       =$request->date2_22[$nurse->id];
            $nurse->date23       =$request->date2_23[$nurse->id];
            $nurse->date24       =$request->date2_24[$nurse->id];
            $nurse->date25       =$request->date2_25[$nurse->id];
            $nurse->date26       =$request->date2_26[$nurse->id];
            $nurse->date27       =$request->date2_27[$nurse->id];
            $nurse->date28       =$request->date2_28[$nurse->id];
            try
            {
                $nurse->date29       =$request->date2_29[$nurse->id];
            } 
            catch(\Exception $e){}
            try
            {
                $nurse->date30       =$request->date2_30[$nurse->id];
            } 
            catch(\Exception $e){}
            try
            {
                $nurse->date31       =$request->date2_31[$nurse->id];
            } 
            catch(\Exception $e){}
            $nurse->save(); 
        }
        
        return redirect('/nurse1/ward/'.$request->ward_id);
    }

    public function reportgenerator($id)
    {
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $curdate = DB::select("select getdate() as date");
        $curdate1 = date('m', strtotime($curdate[0]->date));
        $curdate2 = date('d', strtotime($curdate[0]->date));
        $curdate3 = date('Y', strtotime($curdate[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $wards = ward::orderby('ward_name', 'asc')->get();
        $fornursing = DB::select("select * from jhay.intranet_user as tb1 join jhay.intranet_fornursing as tb2 on tb1.employeeid = tb2.employeeid join hpersonal as tb3 on tb3.employeeid = tb2.employeeid where is_thismonth = '1' and role_id = '1' order by lastname asc");

        return view('nursing.nurselevel1.reportgenerator', compact(
            'id',
            'date2',
            'curdate1',
            'curdate2',
            'curdate3',
            'hpersonal',
            'mydata',
            'wards',
            'fornursing'
            ));
    }

    public function reportgeneratorsave(request $request)
    {
        
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        DB::table('jhay.intranet_report')->insert([
            'employeeid'            =>$request->employeeid,
            'for_absent'            =>$request->for_absent,
            'for_late'              =>$request->for_late,
            'for_undertime'         =>$request->for_undertime,
            'for_reentry'           =>$request->for_reentry,
            'for_valid'             =>$request->for_valid,
            'for_invalid'           =>$request->for_invalid,
            'for_notified'          =>$request->for_notified,
            'for_notnotified'       =>$request->for_notnotified,
            'remarks'               =>$request->remarks,
            'for_date'              =>$request->date
             ]);


        return redirect('/nurse/dashboard/'.$date2);
    }

    public function appendnurse($id)
    {
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $date = date::first();
        $nursing = fornursing::where('is_active', 0)->where('ward_id', $id)->where('is_thismonth', 1)->get();
        $users   = DB::select("select * from hpersonal");
        $wards = ward::orderby('ward_name', 'asc')->get();
        $notregistered = fornursing::where('is_registered', 0)->where('is_thismonth', 1)->get();
        $currentward = ward::where('id', $id)->first();
        return view('nursing.nurselevel1.appendnurse', compact(
            'date',
            'nursing',
            'users',
            'wards',
            'currentward',
            'notregistered',
            'hpersonal',
            'mydata',
            'date2'
        ));
    }

    public function appendnursesave(request $request)
    {
        if (count(Input::get('employeeid')) > 0) {
            foreach (Input::get('employeeid') as $key => $val) {
                $fornurse = fornursing::where('employeeid', Input::get("employeeid.$key"))->get();
                foreach($fornurse as $nurse)
                {
                    $nurse->ward_id              =$request->ward_id;
                    $nurse->is_registered        ='1';
                    $nurse->save();
                }
            }
        }
        return redirect('/ward/'.$request->ward_id);
    }

    public function printschedule1($id)
    {
        $ward_name = DB::select("select * from jhay.intranet_ward where id = '".$id."'");
        $ward_name = $ward_name[0]->ward_name;
        $date = DB::select("select * from jhay.intranet_date");
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $wards = ward::orderby('ward_name', 'asc')->get();
        $fornursing = DB::select("select * from jhay.intranet_user as tb1 join jhay.intranet_fornursing as tb2 on tb1.employeeid = tb2.employeeid join hpersonal as tb3 on tb3.employeeid = tb2.employeeid where ward_id = '".$id."' and is_thismonth = '1' and role_id = '1' order by lastname asc");
        return view('nursing.nurselevel1.printschedule', compact(
            'date',
            'date2',
            'hpersonal',
            'mydata',
            'wards',
            'ward_name',
            'fornursing'
            
            ));
    }

    

}
