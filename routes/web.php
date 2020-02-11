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
Route::get('/home/unit', 'unitController@pindah')->name('index_unit');
//crud tampil unit 
Route::get('/home/unit/tambah_unit', 'unitController@tambah')->name('tambah_unit');
// rute proses unit
Route::put('/home/unit/proses/{id_unit}', 'unitController@update');
// rute edit unit
Route::get('/home/unit/edit/{id_unit}', 'unitController@edit')->name('edit_unit');
// rute tambah
Route::post('/home/unit/proses', 'unitController@proses')->name('proses_tambah');
// rute hapus unit
Route::get('/home/unit/hapus/{id_unit}', 'unitController@delete')->name('hapus_unit');


//2. crud client
// rute halaman client dari metod pindah ke clientController
Route::get('/home/client', 'clientController@pindah')->name('index_client');
// rute tambah client
Route::get('/home/client/tambah', 'clientController@tambah')->name('client_tambah');
// rute proses simpan client
Route::post('/home/client/proses', 'clientController@proses')->name('proses_simpan');
// rute hapus client
Route::get('/home/client/hapus/{id_client}', 'clientController@delete');
// rute edit client
Route::get('/home/client/edit/{id_client}', 'clientController@edit');
// rute proses update
Route::put('/home/client/update/{id_client}', 'clientController@update');


// 3. crud marketing
// rute halaman marketing indexnya
Route::get('/home/marketing', 'marketingController@index')->name('index_marketing');
// rute hapus data marketing
Route::get('/home/marketing/hapus/{id_marketing}', 'marketingController@delete');
// rute tambah marketing
Route::get('/home/marketing/tambah_marketing', 'marketingController@tambah')->name('tambah_marketing');
// rute proses inputan 
Route::post('/home/marketing/proses', 'marketingController@proses')->name('proses_tambah');
// rute edit marketing
Route::get('/home/marketing/edit/{id_marketing}', 'marketingController@edit');
// rute proses marketing
Route::put('/home/marketing/update/{id_marketing}', 'marketingController@update');