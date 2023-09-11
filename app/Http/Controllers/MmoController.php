<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use App\MMOitems;
use App\price_balances;

class MmoController extends Controller
{
    public function index()
    {
        $hpersonal = DB::SELECT("EXEC [hospital].[jhay].[spIntranetmydata] '".Auth::user()->employeeid."'");
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $items = MMOitems::with('price_balances')
            ->with('items')
            ->where('end_user_id', '1')
            ->paginate(15);
        
        $additemscats = DB::select("SELECT * FROM [item_management].[dbo].[cats] ORDER BY description");
        $additems = DB::select("SELECT * FROM [item_management].[dbo].[items] ORDER BY description"); 

        return view('mmo.index', compact(
            'hpersonal',
            'mydata',
            'items',
            'additemscats',
            'additems'
        ));
    }

    public function additemssave(request $request)
    {
        // return $request;

        foreach (Input::get('item_id') as $key => $val) 
        {
            $thisitem = DB::SELECT("EXEC [item_management].[jhay].[spCheckDuplicate] '".Input::get("item_id.$key")."'");

            if(count($thisitem) == 1)
            {
                DB::UPDATE("EXEC [item_management].[jhay].[spAddExisting] '".Input::get("item_id.$key")."', '".Input::get("item_qty.$key")."'");
            }
            else
            {
                DB::UPDATE("EXEC [item_management].[jhay].[spAddNotExisting] '".Input::get("item_id.$key")."', '".Input::get("item_qty.$key")."'");
            }
        }

        return redirect('/mmo/dashboard');
    }

    public function addget(request $request)
    {
        $item = DB::SELECT("EXEC [item_management].[jhay].[spSelectItem] '$request->per_price_id'");
        $item1 = $item[0];
        return response()->json($item1);
    }

    public function addgetsave(request $request)
    {
        DB::UPDATE("EXEC [item_management].[jhay].[spAddBalance] '$request->per_price_id', '$request->itemQTY', '$request->itemprice'");
        return redirect('/mmo/dashboard');
    }
}
