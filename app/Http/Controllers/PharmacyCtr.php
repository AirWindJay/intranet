<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use App\freq;
use App\actlog;

class PharmacyCtr extends Controller
{
    public function index()
    {
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $bals = DB::select("SELECT gendesc, formdesc, dmdnost, strecode, formcode, rtecode, ISNULL(brandname, '') AS brandname, CAST(ISNULL([Drugs and Medicine], 0) AS integer) AS [Main_Pharmacy], CAST(ISNULL([OPD Pharmacy], 0) AS integer) AS [OPD_Pharmacy], CAST(ISNULL([OR- Drugs and Meds (Satellite Pharmacy)], 0) AS integer) AS [OR_Pharmacy], CAST(ISNULL([Drugs and Medicines (Poison Control)], 0) AS integer) AS [Poison_Control], CAST(ISNULL([Drugs and Medicine], 0) + ISNULL([OPD Pharmacy], 0) + ISNULL([OR- Drugs and Meds (Satellite Pharmacy)], 0) + ISNULL([Drugs and Medicines (Poison Control)], 0) AS integer) AS [TOTAL_QTY] FROM pivotdatabase.les.vwBalanceOnHand AS vw");

        return view('pharmacy.index', compact(
            'hpersonal',
            'mydata',
            'bals'
        ));
    }

    public function indexsort(request $request)
    {
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        
        $bals = DB::select("SELECT * FROM jhay.pharmacy_count() ORDER BY $request->sortby $request->sortfrom");

        return view('pharmacy.index', compact(
            'hpersonal',
            'mydata',
            'bals'
        ));
    }


    public function index2()
    {
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        // $bals = DB::select("SELECT gendesc, formdesc, dmdnost, strecode, formcode, rtecode, ISNULL(brandname, '') AS brandname, CAST(ISNULL([Drugs and Medicine], 0) AS DECIMAL(12,2)) AS [Main_Pharmacy], CAST(ISNULL([OPD Pharmacy], 0) AS DECIMAL(12,2)) AS [OPD_Pharmacy], CAST(ISNULL([OR- Drugs and Meds (Satellite Pharmacy)], 0) AS DECIMAL(12,2)) AS [OR_Pharmacy], CAST(ISNULL([Drugs and Medicines (Poison Control)], 0) AS DECIMAL(12,2)) AS [Poison_Control], CAST(ISNULL([Drugs and Medicine], 0) + ISNULL([OPD Pharmacy], 0) + ISNULL([OR- Drugs and Meds (Satellite Pharmacy)], 0) + ISNULL([Drugs and Medicines (Poison Control)], 0) AS integer) AS [TOTAL_QTY] FROM pivotdatabase.les.vsParmItemsListPrice AS vw");

        return view('pharmacy.index2', compact(
            'hpersonal',
            'mydata'
        ));
    }

    public function index2main()
    {

        
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $bals = DB::select("EXEC jhay.spselectmain");

        return view('pharmacy.main', compact(
            'hpersonal',
            'mydata',
            'bals'
        ));
    }

    public function index2opd()
    {
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $bals = DB::select("EXEC jhay.spselectopd");

        return view('pharmacy.opd', compact(
            'hpersonal',
            'mydata',
            'bals'
        ));
    }


    
    public function index2or()
    {
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $bals = DB::select("EXEC jhay.spselector");

        return view('pharmacy.or', compact(
            'hpersonal',
            'mydata',
            'bals'
        ));
    }

    public function searchindex()
    {
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        // $pends = DB::select("EXEC sp_jjm_pharmaPendingTrans1 'P' , '".Auth::user()->employeeid."'");

        // foreach($pends as $pat)
        //     {
        //         $dbward = DB::select("SELECT les.sfnGetWard('$pat->enccode') AS ward");
        //         $dbward = $dbward[0]->ward;
        //         $dbroom = DB::select("SELECT les.sfn_getRoom('$pat->enccode') AS room");
        //         $dbroom = $dbroom[0]->room;
        //         $pends[$ind]->getward = $dbward;
        //         $pends[$ind]->getroom = $dbroom;
        //         $ind++;
        //     }

        return view('pharmacy.searchindex', compact(
            'hpersonal',
            'mydata'
            // 'pends'
        ));
    }

    public function backlog()
    {
        $backlogs = DB::SELECT("SELECT * FROM jhay.CF4FrequencyBackLog() order by enctype, disdate asc");
        // $ind = 0;
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $pends = DB::select("EXEC sp_jjm_pharmaPendingTrans1 'P' , '".Auth::user()->employeeid."'");

        return view('pharmacy.backlog', compact(
            'hpersonal',
            'mydata',
            'backlogs'
            // 'pends'
        ));
    }

    public function backlogOPD()
    {
        $backlogs = DB::SELECT("SELECT * FROM jhay.CF4FrequencyBackLogOPD() order by enctype, disdate asc");
        // $ind = 0;
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");

        return view('pharmacy.backlog', compact(
            'hpersonal',
            'mydata',
            'backlogs'
            // 'pends'
        ));
    }

    public function backlogER()
    {
        $backlogs = DB::SELECT("SELECT * FROM jhay.CF4FrequencyBackLogER() order by enctype, disdate asc");
        // $ind = 0;
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");

        return view('pharmacy.backlog', compact(
            'hpersonal',
            'mydata',
            'backlogs'
            // 'pends'
        ));
    }

    public function backlogADM()
    {
        $backlogs = DB::SELECT("SELECT * FROM jhay.CF4FrequencyBackLogADM() order by enctype, disdate asc");
        // $ind = 0;
        $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");

        return view('pharmacy.backlog', compact(
            'hpersonal',
            'mydata',
            'backlogs'
            // 'pends'
        ));
    }

    public function patientlist(request $request)
    {  
        
        if($request->diff == 1)
        {
            $diff = 1;
            $ind = 0;
            $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
            $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
            $dd = $request->disdate;
            $alert = '';
            
            $pats = DB::select("EXEC [hospital].[jhay].[patlist2] '$request->disdate', '$request->typeatm'");

            foreach($pats as $pat)
            {
                $dbward = DB::select("SELECT les.sfnGetWard('$pat->enccode') AS ward");
                $dbward = $dbward[0]->ward;
                $dbroom = DB::select("SELECT les.sfn_getRoom('$pat->enccode') AS room");
                $dbroom = $dbroom[0]->room;
                $pats[$ind]->getward = $dbward;
                $pats[$ind]->getroom = $dbroom;
                $ind++;
            }

            
            
            
            return view('pharmacy.patlist', compact(
                'diff',
                'hpersonal',
                'mydata',
                'pats',
                'eccntr',
                'rt',
                'dd',
                'alert',
                'diff'
            ));
        }
        if($request->diff == 2)
        {
            $diff = 2;
            $ind = 0;
            $hos_no = $request->hos_no;
            $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
            $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
            $pats = DB::select("EXEC [hospital].[jhay].[patlist] '$request->hos_no'");

            foreach($pats as $pat)
            {
                $dbward = DB::select("SELECT les.sfnGetWard('$pat->enccode') AS ward");
                $dbward = $dbward[0]->ward;
                $dbroom = DB::select("SELECT les.sfn_getRoom('$pat->enccode') AS room");
                $dbroom = $dbroom[0]->room;
                $pats[$ind]->getward = $dbward;
                $pats[$ind]->getroom = $dbroom;
                $ind++;
            }

            return view('pharmacy.patlist', compact(
                'diff',
                'hpersonal',
                'mydata',
                'pats',
                'eccntr',
                'alert',
                'hos_no',
                'diff'
            ));
        }
        
    }
    public function patientlist1(request $request)
    {  
            $diff = 1;
            $ind = 0;
            $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
            $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
            $dd = $request->admdate;
            $typeatm = $request->typeatm;
            $alert = '';
            
            $pats = DB::select("EXEC [hospital].[jhay].[patlist2] '$request->admdate', '$request->typeatm'");

            foreach($pats as $pat)
            {
                $dbward = DB::select("SELECT les.sfnGetWard('$pat->enccode') AS ward");
                $dbward = $dbward[0]->ward;
                $dbroom = DB::select("SELECT les.sfn_getRoom('$pat->enccode') AS room");
                $dbroom = $dbroom[0]->room;
                $pats[$ind]->getward = $dbward;
                $pats[$ind]->getroom = $dbroom;
                $ind++;
            }
            
            return view('pharmacy.patlist1', compact(
                'diff',
                'hpersonal',
                'mydata',
                'pats',
                'eccntr',
                'rt',
                'dd',
                'alert',
                'diff',
                'typeatm'
            ));
    }


    public function patientlist2(request $request)
    {  
            $diff = 2;
            $ind = 0;
            $hos_no = $request->hos_no;
            $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
            $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
            $pats = DB::select("EXEC [hospital].[jhay].[patlist] '$request->hos_no'");

            return view('pharmacy.patlist2', compact(
                'diff',
                'hpersonal',
                'mydata',
                'pats',
                'eccntr',
                'alert',
                'hos_no',
                'diff'
            ));
        
    }

    public function enccode(request $request)
    {
        $data = DB::SELECT("select * from les.pharmFreq('$request->enccode') order by gendesc");
        return response()->json($data);
    }


    public function try()
    {
        // select les.sfnGetWard('ADM1130868Jan302019133514')       GET WARD
        // select les.sfn_getRoom('ADM1130868Jan302019133514')      GET ROOM
        // EXEC	sp_jjm_pharmaPendingTrans1 'P' , '000436'	        GET PENDING
        // select * from les.pharmFreq('ER153809Mar172019053204')   GET MEDS
    }
    
    public function medssave1(request $request)
    {   

        // DB::statement("update hospital.dbo.hrxo set qtyintake = 4, uomintake = 'TAB', reppatrn1 = 45, reppatru1 = 'HOU'
        //     where enccode = 'ADM977014Apr172019124353' and dmdcomb = '000000002203' and dmdctr = 1");
            $diff = $request->diff;
            $ind = 0;
            $hpersonal = DB::select("select * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
            $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
            $dd = $request->disdate;
            $typeatm = $request->typeatm;
            $alert = 'SAVED!';


            $date = DB::select("SELECT GETDATE() AS datetoday");
            $date = $date[0]->datetoday;
            $enccode = $request->enccode[0];
            $hper = DB::select("SELECT TOP 1 hpercode FROM henctr WHERE enccode = '$enccode'");
            $hper = $hper[0]->hpercode;
            

            foreach (Input::get('time_frequency') as $key => $val) {
                DB::update("exec les.saveFrequency '$enccode', '".Input::get("tbl.$key")."', '".Input::get("dmdcomb.$key")."', ".Input::get("dmdctr.$key").", ".Input::get("qtyintake.$key").", '".Input::get("uomintake.$key")."', ".Input::get("time_frequency.$key").", '".Input::get("unit_frequency.$key")."'");
            }
            
            
            $pats = DB::select("EXEC [hospital].[jhay].[patlist2] '$request->disdate', '$request->typeatm'");

            foreach($pats as $pat)
            {
                $dbward = DB::select("SELECT les.sfnGetWard('$pat->enccode') AS ward");
                $dbward = $dbward[0]->ward;
                $dbroom = DB::select("SELECT les.sfn_getRoom('$pat->enccode') AS room");
                $dbroom = $dbroom[0]->room;
                $pats[$ind]->getward = $dbward;
                $pats[$ind]->getroom = $dbroom;
                $ind++;
            }

            // foreach (Input::get('time_frequency') as $key => $val) {
            //     if( Input::get("freq.$key") == '')
            //     {

            //     }
            //     else
            //     {
            //         $presfreq = freq::where('dmdcomb', Input::get("dmdcomb.$key"))
            //                     ->where('dmdctr',  Input::get("dmdctr.$key"))
            //                     ->where('enccode',  $enccode)
            //                     ->first();
            //         if($presfreq == null)
            //         {
            //             $new = new freq();
            //             $new->enccode       = $enccode;
            //             $new->hpercode      = $hper;
            //             $new->dmdcomb       = Input::get("dmdcomb.$key");
            //             $new->dmdctr        = Input::get("dmdctr.$key");
            //             $new->frequency     = Input::get("freq.$key");
            //             $new->created_at    = $date;
            //             $new->entry_by      = Auth::user()->employeeid;
            //             $new->updated_at    = Null;
            //             $new->save();
            //         }
            //         else
            //         {
            //             $presfreq->frequency    =Input::get("freq.$key");
            //             $presfreq->save();
            //         }
            //     }
            
            // }

            $actlog = new actlog();
            $actlog->employeeid = Auth::user()->employeeid;
            $actlog->act_details = 'new entry on PHARMACY FREQ enccode: '.$enccode;
            $actlog->save();

            return view('pharmacy.patlist1', compact(
                'hpersonal',
                'mydata',
                'pats',
                'eccntr',
                'dd',
                'alert',
                'diff',
                'typeatm'
            ));
       
    }
    public function medssave2(request $request)
    {   

        // DB::statement("update hospital.dbo.hrxo set qtyintake = 4, uomintake = 'TAB', reppatrn1 = 45, reppatru1 = 'HOU'
        //     where enccode = 'ADM977014Apr172019124353' and dmdcomb = '000000002203' and dmdctr = 1");
        $diff = $request->diff;
        $dd = '';
        $ind = 0;
        $hpersonal = DB::select("select top 1 * from hpersonal WHERE employeeid = '".Auth::user()->employeeid."'");
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $hos_no = $request->hos_no;
        $alert = 'SAVED!';
        
        $date = DB::select("SELECT GETDATE() AS datetoday");
        $date = $date[0]->datetoday;
        $enccode = $request->enccode[0];
        $hper = DB::select("SELECT TOP 1 hpercode FROM henctr WHERE enccode = '$enccode'");
        $hper = $hper[0]->hpercode;
        
        // DB::RAW("exec hospital.les.saveFrequency 'ADM977014Apr172019124353', 'hrxo', '000000002203', 1, 100, 'TAB', 900, 'HOU'");


        
        foreach (Input::get('time_frequency') as $key => $val) {
            DB::update("exec les.saveFrequency '$enccode', '".Input::get("tbl.$key")."', '".Input::get("dmdcomb.$key")."', ".Input::get("dmdctr.$key").", ".Input::get("qtyintake.$key").", '".Input::get("uomintake.$key")."', ".Input::get("time_frequency.$key").", '".Input::get("unit_frequency.$key")."'");
        }

        

        $pats = DB::select("EXEC [hospital].[jhay].[patlist] '$request->hos_no'");

        foreach($pats as $pat)
        {
            $dbward = DB::select("SELECT les.sfnGetWard('$pat->enccode') AS ward");
            $dbward = $dbward[0]->ward;
            $dbroom = DB::select("SELECT les.sfn_getRoom('$pat->enccode') AS room");
            $dbroom = $dbroom[0]->room;
            $pats[$ind]->getward = $dbward;
            $pats[$ind]->getroom = $dbroom;
            $ind++;
        }

        $actlog = new actlog();
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'new entry on PHARMACY FREQ enccode: '.$enccode;
        $actlog->save();
        return view('pharmacy.patlist2', compact(
            'hpersonal',
            'mydata',
            'pats',
            'eccntr',
            'hos_no',
            'alert',
            'diff',
            'dd'
        ));
    }
}
