<?php

namespace App\Http\Controllers;

use App\ccruposts;
use App\actlog;
use Illuminate\Http\Request;
use App\image;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class CcrupostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ccruannouncements()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $ccru = ccruposts::where('is_archived', '0')->orderBy('id', 'desc')->with('image')->paginate(25);
        return view('announcements.ccru', compact(
            'ccru',
            'mydata',
            'hpersonal'
        ));
    }

    public function ccruannouncementssearch(request $request)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        if($request->type_document == '1' && $request->date_from != '' && $request->date_to != '')
        {
            $ccru = ccruposts::where('is_archived', '0')
            ->WhereBetween('doc_date', [$request->date_from, $request->date_to])
            ->orderBy('id', 'desc')
            ->with('image')
            ->paginate(25);
        }
        elseif($request->type_document == '1' && $request->date_from == '' && $request->date_to == '')
        {
            $ccru = ccruposts::where('is_archived', '0')
            ->orderBy('id', 'desc')
            ->with('image')
            ->paginate(25);
        }
        else
        {
            $ccru = ccruposts::where('is_archived', '0')
            ->WhereBetween('doc_date', [$request->date_from, $request->date_to])
            ->where('type_document', $request->type_document)
            ->orderBy('id', 'desc')
            ->with('image')
            ->paginate(25);
        }
        
         

        return view('announcements.ccru', compact(
            'ccru',
            'mydata',
            'hpersonal'
        ));
    }

    public function ccrudetails($id)
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $ccru = ccruposts::where('is_archived', '0')->where('id', $id)->orderBy('id', 'desc')->with('image')->first();
        return view('announcements.ccrudetails', compact(
            'ccru',
            'mydata',
            'hpersonal'
        ));
    }

    public function ccrudetailsout($id)
    {
        $ccru = ccruposts::where('is_archived', '0')->where('id', $id)->orderBy('id', 'desc')->with('image')->first();
        return view('announcements.ccrudetailsout', compact(
            'ccru',
            'mydata',
            'hpersonal'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addccru()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        return view('announcements.ccruadd', compact(
            'hpersonal',
            'mydata'
        ));
    }

    public function saveccru(request $request)
    {
        // $file = Input::file('ccrupdffile');
        // if($file->getClientOriginalExtension() == 'PDF')
        // {
        //     return '1';
        // }
        // elseif($file->getClientOriginalExtension() == 'pdf')
        // {
        //     return '2';
        // }
        // DB::table('jhay.intranet_ccrupost')->insert([
        //     'yearnnumber'       => $request->doc_num,
        //     'employeeid'        => Auth::user()->employeeid,
        //     'title'             => $request->title,
        //     'doc_date'             => $request->doc_date,
        //     'type_document'     => $request->type_document,
        //     'detail'            => $request->detail,
        //     'for_omcc'          => $request->for_omcc,
        //     'for_medical'       => $request->for_medical,
        //     'for_nursing'       => $request->for_nursing,
        //     'for_hopss'         => $request->for_hopss,
        //     'for_finance'       => $request->for_finance
        //      ]);
        
        $post = new ccruposts();
        $post->yearnnumber          = $request->doc_num;
        $post->employeeid           = Auth::user()->employeeid;
        $post->title                = $request->title;
        $post->doc_date             = $request->doc_date;
        $post->type_document        = $request->type_document;
        $post->detail               = $request->detail;
        $post->for_omcc             = $request->for_omcc;
        $post->for_medical          = $request->for_medical;
        $post->for_nursing          = $request->for_nursing;
        $post->for_hopss            = $request->for_hopss;
        $post->for_finance          = $request->for_finance;
        $post->save();

        $latestid = $post->id;
      

        if(Input::hasFile('ccrufile'))
        {
            $file = Input::file('ccrufile');
            if($file->getClientOriginalExtension() == 'png')
            {
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/ccru/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());

                DB::table('jhay.intranet_ccruimage')->insert([
                    'ccru_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);

            }
        }
        if(Input::hasFile('ccrufile'))
        {
            $file = Input::file('ccrufile');
            if($file->getClientOriginalExtension() == 'PNG')
            {
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/ccru/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());

                DB::table('jhay.intranet_ccruimage')->insert([
                    'ccru_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);

            }
        }
        if(Input::hasFile('ccrufile'))
        {
            $file = Input::file('ccrufile');
            if($file->getClientOriginalExtension() == 'jpg')
            {
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/ccru/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());


                DB::table('jhay.intranet_ccruimage')->insert([
                    'ccru_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);
            }
        }
        if(Input::hasFile('ccrufile'))
        {
            $file = Input::file('ccrufile');
            if($file->getClientOriginalExtension() == 'JPG')
            {
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/ccru/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());


                DB::table('jhay.intranet_ccruimage')->insert([
                    'ccru_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);
            }
        }

        if(Input::hasFile('ccrupdffile'))
        {
            $file = Input::file('ccrupdffile');
            if($file->getClientOriginalExtension() == 'pdf')
            {
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/pdf/ccru/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());


                DB::table('jhay.intranet_ccruimage')->insert([
                    'ccru_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);
            }
        }
        if(Input::hasFile('ccrupdffile'))
        {
            if($file->getClientOriginalExtension() == 'PDF')
            {
                $filename = $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension();
                $file->move('uploads/pdf/ccru/', $file->getClientOriginalname().'_'.$latestid.'.'.$file->getClientOriginalExtension());


                DB::table('jhay.intranet_ccruimage')->insert([
                    'ccru_id'           => $latestid,
                    'file'              => $filename,
                    'extension'         => $file->getClientOriginalExtension()
                    ]);
            }
        }

            $actlog = new actlog();
            $actlog->employeeid = Auth::user()->employeeid;
            $actlog->act_details = 'New CCRU Announcement ID: '.$latestid;
            $actlog->save();

        return redirect('/ccru');
    }

    public function editccruannouncements($id)
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $announcements = DB::select("select top (1) * from jhay.intranet_ccrupost Where id = '".$id."'");
        return view('announcements.ccruedit', compact(
            'announcements',
            'hpersonal'
        ));
    }

    public function updateccruannouncements(request $request)
    {

        $updateDetails=array(
            'title'              =>$request->title,
            'type_document'      =>$request->type_document,
            'doc_date'           =>$request->doc_date,
            'detail'             =>$request->detail,
            'for_omcc'           =>$request->for_omcc,
            'for_medical'        =>$request->for_medical,
            'for_nursing'        =>$request->for_nursing,
            'for_hopss'          =>$request->for_hopss,
            'for_finance'        =>$request->for_finance
        );

        DB::table('jhay.intranet_ccrupost')
            ->where('id', $request->id)
            ->update($updateDetails);

        $actlog = new actlog();
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'Edit CCRU Announcement ID: '.$request->id;
        $actlog->save();
        
        return redirect('/ccru');
    }

    public function deleteccruannouncements(request $request)
    {

        $ccrudata = ccruposts::where('id', $request->id)->first();   
        $ccrudata->is_archived		    =1;
        $ccrudata->save();

        $actlog = new actlog();
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'Archived CCRU Announcement ID: '.$request->id;
        $actlog->save();
        
        return redirect ('/ccru');
    }
}
