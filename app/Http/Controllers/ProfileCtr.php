<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\userprofile;

class ProfileCtr extends Controller
{
    public function index()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $userprofile = userprofile::where('employeeid', Auth::user()->employeeid)->get();


        return view('personalprofile.index', compact(
            'hpersonal',
            'userprofile'
        ));
    }

    public function myprofileedit($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");

        if($id == Auth::user()->employeeid)
        {
            $user = userprofile::where('employeeid', Auth::user()->employeeid)->first();
            if (count ($user) < 1)  
            {
                $user = new userprofile();
                $user->employeeid   =Auth::user()->employeeid;
                $user->save();

                $user = userprofile::where('employeeid', Auth::user()->employeeid)->first();

                return view('personalprofile.edit', compact(
                    'hpersonal',
                    'user'
                ));
            }
            else
            {
                return view('personalprofile.edit', compact(
                    'hpersonal',
                    'user'
                ));
            }
        }
        else
        {
            return redirect('/myprofile');
        }
    }

    public function myprofileeditsave(request $request)
    {
        $user = userprofile::where('employeeid', Auth::user()->employeeid)->first();
        $user->nick_name            =$request->nick_name;
        $user->birthdate            =$request->birthdate;
        $user->fav_saying           =$request->fav_saying;
        $user->save();

        return redirect('/myprofile');
    }
}
