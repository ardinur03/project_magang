<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Unit;
use App\Client;
use App\Marketing;

class pembelianController extends Controller
{
    //index pembelian
    public function index () { 
        $unit      = Unit::all();
        $client    = Client::all();
        $marketing = Marketing::all();
        return view ('halaman_pembelian.pembelian', ['unit' => $unit, 'client' => $client, 'marketing' => $marketing]);
    }

    // proses tambah pembelian <- rute('proses_tambah)
    public function proses (Request $request) {
        // memvalidasi
        $this->validate($request, [ 
            'pilih_unit' => 'required',
            'pilih_client' => 'required',
            'pilih_marketing' => 'required'
        ]);
        // proses input ke database
        Pembelian::create([
            'id_unit'     => $request->pilih_unit,
            'id_client'   => $request->pilih_client,
            'id_marketing'=> $request->pilih_marketing,
        ]);
        // mengembalikan
        return redirect ('/home/pembelian');
    } 
    
    //passing data ke view
    public function list_pembelian() {
        $pembelian = Pembelian::all();        
        return view ('halaman_pembelian.list_pembelian', ['pembelian' => $pembelian]);
    }

    // metod menuju ke view edit penjualan
    public function edit_pembelian($id_pembelian) {
        $pembelian = Pembelian::find($id_pembelian);
        $pembeli = Pembelian::all();
        $unit = Unit::all();
        return view ('halaman_pembelian.edit_pembelian', ['pembelian'=>$pembelian, 'unit'=>$unit, 'pembeli'=>$pembeli]);
    } 
    // proses edit pembelian
    public function edit_proses ($id_pembelian, Request $request) {
        $pembelian = Pembelian::find($id_pembelian);
        $pembelian->id_unit = $request->pilih_unit;
        $pembelian->id_client = $request->pilih_client;
        $pembelian->id_marketing = $request->pilih_marketing;
        $pembelian->save();
        // mengembalikan
        return redirect ('/home/list_pembelian');
    }

    // proses hapus pembelian
    public function hapus_pembelian ($id_pembelian) {
        $pembelian = Pembelian::find($id_pembelian);
        $pembelian->delete();
        // mengembalikan 
        return redirect ('/home/list_pembelian');
    }
}
