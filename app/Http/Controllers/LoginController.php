<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class LoginController extends Controller
{
    public function __construct()
    {
        @session_start();
    }
    public function signin()
    {
        return view('');
    }
    public function postLog(Request $request)
    {   
        if($request->us==""||$request->pw=="")
        {
            return redirect("/")->with("Error","User - Pass không được rỗng");
        }
        //return view('bai05');
        else{
            $kh = DB::table("khachhang")->where([['username',$request->us],['password',$request->pw]])->get();
            if($kh!=null)
            {
                //$_SESSION['username'] = $nv[0]->username;
                //$_SESSION['fullname'] = $nv[0]->tennv;

                Session::put('username',$kh[0]->username);
                Session::put('fullname',$kh[0]->HovaTen);
               
                //Session::put('manv',$kh[0]->makh);
                return redirect("");
            }
            
        }
    }
}
