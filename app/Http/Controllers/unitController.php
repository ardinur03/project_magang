<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class unitController extends Controller
{
    // methode pindah ke unit dan menampilkan data dari database
    public function pindah () {
        // ambil data dari tabel unit
        $unit = DB::table('unit')->get();
        //lempar rute unit->pindah ke view
        // kirim data ke view halaman_unit/unit
        return view ('halaman_unit.unit', ['unit' =>$unit]);
    }

    // metod tambah unit
    public function tambah () {
        // halaman view tambah unit
        return view ('halaman_unit.tambah_unit');
    }
    // metod store untuk mengirim data unit
    public function store (Request $request) {
        // kirim data ke tabel unit
        DB::table('unit')->insert([
            'kode_unit' => $request->kode_unit,
            'harga' => $request->harga,
            'luas' => $request->luas,
            'luas_tanah' => $request->luas_tanah,
            'ket' => $request->ket
        ]);
        // mengembalikkan
        return redirect ('/home/unit');
    }


    // metod edit 
    public function edit ($id){
        // mengambil data unit berdasarkan unit yg di pilih
        $unit = DB::table('unit')->where('id_unit',$id)->get();
        // passing data unit yang didapat ke view edit_unit.blade.php
	    return view('halaman_unit.edit_unit',['unit' => $unit]);
    }
    // proses update
    public function update (Request $request) {
        DB::table('unit')->where('id_unit', $request->id)->update([
            'kode_unit' => $request->kode_unit,
            'harga' => $request->harga,
            'luas' => $request->luas,
            'luas_tanah' => $request->luas_tanah,
            'ket' => $request->ket
        ]);
        // mengembalikkan
        return redirect ('/home/unit');
    }


    // metod hapus
    public function hapus ($id) {
        DB::table('unit')->where('id_unit', $id)->delete();
       // mengembalikkan
       return redirect ('/home/unit');
    }

    

}