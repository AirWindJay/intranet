<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\date;
use App\fornursing;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Hpersonal;
use App\ccruposts;
use DB;

class DateController extends Controller
{
    public function updatedate(request $request)
    {
        $updateDetails=array(
            'thismonth'          =>$request->thismonth,
            'nextmonth'          => $request->nextmonth,
        );

        DB::table('jhay.intranet_date')
            ->where('id', 1)
            ->update($updateDetails);

        return redirect('/usermanagementwebmaster');
    }

    public function updatenursing(request $request)
    {
        $date = date::first();
        $date->thismonth    =$date->nextmonth;
        $date->save();

        $nurse1 = fornursing::where('is_thismonth', 1)->get();
        
        foreach($nurse1 as $nurse)
        {
            $nurse->is_thismonth    ="3";
            $nurse->save();
        }
        
        $nurse2 = fornursing::where('is_thismonth', 2)->get();
        
        foreach($nurse2 as $nurse)
        {
            $nurse->is_thismonth    ="1";
            $nurse->save();
        }

        $nurse3 = fornursing::where('is_thismonth', 3)->get();
        
        foreach($nurse3 as $nurse)
        {
            $nurse->is_thismonth    ="2";
            $nurse->is_active       ="0";
            $nurse->date1           =null;
            $nurse->date2           =null;
            $nurse->date3           =null;
            $nurse->date4           =null;
            $nurse->date5           =null;
            $nurse->date6           =null;
            $nurse->date7           =null;
            $nurse->date8           =null;
            $nurse->date9           =null;
            $nurse->date10          =null;
            $nurse->date11          =null;
            $nurse->date12          =null;
            $nurse->date13          =null;
            $nurse->date14          =null;
            $nurse->date15          =null;
            $nurse->date16          =null;
            $nurse->date17          =null;
            $nurse->date18          =null;
            $nurse->date19          =null;
            $nurse->date20          =null;
            $nurse->date21          =null;
            $nurse->date22          =null;
            $nurse->date23          =null;
            $nurse->date24          =null;
            $nurse->date25          =null;
            $nurse->date26          =null;
            $nurse->date27          =null;
            $nurse->date28          =null;
            $nurse->date29          =null;
            $nurse->date30          =null;
            $nurse->date31          =null;
            $nurse->save();
        }
        return redirect('/home');
    }

    public function test()
    {
        
        // $wards = DB::select("select * from jhay.intranet_ward order by ward_name asc");
        // return view("test.test", compact(
        //     'wards'
        // ));
        // return 'test1';


        // DB::table("dbo.hpersonal")->where('employeeid', '=', '9010037')->delete();

        // $data = DB::select("SELECT COUNT(*) as count FROM jhay.intranet_fornursing WHERE id = 1");
        // return $ccrudata = ccruposts::where('id', 1)->first();
        // return DB::table('jhay.intranet_fornursing')->where('id', 1)->count;

        // DB::table('jhay.intranet_fornursing')->insert(
        //     ['employeeid' => '1510035', 'is_active' => '0', 'is_registered' => '0', 'is_thismonth' => '1']
        // );

        // DB::table('jhay.intranet_fornursing')->insert(
        //     ['employeeid' => '1510035', 'is_active' => '0', 'is_registered' => '0', 'is_thismonth' => '2']
        // );

        // DB::table('jhay.intranet_user')->insert(
        //     ['employeeid' => 'NURS-0557', 'department' => '88', 'division' => '3']
        // );
        
        // $password = DB::select("select [dbo].[ufn_crypto]('JHAYJHaYQWE',1) as pass");
        // $password = DB::select("select [dbo].[ufn_crypto]('8<L.KÖ',0) as pass");
        // $password = DB::select("select [dbo].[ufn_crypto](')!/'Õ',0) as pass");
        // return $password[0]->pass;

        // J^__cJ7YQhT

        // *>??C*÷91H4

        // $passwordAdmin_arrays   = DB::select("select webapp.dbo.ufn_crypto('THISISPASSWORD',1) as pass_encryt");
        //     // 0 if null fron the select

        //     if (count($passwordAdmin_arrays) > 0  ) { $x = 0 ;
        //     // get the value in selected query
        //     foreach($passwordAdmin_arrays as $passwordAdmin_array) {
        //         $passwordAdmin1[$x] = $passwordAdmin_array->pass_encryt ;
        //         $x++ ;
        //     }

        //     return $passwordAdmin_encrypt = $passwordAdmin1[0] ;
        //     }

        // $updateDetails=array(
        //     'employeeid'          =>'000961'
        // );

        // DB::table('user_acc')
        //     ->where('user_name', 'TOSCA')
        //     ->update($updateDetails);
    }
    
    public function test2()
    {
        return 'test2';
        // $test = DB::select('select * from jhay.intranet_suggestion');
        // return $test;

        // $announcements = DB::select("EXEC dbn.sp_bliss_tableAnnouncement");

        // $data = array(
        //     'announcements' => $announcements
        // );
        
        // return $data;
        // return Auth::user()->employeeid;
        // select * from jhay.intranet_user LEFT JOIN hpersonal ON jhay.intranet_user.employeeid = hpersonal.employeeid
        // $out = DB::select("select * from jhay.intranet_user LEFT JOIN hpersonal ON jhay.intranet_user.employeeid = hpersonal.employeeid");
        // $nursing = fornursing::where('is_thismonth', 1)->where('ward_id', 1)->get();
        // $fornursing = fornursing::get();
        // return $nurse1 = fornursing::where('is_thismonth', 1)->get();
        // return $out = User::first();
        // $out2 = Hpersonal::all();

        // // $out[054]->Hpersonal->lastname;

        // return view('test.test2', compact(
        //     'out',
        //     'out2'
        // ));
    }
    Public function test3()
    {
        return 'test3';
    }

}
