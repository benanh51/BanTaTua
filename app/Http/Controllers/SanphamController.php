<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SanphamController extends Controller
{
    public function index()
    {
        $ds = $this -> danhsachsanpham();
        return view('') -> with('ds', $ds);
    }
    //lay thong tin tu view luu vao csdl
    public function save(Request $request)
    {
        $sp = DB::table('sanpham')->insert(['Ten'=>$request->tensp,'Mota'=>$request->Mota,
                                                'Gia'=>$request->gia,'Size'=>$request->size]);
        $error = $sp? 'Insert thành công' : 'Có lỗi xảy ra';
        $ds = $this->danhsachphong();
        return view('')->with(['error'=>$error,'ds'=>$ds]);
    }

    function danhsachphong()
    {
        $ds = DB::table('sanpham')->get();
        return $ds;
    }
    
}
