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

class testCtr extends Controller
{
    public function test4()
    {
        DB::update("exec hospital.les.saveFrequency 'ADM977014Apr172019124353', 'hrxo', '000000002203', 1, 100, 'TAB', 900, 'HOU'");
    }

    public function test5()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('test.test5', compact(
            'hpersonal'
        ));
    }
    

    public function test6()
    {
        $user_level = DB::select("select top 1 * from dbo.user_acc where employeeid = '".Auth::user()->employeeid."'");
        $linenusers = DB::select("SELECT * FROM jhay.linen_user");
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata2 = DB::select("select * from hprovider WHERE employeeid = '".Auth::user()->employeeid."' AND empdegree = 'RSW'");
        // $home_announcements = DB::select("SELECT top 15 *  FROM jhay.intranet_announcement t1
        // left outer join jhay.intranet_animage t2 on t1.id = t2.ann_id
        // where division = 1 AND is_archived = '0'  and (t2.[file] = 'jpg' or t2.[file] = 'png')
        
        // UNION 
        
        // SELECT top 15 * FROM jhay.intranet_announcement2 t1
        // left outer join jhay.intranet_animage2 t2 on t1.id = t2.ann_id and (t2.[file] = 'jpg' or t2.[file] = 'png')
        // Where is_archived = '0' ORDER BY created_at DESC");

        // $first = announcements::where('division', $mydata[0]->division)->where('is_archived', '0');
        $home_announcements = announcements2::where('is_archived', '0')->orderBy('id', 'desc')->with('animage')->take(18)->get();
        // $home_announcements = announcements2::where('division', '10')->where('is_archived', '0')->union($first)->paginate(10);
        // $home_animage = DB::select("select * from jhay.intranet_animage");
        // $home_animage2 = DB::select("select * from jhay.intranet_animage2");
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
            return view('test.test6',compact(
                'home_announcements',
                // 'home_animage',
                // 'home_animage2',
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
    
    public function test5save(request $request)
    {
        return $request;
    }
    
    public function test6save(request $request)
    {
        return $request;
    }

    public function test7()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('test.test7', compact(
            'hpersonal'
        ));
    }
    
    public function test8()
    {
        $data = DB::SELECT("	SELECT 'ADM' as enctype, adm.admdate as admdate, adm.disdate as disdate, adm.hpercode, per.patlast, per.patfirst, per.patmiddle, adm.enccode
        FROM hadmlog adm 
        inner JOIN hperson per ON adm.hpercode = per.hpercode
        inner join hpatcon pc ON adm.enccode = pc.enccode
        WHERE month(adm.disdate) = month('2019-07-23 07:55:18.097') and year(adm.disdate) = year('2019-08-23 07:55:18.097') and cast(admdate as date) >= cast('03/01/2019' as date)
        and
        ((case when exists(select * from hospital.dbo.hpatchrg o inner join hcharge c on c.chrgcode = o.chargcode where enccode = adm.enccode and c.chrgtable = 'DRUGS' and c.chrgstat = 'A' AND ((qtyintake IS NULL OR qtyintake = 0) OR time_frequency IS NULL) and not exists(select * from hclass2 where cl2comb = o.itemcode)) then 1 else 0 end) = 1 
        or
        (case when exists(select * from hospital.dbo.hrxo where enccode = adm.enccode AND ((qtyintake IS NULL OR qtyintake = 0) OR (reppatrn1 IS NULL OR reppatrn1 = 0)) AND qtyissued > 0) then 1 else 0 end) = 1) ORDER BY DISDATE");
        return view('test.test8', compact(
            'data'
        ));
    }

    // public function test8()
    // {
    //     $data = DB::SELECT("

    //     SELECT 'ER' as enctype, tbl.erdate as admdate, tbl.erdtedis as disdate, tbl.hpercode, per.patlast, per.patfirst, per.patmiddle, tbl.enccode
    //     FROM herlog tbl 
    //     inner JOIN hperson per ON tbl.hpercode = per.hpercode 
    //     inner join hpatcon pc ON tbl.enccode = pc.enccode
    //     WHERE month(tbl.erdtedis) = month('2019-07-23 07:55:18.097') and year(tbl.erdtedis) = year('2019-08-23 07:55:18.097') and cast(erdate as date) >= cast('03/01/2019' as date)
    //     and
    //     ((case when exists(select * from hospital.dbo.hpatchrg o inner join hcharge c on c.chrgcode = o.chargcode where enccode = tbl.enccode and c.chrgtable = 'DRUGS' and c.chrgstat = 'A' AND ((qtyintake IS NULL OR qtyintake = 0) OR time_frequency IS NULL) and not exists(select * from hclass2 where cl2comb = o.itemcode)) then 1 else 0 end) = 1 
    //     or
    //     (case when exists(select * from hospital.dbo.hrxo where enccode = tbl.enccode AND ((qtyintake IS NULL OR qtyintake = 0) OR (reppatrn1 IS NULL OR reppatrn1 = 0)) AND qtyissued > 0) then 1 else 0 end) = 1)
    
    //     union all
    
    //     SELECT 'OPD' as enctype, tbl.opddate as admdate, tbl.opddtedis as disdate, tbl.hpercode, per.patlast, per.patfirst, per.patmiddle, tbl.enccode
    //     FROM hopdlog tbl 
    //     inner JOIN hperson per ON tbl.hpercode = per.hpercode 
    //     inner join hpatcon pc ON tbl.enccode = pc.enccode
    //     WHERE month(tbl.opddtedis) = month('2019-07-23 07:55:18.097') and year(tbl.opddtedis) = year('2019-08-23 07:55:18.097') and cast(opddate as date) >= cast('03/01/2019' as date)
    //     and
    //     ((case when exists(select * from hospital.dbo.hpatchrg o inner join hcharge c on c.chrgcode = o.chargcode where enccode = tbl.enccode and c.chrgtable = 'DRUGS' and c.chrgstat = 'A' AND ((qtyintake IS NULL OR qtyintake = 0) OR time_frequency IS NULL) and not exists(select * from hclass2 where cl2comb = o.itemcode)) then 1 else 0 end) = 1 
    //     or
    //     (case when exists(select * from hospital.dbo.hrxo where enccode = tbl.enccode AND ((qtyintake IS NULL OR qtyintake = 0) OR (reppatrn1 IS NULL OR reppatrn1 = 0)) AND qtyissued > 0) then 1 else 0 end) = 1)");
    //     return view('test.test8', compact(
    //         'data'
    //     ));
    // }

    public function linenslip()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        return view('linenslip', compact(
            'hpersonal'
        ));
    }
}
