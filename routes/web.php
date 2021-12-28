<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/sanpham');
});
use App\Http\Controllers\LoginController;
Route::get('signin',[LoginController::class,'signin']);
Route::post('postLog',[LoginController::class,'postLog']);
