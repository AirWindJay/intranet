<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\date;
use App\fornursing;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Hpersonal;
use App\ccruposts;
use App\reminders;
use Illuminate\Support\Facades\Input;
use DB;

class WebmasterCtr extends Controller
{
    public function actlog()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $actlogs = DB::TABLE('hospital.jhay.intranet_actlog')
            ->select('hospital.jhay.intranet_actlog.employeeid', 'lastname', 'firstname', 'middlename', 'act_details', 'created_at')
            ->LEFTJOIN('hospital.dbo.hpersonal', 'hospital.jhay.intranet_actlog.employeeid', '=', 'hospital.dbo.hpersonal.employeeid')
            ->orderby('hospital.jhay.intranet_actlog.created_at', 'desc')
            ->paginate(25);

        return view('webmaster.actlog', compact(
            'hpersonal',
            'actlogs'
        ));
    }

    public function reminders()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $reminders = reminders::OrderBy('id', 'desc')->paginate(25);

        return view('webmaster.reminders', compact(
            'hpersonal',
            'reminders'
        ));
    }

    public function addreminders(request $request)
    {
        $reminders = new reminders();
        $reminders->reminders = $request->reminder;
        $reminders->save();

        return redirect('/webmaster/reminders');
    }

    public function chagestat(request $request)
    {
        $reminders = reminders::where('id', $request->rem_id)->first();
        if($reminders->stat == 'A')
        {
            $reminders->stat = 'I';
        }
        else
        {
            $reminders->stat = 'A';
        }
        $reminders->save();

        return redirect('/webmaster/reminders');
    }

    public function getreminders()
    {
        $reminders = reminders::Where('stat', 'A')->OrderBy('id', 'desc')->get();

        return response()->json($reminders);
    }

    public function editreminders($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $reminder = reminders::Where('id', $id)->first();

        return view('webmaster.editreminders', compact(
            'hpersonal',
            'reminder'
        ));
    }
    
    public function editreminderssave(request $request)
    {
        $reminder = reminders::Where('id', $request->id)->first();
        $reminder->reminders = $request->reminder;
        $reminder->save();

        return redirect('/webmaster/reminders');
    }

    public function unichargechecker()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");

        return view('webmaster.unichargecheck', compact(
            'hpersonal'
        ));
    }

    public function unichargecheckercheck(request $r)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $chargelist = DB::SELECT("EXEC dbo.sp_jjm_ward_chargeTable '$r->chargetable'");
        $chrgtable = $r->chargetable;

        return view('webmaster.unichargechecklist', compact(
            'hpersonal',
            'chargelist',
            'chrgtable'
        ));
    }


    public function unichargecheckerchecksave(request $r)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $chargelist = DB::SELECT("EXEC dbo.sp_jjm_ward_chargeTable '$r->chargetable'");
        $chrgtable = $r->chargetable;


        if (count(Input::get('item')) > 0) {
            foreach (Input::get('item') as $key => $val) {
                DB::UPDATE("insert INTO jhay.intranet_unichargelist (chrgcode, chrgtable)
                values ('".Input::get("item.$key")."', '$r->chrgtable')");
            }
        }

        return redirect('/webmaster/unichargechecker');
    }
}
