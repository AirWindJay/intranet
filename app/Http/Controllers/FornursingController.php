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

class FornursingController extends Controller
{
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('jhay.intranet_ward')
         ->where('ward_name', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = DB::table('jhay.intranet_ward')
         ->orderBy('ward_name', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->ward_name.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }


    public function dashboard($id)
    {   
            $dateid = $id;
            $date2 = DB::select("select getdate() as date");
            $date2 = date('d', strtotime($date2[0]->date));
            $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
            $hpersonal2 = DB::select("select * from hpersonal");
            $output = DB::select("select * from jhay.intranet_fornursing where is_thismonth = '1'");
            $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
            $mydata2 = DB::select("select top 1 * from jhay.intranet_fornursing WHERE employeeid = '".Auth::user()->employeeid."'");
            $mydata2 = $mydata2[0];
            $date = DB::select("select * from jhay.intranet_date");
            $users = DB::select("select * from hpersonal");
            $wards = DB::select("select * from jhay.intranet_ward order by ward_name asc");
            $count1 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 1 AND is_thismonth = 1");
            $count2 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 2 AND is_thismonth = 1");
            $count3 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 3 AND is_thismonth = 1");
            $count4 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 4 AND is_thismonth = 1");
            $count5 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 5 AND is_thismonth = 1");
            $count6 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 6 AND is_thismonth = 1");
            $count7 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 7 AND is_thismonth = 1");
            $count8 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 8 AND is_thismonth = 1");
            $count9 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 9 AND is_thismonth = 1");
            $count10 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 10 AND is_thismonth = 1");
            $count11 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 11 AND is_thismonth = 1");
            $count12 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 12 AND is_thismonth = 1");
            $count13 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 13 AND is_thismonth = 1");
            $count14 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 14 AND is_thismonth = 1");
            $count15 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 15 AND is_thismonth = 1");
            $count16 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 16 AND is_thismonth = 1");
            $count17 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 17 AND is_thismonth = 1");
            $count18 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 18 AND is_thismonth = 1");
            $count19 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 19 AND is_thismonth = 1");
            $count20 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 20 AND is_thismonth = 1");
            $count21 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 21 AND is_thismonth = 1");
            $count22 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 22 AND is_thismonth = 1");
            $count23 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 23 AND is_thismonth = 1");
            $count24 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 24 AND is_thismonth = 1");
            $count25 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 25 AND is_thismonth = 1");
            $count26 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 26 AND is_thismonth = 1");
            $count27 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 27 AND is_thismonth = 1");
            $count28 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 28 AND is_thismonth = 1");
            $count29 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 29 AND is_thismonth = 1");
            $count30 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 30 AND is_thismonth = 1");
            $count31 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 31 AND is_thismonth = 1");
            $count32 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 32 AND is_thismonth = 1");
            $count33 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 33 AND is_thismonth = 1");
            $count34 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 34 AND is_thismonth = 1");
            $count35 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 35 AND is_thismonth = 1");
            $count36 = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE ward_id = 36 AND is_thismonth = 1");

            if($mydata[0]->role_id == 9)
            {
            return view('nursing.nursedashboard', compact(
                'hpersonal',
                'hpersonal2',
                'output',
                'mydata',
                'dateid',
                'mydata2',
                'date',
                'date2',
                'users',
                'wards',
                'count1', 'count2', 'count3', 'count4', 'count5', 'count6', 'count7', 'count8', 'count9', 'count10', 'count11', 'count12', 'count13', 'count14', 'count15', 'count16', 'count17', 'count18', 'count19', 'count20', 'count21', 'count22', 'count23', 'count24', 'count25', 'count26', 'count27', 'count28', 'count29', 'count30', 'count31', 'count32', 'count33', 'count34', 'count35', 'count36'
            ));
            }

            if(Auth::user()->employeeid == 'NURS-00050')
            {
            return view('nursing.nursedashboard', compact(
                'hpersonal',
                'hpersonal2',
                'output',
                'mydata',
                'dateid',
                'mydata2',
                'date',
                'date2',
                'users',
                'wards',
                'count1', 'count2', 'count3', 'count4', 'count5', 'count6', 'count7', 'count8', 'count9', 'count10', 'count11', 'count12', 'count13', 'count14', 'count15', 'count16', 'count17', 'count18', 'count19', 'count20', 'count21', 'count22', 'count23', 'count24', 'count25', 'count26', 'count27', 'count28', 'count29', 'count30', 'count31', 'count32', 'count33', 'count34', 'count35', 'count36'
            ));
            }

            
            if($mydata2->ward_id == null)
            {
                return redirect('/select/ward');
            }
            
            return view('nursing.nursedashboard', compact(
                'hpersonal',
                'hpersonal2',
                'output',
                'mydata',
                'dateid',
                'mydata2',
                'date',
                'date2',
                'users',
                'wards',
                'count1', 'count2', 'count3', 'count4', 'count5', 'count6', 'count7', 'count8', 'count9', 'count10', 'count11', 'count12', 'count13', 'count14', 'count15', 'count16', 'count17', 'count18', 'count19', 'count20', 'count21', 'count22', 'count23', 'count24', 'count25', 'count26', 'count27', 'count28', 'count29', 'count30', 'count31', 'count32', 'count33', 'count34', 'count35', 'count36'
            ));
    }

    public function home()
    {   
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $wards = DB::select("select * from jhay.intranet_ward order by ward_name asc");
        return view('layouts.nursinglayout', compact(
            'wards',
            'hpersonal',
            'mydata',
            'date2'
        ));
    }

    public function noward()
    {   
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $hpersonal2 = DB::select("select * from hpersonal");
        $date = DB::select("select top 1 * from jhay.intranet_date");
        $wards = DB::select("select * from jhay.intranet_ward order by ward_name asc");
        $notregistered = DB::select("select * from jhay.intranet_fornursing where is_registered = 0 and is_thismonth = 1");
        return view('nursing.noward', compact(
            'hpersonal',
            'hpersonal2',
            'mydata',
            'date',
            'wards',
            'notregistered',
            'date2'
        ));
           
    }

    public function nurseoff()
    {   
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $date = date::first();
        $nursing = DB::select("select top 1 * from jhay.intranet_fornursing where employeeid = '".Auth::user()->employeeid."'");
        $nursing = $nursing[0];
        $nursing2 = DB::select("select * from jhay.intranet_fornursing where is_registered = '1' and is_thismonth = '2' and ward_id = '".$nursing->ward_id."'");
        $users = DB::select("select * from hpersonal");
        $ward = ward::where('id', $nursing->ward_id)->first();
        $wards = ward::orderby('ward_name', 'asc')->get();

        return view('nursing.nurseoff', compact(
            'nursing',
            'nursing2',
            'ward',
            'users',
            'wards',
            'date',
            'date2',
            'hpersonal',
            'mydata'
            ));
    }

    public function nurseoffsave(request $request)
    {
        $nursing = fornursing::where('employeeid', $request->employeeid)->where('is_thismonth', '2')->first();
        $nursing->is_active      ='1';
        $nursing->date1          =$request->d1;
        $nursing->date2          =$request->d2;
        $nursing->date3          =$request->d3;
        $nursing->date4          =$request->d4;
        $nursing->date5          =$request->d5;
        $nursing->date6          =$request->d6;
        $nursing->date7          =$request->d7;
        $nursing->date8          =$request->d8;
        $nursing->date9          =$request->d9;
        $nursing->date10         =$request->d10;
        $nursing->date11         =$request->d11;
        $nursing->date12         =$request->d12;
        $nursing->date13         =$request->d13;
        $nursing->date14         =$request->d14;
        $nursing->date15         =$request->d15;
        $nursing->date16         =$request->d16;
        $nursing->date17         =$request->d17;
        $nursing->date18         =$request->d18;
        $nursing->date19         =$request->d19;
        $nursing->date20         =$request->d20;
        $nursing->date21         =$request->d21;
        $nursing->date22         =$request->d22;
        $nursing->date23         =$request->d23;
        $nursing->date24         =$request->d24;
        $nursing->date25         =$request->d25;
        $nursing->date26         =$request->d26;
        $nursing->date27         =$request->d27;
        $nursing->date28         =$request->d28;
        try
        {
            $nursing->date29       =$request->d29;
        } 
        catch(\Exception $e){}
        try
        {
            $nursing->date30       =$request->d30;
        } 
        catch(\Exception $e){}
        try
        {
            $nursing->date31       =$request->d31;
        } 
        catch(\Exception $e){}

        $nursing->save();
        return redirect('/nurse');
    }

    public function mynurse()
    {   
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $date = DB::select("select top 1 * from jhay.intranet_date");
        $date = $date[0];
        $nursing = fornursing::where('employeeid', Auth::user()->employeeid)->where('is_thismonth', 1)->first();
        $nursing2 = fornursing::where('is_registered', 1)->where('ward_id', $nursing->ward_id)->where('is_thismonth', 1)->get();
        $nextnursing = fornursing::where('employeeid', Auth::user()->employeeid)->where('is_thismonth', 2)->first();
        $nextnursing2 = fornursing::where('is_registered', 1)->where('ward_id', $nursing->ward_id)->where('is_thismonth', 2)->get();
        $wards = ward::orderby('ward_name', 'asc')->get();

        $users = Hpersonal::get();
        if($nursing->ward_id == null)
        {
            $ward = 'Nurse not assigned to any ward';

            return view('nursing.mynurse', compact(
                'nursing',
                'nursing2',
                'nextnursing',
                'nextnursing2',
                'users',
                'ward',
                'wards',
                'date',
                'date2',
                'hpersonal',
                'mydata'
                ));
        }
        else
        {
            $ward = DB::select("select top 1 * from jhay.intranet_ward where id = ".$nursing->ward_id);
            $ward = $ward[0]->ward_name;
    
            return view('nursing.mynurse', compact(
                'nursing',
                'nursing2',
                'nextnursing',
                'nextnursing2',
                'ward',
                'users',
                'wards',
                'date',
                'date2',
                'hpersonal',
                'mydata'
                ));
        }
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
        $fornursing = DB::select("SELECT * FROM jhay.intranet_fornursing as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid where is_thismonth = 1 AND ward_id = '".$id."' order by lastname asc");
        $fornursing2 = DB::select("SELECT * FROM jhay.intranet_fornursing as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid where is_thismonth = 2 AND ward_id = '".$id."' order by lastname asc");
        $users = Hpersonal::get();
        $wards = ward::orderby('ward_name', 'asc')->get();
        $currentward = ward::where('id', $id)->first();

        if($mydata[0]->role_id == 11)
        {
            return redirect('/nurse1/ward/'.$id);
        }
        if($mydata[0]->role_id == 12)
        {
            return redirect('/nurse2/ward/'.$id);
        }
        if($mydata[0]->role_id == 12)
        {  
            $fornursing = DB::select("select * from jhay.intranet_user as tb1 join jhay.intranet_fornursing as tb2 on tb1.employeeid = tb2.employeeid join hpersonal as tb3 on tb3.employeeid = tb2.employeeid where is_thismonth = '1' and role_id != '12' and role_id != '4' and ward_id = '".$id."' order by lastname asc");
            $fornursing2 = DB::select("select * from jhay.intranet_user as tb1 join jhay.intranet_fornursing as tb2 on tb1.employeeid = tb2.employeeid join hpersonal as tb3 on tb3.employeeid = tb2.employeeid where is_thismonth = '2' and role_id != '12' and role_id != '4' and ward_id = '".$id."' order by lastname asc");
        }

        return view('nursing.getward',compact(
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
        return view('nursing.appendnurse', compact(
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
        return view('nursing.getwardedit', compact(
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
        
        return redirect('/ward/'.$request->ward_id);
    }

    public function nurselist()
    {
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $wards = ward::orderby('ward_name', 'asc')->get();
        $fornursing = DB::select("SELECT * FROM jhay.intranet_fornursing as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid where is_thismonth = 1 order by lastname asc");
        return view('nursing.nurselist',compact(
            'fornursing',
            'wards',
            'hpersonal',
            'mydata',
            'date2'
            ));
    }

    public function printlist()
    {
        $fornursing = DB::select("SELECT * FROM jhay.intranet_fornursing as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid where is_thismonth = 1 order by lastname asc");
        return view('nursing.printlist',compact(
            'fornursing'
            ));
    }

    public function selectward()
    {
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $wards = ward::orderby('ward_name', 'asc')->get();

        return view('nursing.selectward',compact(
            'wards',
            'hpersonal',
            'mydata'
            ));
    }
    public function selectwardsave($id)
    {
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));

        $updateDetails=array(
            'ward_id'           =>$id,
            'is_registered'       =>'1'
        );

        DB::table('jhay.intranet_fornursing')
            ->where('employeeid', Auth::user()->employeeid)
            ->update($updateDetails);

        return redirect('/nurse/dashboard/'.$date2);
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

        return redirect('/nurse/list');
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

        return view('nursing.replaceward', compact(
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

        return redirect('/nurse/list');
    }

    

    

    public function monitoring($id)
    {   
        if($id == '01')
        {
            $thisdate = "date1";
        }elseif($id == '02')
        {
            $thisdate = "date2";
        }elseif($id == '03')
        {
            $thisdate = "date3";
        }elseif($id == '03')
        {
            $thisdate = "date3";
        }elseif($id == '04')
        {
            $thisdate = "date4";
        }elseif($id == '05')
        {
            $thisdate = "date5";
        }elseif($id == '06')
        {
            $thisdate = "date6";
        }elseif($id == '07')
        {
            $thisdate = "date7";
        }elseif($id == '08')
        {
            $thisdate = "date8";
        }elseif($id == '09')
        {
            $thisdate = "date9";
        }else
        {
            $thisdate = "date".$id;
        }
        
        $wards = ward::orderby('ward_name', 'asc')->get();
        $date = DB::select("select * from jhay.intranet_date");
        $monitoringdateid = $id;
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        
        $count1 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[0]->id."' and ".$thisdate." = '7-3'");
        $count2 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[1]->id."' and ".$thisdate." = '7-3'");
        $count3 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[2]->id."' and ".$thisdate." = '7-3'");
        $count4 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[3]->id."' and ".$thisdate." = '7-3'");
        $count5 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[4]->id."' and ".$thisdate." = '7-3'");
        $count6 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[5]->id."' and ".$thisdate." = '7-3'");
        $count7 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[6]->id."' and ".$thisdate." = '7-3'");
        $count8 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[7]->id."' and ".$thisdate." = '7-3'");
        $count9 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[8]->id."' and ".$thisdate." = '7-3'");
        $count10 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[9]->id."' and ".$thisdate." = '7-3'");
        $count11 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[10]->id."' and ".$thisdate." = '7-3'");
        $count12 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[11]->id."' and ".$thisdate." = '7-3'");
        $count13 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[12]->id."' and ".$thisdate." = '7-3'");
        $count14 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[13]->id."' and ".$thisdate." = '7-3'");
        $count15 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[14]->id."' and ".$thisdate." = '7-3'");
        $count16 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[15]->id."' and ".$thisdate." = '7-3'");
        $count17 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[16]->id."' and ".$thisdate." = '7-3'");
        $count18 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[17]->id."' and ".$thisdate." = '7-3'");
        $count19 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[18]->id."' and ".$thisdate." = '7-3'");
        $count20 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[19]->id."' and ".$thisdate." = '7-3'");
        $count21 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[20]->id."' and ".$thisdate." = '7-3'");
        $count22 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[21]->id."' and ".$thisdate." = '7-3'");
        $count23 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[22]->id."' and ".$thisdate." = '7-3'");
        $count24 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[23]->id."' and ".$thisdate." = '7-3'");
        $count25 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[24]->id."' and ".$thisdate." = '7-3'");
        $count26 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[25]->id."' and ".$thisdate." = '7-3'");
        $count27 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[26]->id."' and ".$thisdate." = '7-3'");
        $count28 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[27]->id."' and ".$thisdate." = '7-3'");
        $count29 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[28]->id."' and ".$thisdate." = '7-3'");
        $count30 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[29]->id."' and ".$thisdate." = '7-3'");
        $count31 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[30]->id."' and ".$thisdate." = '7-3'");
        $count32 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[31]->id."' and ".$thisdate." = '7-3'");
        $count33 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[32]->id."' and ".$thisdate." = '7-3'");
        $count34 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[33]->id."' and ".$thisdate." = '7-3'");
        $count35 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[34]->id."' and ".$thisdate." = '7-3'");
        $count36 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[35]->id."' and ".$thisdate." = '7-3'");

        $count2_1 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[0]->id."' and ".$thisdate." = '3-11'");
        $count2_2 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[1]->id."' and ".$thisdate." = '3-11'");
        $count2_3 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[2]->id."' and ".$thisdate." = '3-11'");
        $count2_4 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[3]->id."' and ".$thisdate." = '3-11'");
        $count2_5 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[4]->id."' and ".$thisdate." = '3-11'");
        $count2_6 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[5]->id."' and ".$thisdate." = '3-11'");
        $count2_7 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[6]->id."' and ".$thisdate." = '3-11'");
        $count2_8 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[7]->id."' and ".$thisdate." = '3-11'");
        $count2_9 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[8]->id."' and ".$thisdate." = '3-11'");
        $count2_10 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[9]->id."' and ".$thisdate." = '3-11'");
        $count2_11 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[10]->id."' and ".$thisdate." = '3-11'");
        $count2_12 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[11]->id."' and ".$thisdate." = '3-11'");
        $count2_13 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[12]->id."' and ".$thisdate." = '3-11'");
        $count2_14 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[13]->id."' and ".$thisdate." = '3-11'");
        $count2_15 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[14]->id."' and ".$thisdate." = '3-11'");
        $count2_16 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[15]->id."' and ".$thisdate." = '3-11'");
        $count2_17 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[16]->id."' and ".$thisdate." = '3-11'");
        $count2_18 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[17]->id."' and ".$thisdate." = '3-11'");
        $count2_19 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[18]->id."' and ".$thisdate." = '3-11'");
        $count2_20 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[19]->id."' and ".$thisdate." = '3-11'");
        $count2_21 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[20]->id."' and ".$thisdate." = '3-11'");
        $count2_22 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[21]->id."' and ".$thisdate." = '3-11'");
        $count2_23 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[22]->id."' and ".$thisdate." = '3-11'");
        $count2_24 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[23]->id."' and ".$thisdate." = '3-11'");
        $count2_25 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[24]->id."' and ".$thisdate." = '3-11'");
        $count2_26 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[25]->id."' and ".$thisdate." = '3-11'");
        $count2_27 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[26]->id."' and ".$thisdate." = '3-11'");
        $count2_28 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[27]->id."' and ".$thisdate." = '3-11'");
        $count2_29 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[28]->id."' and ".$thisdate." = '3-11'");
        $count2_30 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[29]->id."' and ".$thisdate." = '3-11'");
        $count2_31 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[30]->id."' and ".$thisdate." = '3-11'");
        $count2_32 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[31]->id."' and ".$thisdate." = '3-11'");
        $count2_33 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[32]->id."' and ".$thisdate." = '3-11'");
        $count2_34 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[33]->id."' and ".$thisdate." = '3-11'");
        $count2_35 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[34]->id."' and ".$thisdate." = '3-11'");
        $count2_36 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[35]->id."' and ".$thisdate." = '3-11'");

        $count3_1 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[0]->id."' and ".$thisdate." = '11-7'");
        $count3_2 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[1]->id."' and ".$thisdate." = '11-7'");
        $count3_3 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[2]->id."' and ".$thisdate." = '11-7'");
        $count3_4 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[3]->id."' and ".$thisdate." = '11-7'");
        $count3_5 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[4]->id."' and ".$thisdate." = '11-7'");
        $count3_6 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[5]->id."' and ".$thisdate." = '11-7'");
        $count3_7 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[6]->id."' and ".$thisdate." = '11-7'");
        $count3_8 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[7]->id."' and ".$thisdate." = '11-7'");
        $count3_9 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[8]->id."' and ".$thisdate." = '11-7'");
        $count3_10 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[9]->id."' and ".$thisdate." = '11-7'");
        $count3_11 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[10]->id."' and ".$thisdate." = '11-7'");
        $count3_12 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[11]->id."' and ".$thisdate." = '11-7'");
        $count3_13 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[12]->id."' and ".$thisdate." = '11-7'");
        $count3_14 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[13]->id."' and ".$thisdate." = '11-7'");
        $count3_15 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[14]->id."' and ".$thisdate." = '11-7'");
        $count3_16 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[15]->id."' and ".$thisdate." = '11-7'");
        $count3_17 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[16]->id."' and ".$thisdate." = '11-7'");
        $count3_18 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[17]->id."' and ".$thisdate." = '11-7'");
        $count3_19 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[18]->id."' and ".$thisdate." = '11-7'");
        $count3_20 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[19]->id."' and ".$thisdate." = '11-7'");
        $count3_21 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[20]->id."' and ".$thisdate." = '11-7'");
        $count3_22 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[21]->id."' and ".$thisdate." = '11-7'");
        $count3_23 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[22]->id."' and ".$thisdate." = '11-7'");
        $count3_24 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[23]->id."' and ".$thisdate." = '11-7'");
        $count3_25 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[24]->id."' and ".$thisdate." = '11-7'");
        $count3_26 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[25]->id."' and ".$thisdate." = '11-7'");
        $count3_27 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[26]->id."' and ".$thisdate." = '11-7'");
        $count3_28 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[27]->id."' and ".$thisdate." = '11-7'");
        $count3_29 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[28]->id."' and ".$thisdate." = '11-7'");
        $count3_30 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[29]->id."' and ".$thisdate." = '11-7'");
        $count3_31 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[30]->id."' and ".$thisdate." = '11-7'");
        $count3_32 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[31]->id."' and ".$thisdate." = '11-7'");
        $count3_33 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[32]->id."' and ".$thisdate." = '11-7'");
        $count3_34 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[33]->id."' and ".$thisdate." = '11-7'");
        $count3_35 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[34]->id."' and ".$thisdate." = '11-7'");
        $count3_36 = DB::select("select count(*) as counter from jhay.intranet_fornursing where is_thismonth = '1' and ward_id = '".$wards[35]->id."' and ".$thisdate." = '11-7'");
        
        
        
        return view('nursing.monitoring',compact(
            'wards',
            'hpersonal',
            'mydata',
            'date',
            'date2',
            'monitoringdateid',
            'count1', 'count2', 'count3', 'count4', 'count5', 'count6', 'count7', 'count8', 'count9', 'count10', 'count11', 'count12', 'count13', 'count14', 'count15', 'count16', 'count17', 'count18', 'count19', 'count20', 'count21', 'count22', 'count23', 'count24', 'count25', 'count26', 'count27', 'count28', 'count29', 'count30', 'count31', 'count32', 'count33', 'count34', 'count35', 'count36',
            'count2_1', 'count2_2', 'count2_3', 'count2_4', 'count2_5', 'count2_6', 'count2_7', 'count2_8', 'count2_9', 'count2_10', 'count2_11', 'count2_12', 'count2_13', 'count2_14', 'count2_15', 'count2_16', 'count2_17', 'count2_18', 'count2_19', 'count2_20', 'count2_21', 'count2_22', 'count2_23', 'count2_24', 'count2_25', 'count2_26', 'count2_27', 'count2_28', 'count2_29', 'count2_30', 'count2_31', 'count2_32', 'count2_33', 'count2_34', 'count2_35', 'count2_36',
            'count3_1', 'count3_2', 'count3_3', 'count3_4', 'count3_5', 'count3_6', 'count3_7', 'count3_8', 'count3_9', 'count3_10', 'count3_11', 'count3_12', 'count3_13', 'count3_14', 'count3_15', 'count3_16', 'count3_17', 'count3_18', 'count3_19', 'count3_20', 'count3_21', 'count3_22', 'count3_23', 'count3_24', 'count3_25', 'count3_26', 'count3_27', 'count3_28', 'count3_29', 'count3_30', 'count3_31', 'count3_32', 'count3_33', 'count3_34', 'count3_35', 'count3_36'
            ));
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
        $fornursing = DB::select("SELECT * FROM jhay.intranet_fornursing as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid where is_thismonth = 1 order by lastname asc");

        return view('nursing.reportgenerator', compact(
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

    public function viewreport()
    {
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $wards = ward::orderby('ward_name', 'asc')->get();
        $reports = DB::select("SELECT * FROM jhay.intranet_report as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid order by for_date desc");
        

        return view('nursing.viewreports', compact(
            'date2',
            'hpersonal',
            'mydata',
            'wards',
            'reports'
            
            ));
    }

    public function printschedule($id)
    {
        $ward_name = DB::select("select * from jhay.intranet_ward where id = '".$id."'");
        $ward_name = $ward_name[0]->ward_name;
        $date = DB::select("select * from jhay.intranet_date");
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $wards = ward::orderby('ward_name', 'asc')->get();
        $fornursing = DB::select("SELECT * FROM jhay.intranet_fornursing as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid where ward_id = '".$id."' and is_thismonth = '1' order by lastname asc");

        return view('nursing.printschedule', compact(
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