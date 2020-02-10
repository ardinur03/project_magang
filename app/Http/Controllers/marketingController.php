<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Marketing;

class marketingController extends Controller
{
    //rute pindah pindah ke halaman index
    public function index () {
        $marketing = Marketing::all();
        return view ('halaman_marketing.marketing', ['marketing' => $marketing]);
    }

    // metod untuk menghapus
    public function delete ($id_marketing) {
        $marketing = Marketing::find($id_marketing);
        $marketing->delete();
        // mengembalikan view
        return redirect ('/home/marketing');
    }

    // metod tombol tambah marketing
    public function tambah () {
        // halaman view tambah unit
        return view ('halaman_marketing.tambah_market');
    }

    // metod proses untuk mengirim data marketing ke database
    public function proses (Request $request) {
        // memvalidasikan form marketing
        $this->validate($request, [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'no_ktp' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'ket' => 'required',
            'created_by' => 'required'
        ]);
        // proses input
        Marketing::create([
            'nama'=> $request->nama,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'tanggal_lahir'=> $request->tanggal_lahir,
            'no_ktp'=> $request->no_ktp,
            'alamat'=> $request->alamat,
            'no_hp'=> $request->no_hp,
            'email'=> $request->email,
            'ket'=> $request->ket,
            'created_by'=> $request->created_by,
        ]);
        // mengmbalikan
        return redirect ('/home/marketing');
    }

    // metod view edit marketing
    public function edit ($id_marketing) {
        $marketing = Marketing::find($id_marketing);
        // tampilkan
        return view ('halaman_marketing.edit_market', ['marketing'=>$marketing]);
    }
    // metod proses update
    public function update ($id_marketing, Request $request) {
        // memvalidasi form
        $this->validate($request, [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'no_ktp' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'ket' => 'required',
            'created_by' => 'required'
        ]);
        // proses edit marketing
        $marketing = Marketing::find($id_marketing);
        $marketing->nama = $request->nama;
        $marketing->jenis_kelamin = $request->jenis_kelamin;
        $marketing->tanggal_lahir = $request->tanggal_lahir;
        $marketing->no_ktp = $request->no_ktp;
        $marketing->alamat = $request->alamat;
        $marketing->no_hp = $request->no_hp;
        $marketing->email = $request->email;
        $marketing->ket = $request->ket;
        $marketing->created_by = $request->created_by;
        $marketing->save();
        // mengembalikkan
        return redirect ('/home/marketing');
    }
}
