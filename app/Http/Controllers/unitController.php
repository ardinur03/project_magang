<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Unit;

class unitController extends Controller
{
    // methode pindah ke unit dan menampilkan data dari database
    public function pindah () {
        // ambil data dari tabel unit
        $unit = Unit::all();
        // kirim data ke view halaman_unit/unit
        return view ('halaman_unit.unit', ['unit' =>$unit]);
    }


    // metod tambah unit
    public function tambah () {
        // halaman view tambah unit
        return view ('halaman_unit.tambah_unit');
    }
    // metod proses untuk mengirim data unit
    public function proses (Request $request) {
        // memvalidasikan form
        $this->validate($request, [
            'kode_unit' => 'required',
            'harga'     => 'required',
            'luas'      => 'required',
            'luas_tanah'=> 'required',
            'ket'       => 'required'
        ]);
        // proses input
        Unit::create([
            'kode_unit' => $request->kode_unit,
            'harga'     => $request->harga,
            'luas'      => $request->luas,
            'luas_tanah'=> $request->luas_tanah,
            'ket'       => $request->ket
        ]);
        // mengembalikkan
        return redirect ('/home/unit');
    }


    // metod rute edit 
    public function edit ($id_unit){
        $unit = Unit::find($id_unit);
        return view ('halaman_unit.edit_unit', ['unit'=>$unit]);
    }
    // proses edit data
    public function update ($id_unit, Request $request) {
        // memvalidasi form edit unit
        $this->validate($request, [
            'kode_unit' => 'required',
            'harga'     => 'required',
            'luas'      => 'required',
            'luas_tanah'=> 'required',
            'ket'       => 'required'
        ]);
        // proses edit unit
        $unit = Unit::find($id_unit);
        $unit->kode_unit = $request->kode_unit;
        $unit->harga = $request->harga;
        $unit->luas = $request->luas;
        $unit->luas_tanah = $request->luas_tanah;
        $unit->ket = $request->ket;
        $unit->save();
        // mengembalikkan
        return redirect ('/home/unit');
    }


    // metod hapus
    public function delete ($id_unit) {
       $unit = Unit::find($id_unit);
       $unit->delete();
       // mengembalikkan
       return redirect ('/home/unit');
    }

    

}