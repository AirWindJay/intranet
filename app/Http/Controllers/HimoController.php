<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HimoController extends Controller
{
    public function index()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");


        return view('himo.dashboard', compact(
            'hpersonal'
        ));
    }

    public function approve(request $request)
    {

    }

    public function deny(request $request)
    {

    }
}
