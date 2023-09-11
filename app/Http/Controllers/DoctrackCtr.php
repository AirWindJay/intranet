<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DoctrackCtr extends Controller
{
    public function index()
    {   
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $docs = DB::select("SELECT purchase_request_id ,user_id, pr.created_at, pr.supplier_id, pr.mode_id, category_id, modes.mode_desc, ss.supplier_name
        FROM procurement.dbo.purchase_requests as pr
        LEFT JOIN procurement.dbo.modes as modes ON pr.mode_id = modes.mode_id
        JOIN procurement.dbo.suppliers as ss on pr.supplier_id = ss.supplier_id");

        return view('doc_track.index', compact(
            'hpersonal',
            'mydata',
            'docs'
        ));
    }

    public function perdoc(request $request)
    {
        $doc = DB::select("SELECT TOP 1 * FROM procurement.dbo.purchase_requests WHERE purchase_request_id = '$request->id'");
        $doc = $doc[0];

        return response()->json($doc);
    }

    public function perdocitems(request $request)
    {
        $items = DB::select("SELECT pr.item_id, received_quantity, items.item_desc FROM procurement.dbo.item_purchase_request as pr INNER JOIN procurement.dbo.items as items ON pr.item_id = items.item_id WHERE pr.purchase_request_id = '$request->id'");

        return response()->json($items);
    }
}