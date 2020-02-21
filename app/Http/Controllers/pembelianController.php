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
    
}
