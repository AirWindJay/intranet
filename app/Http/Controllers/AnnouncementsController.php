<?php

namespace App\Http\Controllers;

use App\announcements;
use App\announcements2;
use App\User;
use App\actlog;
use Auth;
use App\animage;
use App\animage2;
use App\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\fornursing;
use DB;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function omccannouncements()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $announcement = DB::select("select top 20 * from jhay.intranet_announcement WHERE is_archived = '0' AND division = '1' order by 'id' desc");
        $animage = DB::select("select * from jhay.intranet_animage order By 'id' desc");
        // $announcement = announcements::with('animage')->where('division', 1)->where(is_archived, 0)->orderBy('id', 'DESC')->get();
        
        return view('announcements.omcc',compact(
            'announcement',
            'animage',
            'mydata',
            'hpersonal'
        ));
    }
    
    public function medicalannouncements()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $announcement = DB::select("select top 20 * from jhay.intranet_announcement WHERE is_archived = '0' AND division = '2' order by 'id' desc");
        $animage = DB::select("select * from jhay.intranet_animage order By 'id' desc");
        // $announcement = announcements::with('animage')->where('division', 2)->where(is_archived, 0)->orderBy('id', 'DESC')->get();
        return view('announcements.medical',compact(
            'announcement',
            'animage',
            'mydata',
            'hpersonal'
        ));
    }

    public function nursingannouncements()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $announcement = DB::select("select top 20 * from jhay.intranet_announcement WHERE is_archived = '0' AND division = '3' order by 'id' desc");
        $animage = DB::select("select * from jhay.intranet_animage order By 'id' desc");
        // $announcement = announcements::with('animage')->where('division', 3)->where(is_archived, 0)->orderBy('id', 'DESC')->get();
        return view('announcements.nursing',compact(
            'announcement',
            'animage',
            'mydata',
            'hpersonal'
        ));
    }

    public function hopssannouncements()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $announcement = DB::select("select top 20 * from jhay.intranet_announcement WHERE is_archived = '0' AND division = '4' order by 'id' desc");
        $animage = DB::select("select * from jhay.intranet_animage order By 'id' desc");
        // $announcement = announcements::with('animage')->where('division', 4)->where(is_archived, 0)->orderBy('id', 'DESC')->get();
        return view('announcements.hopss',compact(
            'announcement',
            'animage',
            'mydata',
            'hpersonal'
        ));
    }

    public function financeannouncements()
    {  
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $announcement = DB::select("select top 20 * from jhay.intranet_announcement WHERE is_archived = '0' AND division = '5' order by 'id' desc");
        $animage = DB::select("select * from jhay.intranet_animage order By 'id' desc");
        // $announcement = announcements::with('animage')->where('division', 5)->where(is_archived, 0)->orderBy('id', 'DESC')->get();
        return view('announcements.finance',compact(
            'announcement',
            'animage',
            'mydata',
            'hpersonal'
        ));
    }

    public function viewdetails($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $announcement = DB::select("select top 20 * from jhay.intranet_announcement WHERE id = '".$id."'");
        $animage = DB::select("select * from jhay.intranet_animage where ann_id = '".$announcement[0]->id."'");
        // $announcement = announcements::with('animage')->where('id', $id)->first();
        return view('announcements.viewdetails',compact(
            'announcement',
            'animage',
            'mydata',
            'hpersonal'
        ));
    }

    public function viewdetails2($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $announcement = DB::select("select top 20 * from jhay.intranet_announcement2 WHERE id = '".$id."'");
        $animage = DB::select("select * from jhay.intranet_animage2 where ann_id = '".$announcement[0]->id."'");
        // $announcement = announcements::with('animage')->where('id', $id)->first();
        return view('announcements.viewdetails',compact(
            'announcement',
            'animage',
            'mydata',
            'hpersonal'
        ));
    }

    public function addannouncement()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        return view('announcements.announcementsadd', compact(
            'hpersonal',
            'mydata'
        ));
    }

    public function saveannouncement(request $request)
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        
        $ann = new announcements();
        $ann->employeeid            = Auth::user()->employeeid;
        $ann->division              = $mydata[0]->division;
        $ann->title                 = $request->title;
        $ann->detail                = $request->detail;
        $ann->is_webmas             = '0';
        $ann->save();

        $latestid = $ann->id;

        if(Input::hasFile('file'))
        {   
            $file = Input::file('file');
            if($file->getClientOriginalExtension() == 'png'){
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/announcements/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());

                DB::table('jhay.intranet_animage')->insert([
                    'ann_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);

            }
            $file = Input::file('file');
            if($file->getClientOriginalExtension() == 'jpg'){
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/announcements/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());


                DB::table('jhay.intranet_animage')->insert([
                    'ann_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);
            }
        }

        if(Input::hasFile('pdffile'))
        {   
            $file = Input::file('pdffile');
            if($file->getClientOriginalExtension() == 'pdf'){
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/pdf/announcements/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());


                DB::table('jhay.intranet_animage')->insert([
                    'ann_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);
            }
        }

        $actlog = new actlog();
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'Create New Announcement ID: '.$latestid;
        $actlog->save();

        if($mydata[0]->division == 1)
            {
                return redirect('/omcc');
            }
            if($mydata[0]->division == 2)
            {
                return redirect('/medical');
            }
            if($mydata[0]->division == 3)
            {
                return redirect('/nursing');
            }
            if($mydata[0]->division == 4)
            {
                return redirect('/hopss');
            }
            if($mydata[0]->division == 5)
            {
                return redirect('/finance');
            }
    }

    public function editannouncement($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $announcements = DB::select("select top (1) * from jhay.intranet_announcement where id = ".$id);
        return view('announcements.announcementsedit', compact(
            'hpersonal',
            'announcements'
        ));
    }

    public function updateannouncement(request $request)
    {

        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $updateDetails=array(
            'title'           =>$request->title,
            'detail'          => $request->detail,
        );

        DB::table('jhay.intranet_announcement')
            ->where('id', $request->id)
            ->update($updateDetails);


        $actlog = new actlog();
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'UPDATED Announcement ID: '.$request->id;
        $actlog->save();

        
        if($mydata->division == 1)
            {
                return redirect('/omcc');
            }
            if($mydata->division == 2)
            {
                return redirect('/medical');
            }
            if($mydata->division == 3)
            {
                return redirect('/nursing');
            }
            if($mydata->division == 4)
            {
                return redirect('/hopss');
            }
            if($mydata->division == 5)
            {
                return redirect('/finance');
            }

    }

    public function deleteannouncement(request $request)
    {
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $ann = announcements::where('id', $request->id)->first();   
        $ann->is_archived		    =1;
        $ann->save();


        $actlog = new actlog();
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'Archived Announcement ID: '.$request->id;
        $actlog->save();
        
        if($mydata[0]->division == 1)
            {
                return redirect('/omcc');
            }
            if($mydata[0]->division == 2)
            {
                return redirect('/medical');
            }
            if($mydata[0]->division == 3)
            {
                return redirect('/nursing');
            }
            if($mydata[0]->division == 4)
            {
                return redirect('/hopss');
            }
            if($mydata[0]->division == 5)
            {
                return redirect('/finance');
            }
    }



    public function webmasterpostann()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        return view('webmaster.announcementsadd', compact(
            'hpersonal',
            'mydata'
        ));
    }

    public function webmasterpostannsave(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");

        $ann = new announcements2();
        $ann->employeeid            = Auth::user()->employeeid;
        $ann->division              = '10';
        $ann->title                 = $request->title;
        $ann->detail                = $request->detail;
        $ann->is_webmas             = '1';
        $ann->save();

        $latestid = $ann->id;

        $actlog = new actlog();
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'Created New Admin Announcement ID: '.$latestid;
        $actlog->save();

        if(Input::hasFile('file'))
        {   
            $file = Input::file('file');
            if($file->getClientOriginalExtension() == 'png'){
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/announcements/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());

                DB::table('jhay.intranet_animage2')->insert([
                    'ann_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);

            }
            $file = Input::file('file');
            if($file->getClientOriginalExtension() == 'jpg'){
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/announcements/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());


                DB::table('jhay.intranet_animage2')->insert([
                    'ann_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);
            }
        }

        if(Input::hasFile('pdffile'))
        {   
            $file = Input::file('pdffile');
            if($file->getClientOriginalExtension() == 'pdf'){
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/pdf/announcements/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());


                DB::table('jhay.intranet_animage2')->insert([
                    'ann_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);
            }
        }

        return redirect('/webmaster/addpost');
    }
    

    /**
     * 
     * 
     * 
     * DIVISIONS
     * 1=OMCC
     * 2=MEDICAL
     * 3=NURSING
     * 4=HOPSS
     * 5=FINANCE
     * 
     * 
     * 
     * 
     * ROLE
     * 9=WEBMASTER
     * 1=CLIENTS
     * 2=OMCC ADMIN
     * 3=MEDICAL ADMIN
     * 4=NURSING ADMIN
     * 5=HOPSS ADMIN
     * 6=FINANCE ADMIN
     * 7=CCRU ADMIN
     * 8=MIS
     * 10=HIMO ADMIN
     * 11=Nurse II & Nurse III
     * 12=Nurse IV
     * 13=Pharmacy
     * 14=DEPARTMENT SECRETARY
     * 15=FORISO
     * 16=FORDOCSUANDING
     * 17=NURSE SUPERVISOR
     * 18=CONSIGNMENT - ENT
     * 19=CONSIGNMENT - ORTHO
     * 20=CONSIGNMENT - OPHTHA
     * 21=GUARANTEE LETTER
     * 22=MEDICAL SUPPLIES
    */







































    
    //WEBMASTER
    //temporary registration
    public function regist(request $request)
    {

        // $user = new User;
        // $user->username		    =$request->username;
        // $user->lname		    =$request->lname;
        // $user->fname		    =$request->fname;
        // $user->mname		    =$request->mname;
        // $user->ename		    =$request->ename;
        // $user->department       =$request->department;

        // if(($request->department <= 6) && ($request->department >= 1))
        // {
        //     $user->division     =5;
        // }elseif(($request->department <= 14) && ($request->department >= 7))
        // {
        //     $user->division     =4;
        // }elseif(($request->department <= 58) && ($request->department >= 15))
        // {
        //     $user->division     =2;
        // }elseif(($request->department <= 87) && ($request->department >= 59))
        // {
        //     $user->division     =3;
        // }
        // elseif(($request->department <= 96) && ($request->department >= 88))
        // {
        //     $user->division     =1;
        // }

        // $user->password 	    =Hash::make($request->password);
        // $user->role             ='1';
        // $user->save();
        
        // if($user->division == 3)
        // {
        //     $fornursing = new fornursing;
        //     $fornursing->user_id        =$user->id;
        //     $fornursing->is_thismonth   ='1';
        //     $fornursing->save();
            

        //     $fornursing = new fornursing;
        //     $fornursing->user_id        =$user->id;
        //     $fornursing->is_thismonth   ='2';
        //     $fornursing->save();
        // }
        


        return redirect('/');
    }

    public function usersidex()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $users = DB::select("SELECT * FROM jhay.intranet_user as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid order by lastname asc");
        $departments = DB::select("select * from jhay.intranet_department");
        return view('webmaster.index', compact(
            'hpersonal',
            'mydata',
            'users',
            'departments'
        ));
    }

    public function editusersidex($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $user = DB::select("SELECT * FROM jhay.intranet_user as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid where tb1.employeeid = '".$id."'");
        $departmentOMCC = DB::select("select * from jhay.intranet_department Where division = 'OFFICE OF THE MEDICAL CENTER CHIEF' order by 'department' ASC");
        $departmentMEDICAL = DB::select("select * from jhay.intranet_department Where division = 'MEDICAL SERVICES' order by 'department' ASC");
        $departmentNURSING = DB::select("select * from jhay.intranet_department Where division = 'NURSING SERVICES' order by 'department' ASC");
        $departmentHOPSS = DB::select("select * from jhay.intranet_department Where division = 'HOSPITAL OPERATIONS AND PATIENT SUPPORT SERVICES' order by 'department' ASC");
        $departmentFINANCE = DB::select("select * from jhay.intranet_department Where division = 'FINANCE SERVICES' order by 'department' ASC");
        $departments = DB::select("select * from jhay.intranet_department");
        $edituser = DB::select("SELECT * FROM jhay.intranet_user as tb1 LEFT JOIN hpersonal as tb2 ON tb1.employeeid = tb2.employeeid where tb1.employeeid = '".$id."'");
        return view('webmaster.edituser', compact(
            'hpersonal',
            'edituser',
            'user',
            'departments',
            'departmentOMCC',
            'departmentMEDICAL',
            'departmentNURSING',
            'departmentHOPSS',
            'departmentFINANCE'
        ));

    }

    public function updateusersidex(request $request)
    {   
        $employeeid = $request->employeeid;
        $role_id    = $request->role_id;
        $department = $request->department;

        

        if(($request->department <= 6) && ($request->department >= 1))
        {
            $division     =5;
        }elseif(($request->department <= 14) && ($request->department >= 7))
        {
            $division     =4;
        }elseif(($request->department <= 58) && ($request->department >= 15))
        {
            $division     =2;
        }elseif(($request->department <= 88) && ($request->department >= 59))
        {
            $division     =3;
        }
        elseif(($request->department <= 97) && ($request->department >= 89))
        {
            $division     =1;
        }


        $updateDetails=array(
            'role_id'          =>$role_id,
            'department'        =>$department,
            'division'         =>$division
        );

        DB::table('jhay.intranet_user')
            ->where('employeeid', $employeeid)
            ->update($updateDetails);


        return redirect('/usermanagementwebmaster');
    }

    public function deleteusersidex(request $request)
    {   
        // $users = User::where('id', $request->id)->first();
        // $users->fname           =$users->fname.'---'.$users->username.'---'.$users->ename;
        // $users->username        ='DISABLED'.$users->username.$users->id;
        // $users->ename           ='DISABLED';
        // $users->save();
        // return redirect('/usermanagementwebmaster');
    }
}
