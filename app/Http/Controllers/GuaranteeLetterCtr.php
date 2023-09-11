<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\userprofile;
use App\gl;
use App\actlog;
use App\glindex;
use Illuminate\Support\Facades\Input;

class GuaranteeLetterCtr extends Controller
{
    public function index()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $userprofile = userprofile::where('employeeid', Auth::user()->employeeid)->get();
        $patname = '';
        $hosnum = '';
        $GLs = DB::SELECT("select * from les.guaranteeLetter2018 where hpercode = '111111111111111111111111111111111111111111111'");
        $lastestenct = DB::SELECT("select les.getLatestEncounter('111111111111111111111111111111111111111111111') as latest");
        $lastestenct = $lastestenct[0]->latest;
        $fundsrcs = DB::SELECT("SELECT * FROM hfundsrc where fundstat = 'A'");
        
        
        return view('GuaranteeLetter.index', compact(
            'hpersonal',
            'userprofile',
            'patname',
            'hosnum',
            'GLs',
            'fundsrcs',
            'lastestenct'
        ));
    }
    
    public function selectpatient(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $userprofile = userprofile::where('employeeid', Auth::user()->employeeid)->get();

        $pat = DB::SELECT("SELECT * FROM hperson WHERE hpercode = '$request->hpercode'");
        $pat = $pat[0];
        $patname = $pat->patlast.', '.$pat->patfirst.' '.$pat->patmiddle;
        $hosnum = $request->hpercode;
        $GLs = DB::SELECT("SELECT *, hf.funddesc,
        STUFF((SELECT ', ' + mp.purpose 
          FROM les.mapPurpose mp
          WHERE mp.id = gl2.id
          ORDER BY mp.purpose
          FOR XML PATH('')), 1, 1, '') [pps]
        from les.guaranteeLetter2018 as gl2 inner join hfundsrc hf on gl2.fundcode = hf.fundcode where gl2.hpercode = '$hosnum' ORDER BY refdate desc");
        $lastestenct = DB::SELECT("select les.getLatestEncounter('$hosnum') as latest");
        $lastestenct = $lastestenct[0]->latest;
        $fundsrcs = DB::SELECT("SELECT * FROM hfundsrc where fundstat = 'A'");
        

        return view('GuaranteeLetter.index', compact(
            'hpersonal',
            'userprofile',
            'patname',
            'hosnum',
            'GLs',
            'fundsrcs',
            'lastestenct'
        ));
    }

    public function glsave(request $request)
    {
        $glindex = new glindex();
        $glindex->details = 'new entry';
        $glindex->save();
        // return $request;

        $data = DB::SELECT("SELECT *, month(created_at) as datamonth, year(created_at) as datayear, day(created_at) as dataday FROM jhay.guaranteeletter_index where id = '$glindex->id'");
        $glnum = $request->fundcode.'-'.$data[0]->datayear.''.$data[0]->datamonth.$data[0]->dataday.''.$glindex->id;

        $user_name = DB::SELECT("select * FROM user_acc where employeeid = '".Auth::user()->employeeid."'");
        $user_name = $user_name[0]->user_name;

        $ctrlno = $data[0]->datayear.'-'.$data[0]->datamonth.$data[0]->dataday.'-'.$glindex->id;

        // DB::UPDATE("insert INTO dbo.hpdaf (enccode, ctrlno, hpercode, fundcode, refdate, amount, entryby, glstat, mode)
        // VALUES ('$request->lastestenct', '$ctrlno', '$request->hospnumber', '$request->fundcode', '$request->refdate', '$request->amount', '".Auth::user()->employeeid."', '$request->glstat', '$request->mode'");
        
        $datetime2 = DB::SELECT("select getdate() as datetime2");
        $datetime2 = $datetime2[0]->datetime2;

        DB::UPDATE("update dbo.hpdaf
        set mode = 'U'
        where enccode = '$request->lastestenct'");

        DB::UPDATE("EXEC jhay.sp_saveguaranteeletter '$request->lastestenct', '$datetime2', '$request->fundcode', '$request->amount', '$ctrlno', '$request->hospnumber', '$user_name'");

        // DB::table('hospital.dbo.hpdaf')->insert([
        //     'enccode' => $request->lastestenct,
        //     'ctrlno' => $request->ctrlno,
        //     'hpercode' => $request->hospnumber,
        //     'fundcode' => $request->fundcode,
        //     'refdate' => $request->refdate,
        //     'amount' => $request->amount,
        //     'entryby' => Auth::user()->employeeid,
        //     'glstat' => $request->glstat,
        //     'mode' => $request->mode
        // ]); 

        $id = DB::SELECT("SELECT top 1 id from dbo.hpdaf where hpercode = '$request->hospnumber' order by id desc");
        $id = $id[0]->id;

        if($request->pp1 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', '2DECH')");
        }
        if($request->pp2 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'CTSCA')");
        }
        if($request->pp3 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'DRUME')");
        }
        if($request->pp4 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'ECG')");
        }
        if($request->pp5 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'EEG')");
        }
        if($request->pp6 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'GLER')");
        }
        if($request->pp7 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'HEMOF')");
        }
        if($request->pp8 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'IMRTP')");
        }
        if($request->pp9 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'lab')");
        }
        if($request->pp10 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'MRIPR')");
        }
        if($request->pp11 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'PTTX')");
        }
        if($request->pp12 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'UTZ')");
        }
        if($request->pp13 == 1)
        {
            DB::UPDATE("INSERT INTO les.mapPurpose (id, purpose)
            values('$id', 'XRAY')");
        }

        $actlog = new actlog();
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'Add New Guarantee Letter: '.$glnum;
        $actlog->save();


        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $userprofile = userprofile::where('employeeid', Auth::user()->employeeid)->get();

        $pat = DB::SELECT("SELECT * FROM hperson WHERE hpercode = '$request->hospnumber'");
        $pat = $pat[0];
        $patname = $pat->patlast.', '.$pat->patfirst.' '.$pat->patmiddle;
        $hosnum = $request->hospnumber;
        $GLs = DB::SELECT("SELECT *, hf.funddesc,
        STUFF((SELECT ', ' + mp.purpose 
          FROM les.mapPurpose mp
          WHERE mp.id = gl2.id
          ORDER BY mp.purpose
          FOR XML PATH('')), 1, 1, '') [pps]
        from les.guaranteeLetter2018 as gl2 inner join hfundsrc hf on gl2.fundcode = hf.fundcode where gl2.hpercode = '$request->hospnumber' ORDER BY refdate desc");
        $lastestenct = DB::SELECT("select les.getLatestEncounter('$request->hospnumber') as latest");
        $lastestenct = $lastestenct[0]->latest;
        $fundsrcs = DB::SELECT("SELECT * FROM hfundsrc where fundstat = 'A'");

        return view('GuaranteeLetter.index', compact(
            'hpersonal',
            'userprofile',
            'patname',
            'hosnum',
            'GLs',
            'fundsrcs',
            'lastestenct'
        ));
    }

    public function mapdetails(request $request)
    {
        $data = DB::SELECT("select * from les.MAPDetails10292018 where glid = '$request->glnumber'");
        return response()->json($data);
    }

    public function savenewpcchrgcod(request $r)
    {
        if (count(Input::get('pcchrgcod')) > 0) {
            foreach (Input::get('pcchrgcod') as $key => $val) {
                DB::UPDATE("insert INTO les.MAPDetails10292018 (glid, pcchrgcod, amount, dCreated, hpercode)
                values ('$r->glid', '".Input::get("pcchrgcod.$key")."', '".Input::get("amount.$key")."', getdate(), '$r->hpercode1')");


                $actlog = new actlog();
                $actlog->employeeid = Auth::user()->employeeid;
                $actlog->act_details = 'Add New Guarantee Letter Details: '.$r->glid.' pcchrgcod: '.Input::get("pcchrgcod.$key");
                $actlog->save();
            }
        }


        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $userprofile = userprofile::where('employeeid', Auth::user()->employeeid)->get();

        $pat = DB::SELECT("SELECT * FROM hperson WHERE hpercode = '$r->hpercode1'");
        $pat = $pat[0];
        $patname = $pat->patlast.', '.$pat->patfirst.' '.$pat->patmiddle;
        $hosnum = $r->hpercode1;
        $GLs = DB::SELECT("SELECT *, hf.funddesc,
        STUFF((SELECT ', ' + mp.purpose 
          FROM les.mapPurpose mp
          WHERE mp.id = gl2.id
          ORDER BY mp.purpose
          FOR XML PATH('')), 1, 1, '') [pps]
        from les.guaranteeLetter2018 as gl2 inner join hfundsrc hf on gl2.fundcode = hf.fundcode where gl2.hpercode = '$r->hpercode1' ORDER BY refdate desc");
        $lastestenct = DB::SELECT("select les.getLatestEncounter('$r->hpercode1') as latest");
        $lastestenct = $lastestenct[0]->latest;
        $fundsrcs = DB::SELECT("SELECT * FROM hfundsrc where fundstat = 'A'");

        return view('GuaranteeLetter.index', compact(
            'hpersonal',
            'userprofile',
            'patname',
            'hosnum',
            'GLs',
            'fundsrcs',
            'lastestenct'
        ));
    }
}
