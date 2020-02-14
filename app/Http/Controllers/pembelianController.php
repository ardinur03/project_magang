<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Unit;
class pembelianController extends Controller
{
    //index pembelian
    public function index () {
        $pembelian = Pembelian::all();
        return view ('halaman_pembelian.pembelian', ['pembelian' => $pembelian]);
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
            'pilih_unit' => $request->pilih_unit,
            'pilih_client' => $request->pilih_client,
            'pilih_marketing' => $request->pilih_marketing,
        ]);
    } 
    
}
