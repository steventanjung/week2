<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$tanggal = date("d-m-y h:i:s",time());
	$nama = "Steven Tanjung";
    return view('welcome') ->with('tanggal',$tanggal)
    ->with ('nama',$nama);
});

Route::get('halo', function () {
    return view('halo');
});

Route::get('bebas', function () {
    return view('terserah.bebas');
});


Route::get('halo/bebas', function () {
    return view('terserah.bebas');
});