<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('homepage', function(){
    return view('Guest.homepage');
});
Route::get('bandara' , function () {
    return view('admin.index-bandara');
});
Route::get('isi-data-diri', function(){
    return view('Guest.isi-data-diri');
});
Route::get('konfirmasi', function(){
    return view('Guest.konfirmasi');
});
// Route::get('navfor-planes', AdminController::class);
Route::get('payment-getway',function(){
    return view('Guest.payment-getway');
});
Route::get('pesawat-admin' ,  function () {
    return view('admin.pesawat-admin');
});
Route::get('pesanan' ,  function () {
    return view('admin.pesanan');
});
Route::get('pelanggan' ,  function () {
    return view('admin.pelanggan');
});
Route::get('pilih-maskapai',function(){
    return view('Guest.pilih-maskapai');
});