<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suggestions;
use Auth;
use DB;
class SuggestionsController extends Controller
{

    public function index()
    {   
        $users = DB::select("select * from hpersonal");
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $sug = DB::select("select top 10 * from jhay.intranet_suggestion where to_me = '1' order by id desc");
        return view('messageme.index', compact(
            'hpersonal',
            'sug',
            'users'
        ));
    }
   
    public function messageme()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $sug = DB::select("select * from jhay.intranet_suggestion where employeeid = '".Auth::user()->employeeid."' order by created_at desc");
        return view('messageme.messageme', compact(
            'hpersonal',
            'sug'
        ));
    }

    public function messagemesave(request $request)
    {
        $mydata = DB::select("select top 1 * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        
        DB::table('jhay.intranet_suggestion')->insert([
            'employeeid'        => Auth::user()->employeeid,
            'msg'               => $request->message,
            'to_me'             => '1'
             ]);
        
        return redirect('/messageme');
    }

    public function reply($id)
    {
        $hpersonal2 = DB::select("select * from hpersonal WHERE employeeid = '".$id."'");
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $sug = DB::select("select top 20 * from jhay.intranet_suggestion where employeeid = '".$id."' order by created_at desc");
        return view('messageme.replymessage', compact(
            'hpersonal',
            'hpersonal2',
            'sug',
            'id'
        ));
    }

    public function replysave(request $request)
    {
        DB::table('jhay.intranet_suggestion')->insert([
            'employeeid'        => $request->employeeid,
            'msg'               => $request->message,
            'to_me'             => '0'
             ]);

        return redirect('/message/reply/'.$request->employeeid);
    }
}
