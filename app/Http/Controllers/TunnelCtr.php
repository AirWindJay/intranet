<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class TunnelCtr extends Controller
{
    public function socialservices()
    {
        $admin = DB::select("select * from jhay.intranet_user where employeeid = '".Auth::user()->employeeid."'");
        $empdegree = DB::select("select top 1 * from hprovider where employeeid = '".Auth::user()->employeeid."'");
        $user_level = DB::select("select top 1 * from dbo.user_acc where employeeid = '".Auth::user()->employeeid."'");
        $user = Auth::user();
        $auth_id = Auth::user()->employeeid;
        
        if($user == null)
        {
            return redirect('/');
        }

        if($user_level[0]->user_level == '1')
        {
            return redirect('http://192.168.6.123/malasakit_form/'.$auth_id);
        }

        foreach($empdegree as $emp)
        {
            if($emp->empdegree == 'RSW')
            {
                return redirect('http://192.168.6.123/malasakit_form/'.$auth_id);
            }
        }
        
        foreach ($admin as $adm)
        {
            if($adm->role_id == '9')
            {
                return redirect('http://192.168.6.123/malasakit_form/'.$auth_id);
            }
        }
        
        if(Auth::user()->employeeid == '000618')
        {
            return redirect('http://192.168.6.123/malasakit_form/'.$auth_id);
        }

        return redirect('/home');
    
    }

    public function linenIS($id)
    {
        if($id == Auth::user()->employeeid)
        {
            $user = DB::select("SELECT * FROM jhay.linen_user where employeeid = '".$id."'");
            if (count ($user) == 1)  
            {
                return redirect('http://192.168.6.179:81');
            }
            else
            {
                return redirect('/home');
            }
        }
        else
        {
            return redirect('/home');
        }
    }
}
