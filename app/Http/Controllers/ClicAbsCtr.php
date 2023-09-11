<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ClicAbsCtr extends Controller
{
    public function clinical_abstract()
    {
        $datetoday = DB::select("SELECT GETDATE() AS datetoday");
        $datetoday = $datetoday[0]->datetoday;
        return view('medicalcert.clinical_abstract', compact(
            'datetoday'
        ));
    }
}
