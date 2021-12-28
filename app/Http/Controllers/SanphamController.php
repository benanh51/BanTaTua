<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanphamController extends Controller
{
    /*public function index()
    {
        $ds = $this -> danhsachphong();
        return view('pages.phongban') -> with('ds', $ds);
    }
    //lay thong tin tu view luu vao csdl
    public function save(Request $request)
    {
        $pb = DB::table('phongban')->insert(['tenphong'=>$request->tenphong,'viettat'=>$request->viettat,
                                                'ghichu'=>$request->ghichu]);
        $error = $pb? 'Insert thành công' : 'Có lỗi xảy ra';
        $ds = $this->danhsachphong();
        return view('pages.phongban')->with(['error'=>$error,'ds'=>$ds]);
    }

    function danhsachphong()
    {
        $ds = DB::table('phongban')->get();
        return $ds;
    }*/
    
}
