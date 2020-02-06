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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 1. crud unit
// rute halaman unit
Route::get('/home/unit', 'unitController@pindah');
//crud tampil unit 
Route::get('/home/unit/tambah_unit', 'unitController@tambah');
// rute store unit
Route::post('/home/unit/store', 'unitController@store');
// rute edit unit
Route::get('/home/unit/edit/{id}', 'unitController@edit');
Route::post('/home/unit/update', 'unitController@update');
// rute hapus unit
Route::get('/home/unit/hapus/{id}', 'unitController@hapus');


//2. crud client
// rute halaman client dari metod pindah ke clientController
Route::get('/home/client', 'clientController@pindah');
// rute tambah
Route::get('/home/client/tambah', 'clientController@tambah');
// rute proses simpan
Route::post('/home/client/proses', 'clientController@proses');