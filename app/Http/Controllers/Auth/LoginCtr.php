<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CheckCtr;
use Illuminate\Support\Facades\Auth;
use DB;
use App\ccruposts;
use App\announcements2;

class LoginCtr extends Controller
{
    use CheckCtr;

    public function index()
    {
        
        $user = Auth::user();
        if($user == null)
        {
            $ccru = ccruposts::where('is_archived', '0')->orderBy('id', 'desc')->with('image')->paginate(25);
            $announcements2 = announcements2::where('is_archived', '0')->orderBy('id', 'desc')->with('animage')->take(5)->get();
            return view('welcome', compact(
                'ccru',
                'announcements2'
            ));
        }
        return redirect('/home');
    }

    protected  function loginZZZZZ(Request $request)
    {
        $data =   $this->authAccount($request);

        if (count ($data) < 1)  {
            return redirect()
              ->back()
              ->withErrors(['username' => 'Invalid username or password'])
              ->withInput();
          }
      
         Auth::loginUsingId($data[0]->employeeid);
         return redirect('/home');
    }

    protected  function login(Request $request)
    {

    $data =   $this->authHomisAccount($request);

        if (count ($data) < 1)  {
            return redirect()
              ->back()
              ->withErrors(['username' => 'Invalid username or password'])
              ->withInput();
          }
          
        Auth::loginUsingId($data[0]->employeeid);
        $mydata = DB::select("select * from jhay.intranet_user WHERE employeeid = '".Auth::user()->employeeid."'");
        $date2 = DB::select("select getdate() as date");
        $date2 = date('d', strtotime($date2[0]->date));

        if($mydata == null)
        {
            return redirect('/update/account');
        }
        if($mydata[0]->division == 3)
        {
            return redirect('/nurse/dashboard/'.$date2);
        }
        return redirect('/home');
    }

    public function logout() {

        Auth::logout();
        return redirect('http://192.168.6.179/');
    
      }
}
