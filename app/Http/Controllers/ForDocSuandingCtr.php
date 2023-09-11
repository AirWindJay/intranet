<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ForDocSuandingCtr extends Controller
{
    public function dashboard()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $wards = DB::SELECT("select upper(wardname) as ward from hward where wardstat = 'A' and upper(wardname) != 'ADMISSION' and upper(wardname) != 'ER' and upper(wardname) != 'OPD' ORDER BY ward");
        $depts = DB::SELECT("SELECT upper(tsdesc) as tsdesc2,* FROM htypser where tsstat = 'A' ORDER BY tsdesc");

        return view('ForDocSuanding.dashboard', compact(
            'hpersonal',
            'wards',
            'depts'
        ));
    }

    public function dashboard2()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $wards = DB::SELECT("SELECT nc.user_name, upper(wardname) as wardname from dbo.user_acc_ncare nc left join hward hw on nc.wardcode = hw.wardcode WHERE nc.user_name = '".$hpersonal[0]->user_name."' ORDER BY wardname");

        return view('ForDocSuanding.dashboard2', compact(
            'hpersonal',
            'wards'
        ));
    }

    public function generatelist(request $request)
    {
        $wards = DB::SELECT("select upper(wardname) as ward from hward where wardstat = 'A' and upper(wardname) != 'ADMISSION' and upper(wardname) != 'ER' and upper(wardname) != 'OPD' ORDER BY ward");
        if($request->ward_name == 'EMERGENCY ROOM')
        {
            if($request->stat_type == 'ALL')
            {
                if($request->iscomplete == 'incom')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ER where (iscomplete < '5' OR pea_gs < '9')");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ER where (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                elseif($request->iscomplete == 'com')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ER where iscomplete = '5' and pea_gs = '9'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ER where iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                }
                else
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ER");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ER ORDER BY patlast");
                }
            }
            elseif($request->stat_type == 'A')
            {
                if($request->iscomplete == 'incom')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ER where ecnstat = 'A' AND (iscomplete < '5' OR pea_gs < '9')");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ER where ecnstat = 'A' AND (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                elseif($request->iscomplete == 'com')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ER where ecnstat = 'A' AND iscomplete = '5' and pea_gs = '9'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ER where ecnstat = 'A' AND iscomplete = '5' AND pea_gs = '9' ORDER BY patlast");
                }
                else
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ER where ecnstat = 'A'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ER where ecnstat = 'A' ORDER BY patlast");
                }
                
            }
            elseif($request->stat_type == 'I')
            {
                if($request->iscomplete == 'incom')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ER where ecnstat = 'I' AND (iscomplete < '5' OR pea_gs < '9')");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ER where ecnstat = 'I' AND (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                elseif($request->iscomplete == 'com')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ER where ecnstat = 'I' AND iscomplete = '5' and pea_gs = '9'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ER where ecnstat = 'I' AND iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                }
                else
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ER where ecnstat = 'I'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ER where ecnstat = 'I' ORDER BY patlast");
                }
            }
        }
        elseif($request->ward_name == 'OUT PATIENT DEPARTMENT')
        {
            if($request->stat_type == 'ALL')
            {
                if($request->iscomplete == 'incom')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4OPD where (iscomplete < '5' OR pea_gs < '9')");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4OPD where (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                elseif($request->iscomplete == 'com')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4OPD where iscomplete = '5' and pea_gs = '9'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4OPD WHERE iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                }
                else
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4OPD");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4OPD ORDER BY patlast");
                }
            }
            elseif($request->stat_type == 'A')
            {
                if($request->iscomplete == 'incom')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4OPD where ecnstat = 'A' AND (iscomplete < '5' OR pea_gs < '9')");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4OPD where ecnstat = 'A' AND (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                elseif($request->iscomplete == 'com')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4OPD where ecnstat = 'A' AND iscomplete = '5' and pea_gs = '9'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4OPD where ecnstat = 'A' AND iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                }
                else
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4OPD where ecnstat = 'A'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4OPD where ecnstat = 'A' ORDER BY patlast");
                }
                
            }
            elseif($request->stat_type == 'I')
            {
                if($request->iscomplete == 'incom')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4OPD where ecnstat = 'I' AND (iscomplete < '5' OR pea_gs < '9')");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4OPD where ecnstat = 'I' AND (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                elseif($request->iscomplete == 'com')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4OPD where ecnstat = 'I' AND iscomplete = '5' and pea_gs = '9'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4OPD where ecnstat = 'I' AND iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                }
                else
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4OPD where ecnstat = 'I'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4OPD where ecnstat = 'I' ORDER BY patlast");
                }
            }
        }
        else
        {
            if($request->stat_type == 'ALL')
            {
                if($request->iscomplete == 'incom')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ADM where (iscomplete < '5' OR pea_gs < '9') and ward = '$request->ward_name'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ADM where (iscomplete < '5' OR pea_gs < '9') and ward = '$request->ward_name' ORDER BY patlast");
                }
                elseif($request->iscomplete == 'com')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ADM where iscomplete = '5' and pea_gs = '9' and ward = '$request->ward_name'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ADM where iscomplete = '5' and pea_gs = '9' and ward = '$request->ward_name' ORDER BY patlast");
                }
                else
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' ORDER BY patlast");
                }
            }
            elseif($request->stat_type == 'A')
            {
                if($request->iscomplete == 'incom')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ADM where ecnstat = 'A' AND (iscomplete < '5' OR pea_gs < '9') and ward = '$request->ward_name'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ADM where ecnstat = 'A' AND (iscomplete < '5' OR pea_gs < '9') and ward = '$request->ward_name' ORDER BY patlast");
                }
                elseif($request->iscomplete == 'com')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ADM where ecnstat = 'A' AND iscomplete = '5' and pea_gs = '9' and ward = '$request->ward_name'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ADM where ecnstat = 'A' AND iscomplete = '5' and pea_gs = '9' and ward = '$request->ward_name' ORDER BY patlast");
                }
                else
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ADM where ecnstat = 'A' and ward = '$request->ward_name'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ADM where ecnstat = 'A' and ward = '$request->ward_name' ORDER BY patlast");
                }
                
            }
            elseif($request->stat_type == 'I')
            {
                if($request->iscomplete == 'incom')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ADM where ecnstat = 'I' AND (iscomplete < '5' OR pea_gs < '9') and ward = '$request->ward_name'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ADM where ecnstat = 'I' AND (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                elseif($request->iscomplete == 'com')
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ADM where ecnstat = 'I' AND iscomplete = '5' and pea_gs = '9' and ward = '$request->ward_name'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ADM where ecnstat = 'I' AND iscomplete = '5' and pea_gs = '9' and ward = '$request->ward_name' ORDER BY patlast");
                }
                else
                {
                    $count = DB::select("SELECT count(*) as counter FROM les.vwIncompleteCF4ADM where ecnstat = 'I' and ward = '$request->ward_name'");
                    $pats = DB::select("SELECT * FROM les.vwIncompleteCF4ADM where ecnstat = 'I' and ward = '$request->ward_name' ORDER BY patlast");
                }
            }
        }
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $determiner = '1';
        $type = $request->generate_type;

        return view('ForDocSuanding.patientlist', compact(
            'hpersonal',
            'pats',
            'type',
            'determiner',
            'count',
            'wards'
        ));
    }

    public function generatelist2(request $request)
    {
        $datefrom = $request->datefrom.' 00:00:00.000';
        $dateto = $request->dateto.' 00:00:00.000';
        if($request->dept == '1')
        {  
            if($request->iscomplete == 'ALL')
            {
                $pats = DB::select("SELECT * FROM jhay.fnIncompleteCF4_all() where cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) ORDER BY ward");
                $numpats = DB::select("SELECT ward, Count(*) as counter from jhay.fnIncompleteCF4_all() where cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) GROUP BY ward ORDER BY ward");
            }
            elseif($request->iscomplete == 'incom')
            {
                $pats = DB::select("SELECT * FROM jhay.fnIncompleteCF4_all() where cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) and (iscomplete < '5' OR pea_gs < '9') ORDER BY ward");
                $numpats = DB::select("SELECT ward, Count(*) as counter from jhay.fnIncompleteCF4_all() where cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) and (iscomplete < '5' OR pea_gs < '9') GROUP BY ward ORDER BY ward");
            }
            elseif($request->iscomplete == 'com')
            {
                $pats = DB::select("SELECT * FROM jhay.fnIncompleteCF4_all() where cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) and iscomplete = '5' and pea_gs = '9' ORDER BY ward");
                $numpats = DB::select("SELECT ward, Count(*) as counter from jhay.fnIncompleteCF4_all() where cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) and iscomplete = '5' and pea_gs = '9' GROUP BY ward ORDER BY ward");
            }
        }
        else
        {
            if($request->iscomplete == 'ALL')
            {
                $pats = DB::select("SELECT * FROM jhay.fnIncompleteCF4_all() where dept = '$request->dept' and cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) ORDER BY ward");
                $numpats = DB::select("SELECT ward, Count(*) as counter from jhay.fnIncompleteCF4_all() where dept = '$request->dept' and cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) GROUP BY ward ORDER BY ward");
            }
            elseif($request->iscomplete == 'incom')
            {
                $pats = DB::select("SELECT * FROM jhay.fnIncompleteCF4_all() where dept = '$request->dept' and cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) and (iscomplete < '5' OR pea_gs < '9') ORDER BY ward");
                $numpats = DB::select("SELECT ward, Count(*) as counter from jhay.fnIncompleteCF4_all() where dept = '$request->dept' and cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) and (iscomplete < '5' OR pea_gs < '9') GROUP BY ward ORDER BY ward");
            }
            elseif($request->iscomplete == 'com')
            {
                $pats = DB::select("SELECT * FROM jhay.fnIncompleteCF4_all() where dept = '$request->dept' and cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) and iscomplete = '5' and pea_gs = '9' ORDER BY ward");
                $numpats = DB::select("SELECT ward, Count(*) as counter from jhay.fnIncompleteCF4_all() where dept = '$request->dept' and cast(disdate as date) between cast('$datefrom' as date) and cast('$dateto' as date) and iscomplete = '5' and pea_gs = '9' GROUP BY ward ORDER BY ward");
            }
        }
        
        
        // $depts = DB::SELECT("SELECT distinct dept FROM jhay.fnIncompleteCF4_all() order by dept");
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $determiner = '2';


        return view('ForDocSuanding.patientlist', compact(
            'hpersonal',
            'pats',
            'determiner',
            'datefrom',
            'dateto',
            'numpats'
        ));
    }

    public function generatelist3_1(request $request)
    {
        $pats = DB::select("SELECT * FROM jhay.fnIncompleteCF4_all() WHERE ward = '$request->ward' ORDER BY patlast");
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $determiner = '3';
        $ward = $request->ward;
        $count = DB::SELECT("SELECT COUNT(*) as counter FROM jhay.fnIncompleteCF4_all() WHERE ward = '$request->ward'");

        return view('ForDocSuanding.patientlist', compact(
            'hpersonal',
            'pats',
            'determiner',
            'ward',
            'count'
        ));
    }

    

    public function generatelist3_2(request $request)
    {
        $pats = DB::select("SELECT * FROM jhay.fnIncompleteCF4_all() WHERE dept = '$request->dept' ORDER BY patlast");
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $determiner = '4';
        $dept = $request->dept;
        $count = DB::SELECT("SELECT COUNT(*) as counter FROM jhay.fnIncompleteCF4_all() WHERE dept = '$request->dept'");

        return view('ForDocSuanding.patientlist', compact(
            'hpersonal',
            'pats',
            'determiner',
            'dept',
            'count'
        ));
    }

    public function generatelist4(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $determiner = '5';
        $ward_name = $request->ward_name;
        $dd = $request->admdate;

        if($request->ward_name == 'OPD')
        {
            $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) ORDER BY patlast");
        }
        elseif($request->ward_name == 'ER')
        {
            $pats = DB::select("SELECT * from les.vwIncompleteCF4ER ORDER BY patlast");
        }
        else
        {
            $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' ORDER BY patlast");
        }

        return view('ForDocSuanding.patientlist', compact(
            'hpersonal',
            'determiner',
            'pats',
            'ward_name',
            'dd'
        ));
    }

    public function generatelist4_5(request $request)
    {
        $dd = '';
        if($request->ward_name == 'OPD')
        {
            $dd = $request->admdate;
            if($request->cf4_type == 'A')
            {
                if($request->not_discharge == '1')
                {
                    $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) and disdate IS NULL ORDER BY patlast");
                }
                else
                {
                    if($request->disdate == null)
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) ORDER BY patlast");
                    }
                    else
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) and '$request->disdate' = cast(disdate as date) ORDER BY patlast");
                    }
                }
            }
            elseif($request->cf4_type == 'C')
            {
                if($request->not_discharge == '1')
                {
                    $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) and disdate IS NULL and iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                }
                else
                {
                    if($request->disdate == null)
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) and iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                    }
                    else
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) and '$request->disdate' = cast(disdate as date) and iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                    }
                }
            }
            elseif($request->cf4_type == 'I')
            {
                if($request->not_discharge == '1')
                {
                    $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) and disdate IS NULL and (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                else
                {
                    if($request->disdate == null)
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) and (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                    }
                    else
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) and '$request->disdate' = cast(disdate as date) and (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                    }
                }
            }
        }
        elseif($request->ward_name == 'ER')
        {
            if($request->cf4_type == 'A')
            {
                if($request->not_discharge == '1')
                {
                    $pats = DB::select("SELECT * from les.vwIncompleteCF4ER WHERE ward = '$request->ward_name' and disdate IS NULL ORDER BY patlast");
                }
                else
                {
                    if($request->disdate == null)
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ER WHERE ward = '$request->ward_name' ORDER BY patlast");
                    }
                    else
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ER WHERE ward = '$request->ward_name' and '$request->disdate' = cast(disdate as date) ORDER BY patlast");
                    }
                }
            }
            elseif($request->cf4_type == 'C')
            {
                if($request->not_discharge == '1')
                {
                    $pats = DB::select("SELECT * from les.vwIncompleteCF4ER WHERE ward = '$request->ward_name' and disdate IS NULL and iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                }
                else
                {
                    if($request->disdate == null)
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ER WHERE ward = '$request->ward_name' and iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                    }
                    else
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ER WHERE ward = '$request->ward_name' and '$request->disdate' = cast(disdate as date) and iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                    }
                }
            }
            elseif($request->cf4_type == 'I')
            {
                if($request->not_discharge == '1')
                {
                    $pats = DB::select("SELECT * from les.vwIncompleteCF4ER WHERE ward = '$request->ward_name' and disdate IS NULL and (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                else
                {
                    if($request->disdate == null)
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ER WHERE ward = '$request->ward_name' and (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                    }
                    else
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ER WHERE ward = '$request->ward_name' and '$request->disdate' = cast(disdate as date) and (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                    }
                }
            }
        }
        else
        {   
            if($request->cf4_type == 'A')
            {
                if($request->not_discharge == '1')
                {
                    $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' and disdate IS NULL ORDER BY patlast");
                }
                else
                {
                    if($request->disdate == null)
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' ORDER BY patlast");
                    }
                    else
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' and '$request->disdate' = cast(disdate as date) ORDER BY patlast");
                    }
                }
            }
            elseif($request->cf4_type == 'C')
            {
                if($request->not_discharge == '1')
                {
                    $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' and disdate IS NULL and iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                }
                else
                {
                    if($request->disdate == null)
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' and iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                    }
                    else
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' and '$request->disdate' = cast(disdate as date) and iscomplete = '5' and pea_gs = '9' ORDER BY patlast");
                    }
                }
            }
            elseif($request->cf4_type == 'I')
            {
                if($request->not_discharge == '1')
                {
                    $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' and disdate IS NULL and (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                }
                else
                {
                    if($request->disdate == null)
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' and (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                    }
                    else
                    {
                        $pats = DB::select("SELECT * from les.vwIncompleteCF4ADM WHERE ward = '$request->ward_name' and '$request->disdate' = cast(disdate as date) and (iscomplete < '5' OR pea_gs < '9') ORDER BY patlast");
                    }
                }
            }
        }

        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $determiner = '5';
        $ward_name = $request->ward_name;

        return view('ForDocSuanding.patientlist', compact(
            'hpersonal',
            'determiner',
            'pats',
            'ward_name',
            'dd'
        ));
    }

    public function generatelist5(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $determiner = '6';
        $pats = DB::select("SELECT * from les.vwIncompleteCF4OPD WHERE cast(admdate as date) = cast('$request->admdate' as date) ORDER BY patlast");

        return view('ForDocSuanding.patientlist', compact(
            'hpersonal',
            'determiner',
            'pats'
        ));
    }

    public function patientsforced(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $determiner = '7';
        $pats = DB::select("SELECT * FROM jhay.fnintranetchecker('$request->hos_no') ORDER BY ward");

        return view('ForDocSuanding.patientlist', compact(
            'hpersonal',
            'determiner',
            'pats'
        ));
    }

    public function JSgetdataCC(request $request)
    {
        $data = DB::SELECT("SELECT * from hospital.les.cf4ChiefComplaint where enccode = '$request->enccode'");
        $data = $data[0];
        return response()->json($data);
    }

    public function JSgetdataHPI(request $request)
    {
        $data = DB::SELECT("SELECT * from hospital.les.cf4HisotryPresentIllness where enccode = '$request->enccode'");
        $data = $data[0];
        return response()->json($data);
    }

    public function JSgetdataPPMH(request $request)
    {
        $data = DB::SELECT("SELECT * from hospital.les.cf4PertinentPastMedHistory where enccode = '$request->enccode'");
        $data = $data[0];
        return response()->json($data);
    }

    public function JSgetdataOBGYN(request $request)
    {
        $data = DB::SELECT("select top 1 * from les.cf4ObGynHistory tt where tt.enccode = '$request->enccode' and deleted_at is null and ((na is not null) or ( P is not null and P <> ''and  G is not null and G <> ''))");
        $data = $data[0];
        
        return response()->json($data);
    }

    public function JSgetdataCIW(request $request)
    {
        $data = DB::SELECT("SELECT * from hospital.les.cf4CourseIntTheWard where enccode = '$request->enccode'");
        return response()->json($data);
    }

    public function JSgetdataPSSA(request $request)
    {
        $data = DB::SELECT("SELECT * from les.cf4TickTrans tt inner join les.cf4TickOption op on tt.tick_opt_id = op.id where op.grp = 'pssa' and tt.enccode = '$request->enccode'");
        $data = $data[0];
        return response()->json($data);
    }

    public function JSgetdataPEA(request $request)
    {
        $data = DB::SELECT("SELECT * FROM jhay.fnGetPeaVIt('$request->enccode')");
        if($data == null)
        {
            return response()->json('nodata');
        }
        return response()->json($data);
    }

    public function patientdetails(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $patdata = DB::SELECT("SELECT * FROM hospital.jhay.fnCheckPatientDetails('$request->enccode')");
        $patstatus = DB::SELECT("SELECT pStatus FROM hPhicClaimMap WHERE enccode = '$request->enccode'");

        if($hpersonal[0]->role_id == '9')
        {
            $enc = $request->enccode;
            $ciws = DB::SELECT("SELECT * FROM jhay.fnCheckCIW('$request->enccode')");
            $hrxos = DB::SELECT("SELECT * FROM dbo.hrxo where enccode = '$request->enccode'");
            $hrxoissues = DB::SELECT("SELECT * FROM dbo.hrxoissue where enccode = '$request->enccode'");
            $hrxocount = DB::SELECT("SELECT COUNT(*) as hrxocount FROM dbo.hrxo where enccode = '$request->enccode'");
            $hrxoissuecount = DB::SELECT("SELECT COUNT(*) as hrxoissuecount FROM dbo.hrxoissue where enccode = '$request->enccode'");
            $ccs = DB::SELECT("SELECT * from hospital.les.cf4ChiefComplaint where enccode = '$request->enccode'");
            $hpis = DB::SELECT("SELECT * from hospital.les.cf4HisotryPresentIllness where enccode = '$request->enccode'");
            $ppmhs = DB::SELECT("SELECT * from hospital.les.cf4PertinentPastMedHistory where enccode = '$request->enccode'");
            $pssas = DB::SELECT("SELECT * from les.cf4TickTrans tt inner join les.cf4TickOption op on tt.tick_opt_id = op.id where op.grp = 'pssa' and tt.enccode = '$request->enccode'");
            $ob_gyns = DB::SELECT("select * from les.cf4ObGynHistory tt where tt.enccode = '$request->enccode' and deleted_at is null and ((na is not null) or ( P is not null and P <> ''and  G is not null and G <> ''))");
            
            return view('ForDocSuanding.patientdetails', compact(
                'hpersonal',
                'patdata',
                'patstatus',
                'enc',
                'ciws',
                'hrxos',
                'hrxoissues',
                'ccs',
                'hpis',
                'ppmhs',
                'hrxocount',
                'hrxoissuecount'
            ));
        }
        

        return view('ForDocSuanding.patientdetails', compact(
            'hpersonal',
            'patdata',
            'patstatus'
        ));
    }
}
