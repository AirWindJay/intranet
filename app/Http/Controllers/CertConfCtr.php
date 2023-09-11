<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CertConfCtr extends Controller
{
    public function cert_confinement()
    {
        $datetoday = DB::select("SELECT GETDATE() AS datetoday");
        $datetoday = $datetoday[0]->datetoday;
        return view('medicalcert.cert_confinement', compact(
            'datetoday'
        ));
    }
}
