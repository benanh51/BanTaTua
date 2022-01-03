<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('layouts/admin_login');
    }
    public function index(){
        return view('layouts/admin_layout');

    }
    public function __construct()
    {
        @session_start();
    }
    public function signin()
    {
        return view('sanpham');
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
                
               
                //Session::put('id',$kh[0]->makh);
                return redirect("sanpham");
            }
            
        }
    }
}
