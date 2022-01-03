<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/sanpham');
});
use App\Http\Controllers\LoginController;
Route::get('signin',[LoginController::class,'signin']);
Route::post('postLog',[LoginController::class,'postLog']);
use App\Http\Controllers\AdminController;
Route::get('admin_login',[AdminController::class,'login']);
Route::get('admin_index',[AdminController::class,'index']);
Route::get('signin',[AdminController::class,'signin']);
Route::post('postLog',[AdminController::class,'postLog']);
