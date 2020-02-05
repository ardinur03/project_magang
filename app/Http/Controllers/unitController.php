<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class unitController extends Controller
{
    // methode pindah
    public function pindah () {
        //lempar rute unit->pindah ke view
        // return view ('halaman_unit.unit');
        // ambil data dari tabel unit
        $unit = DB::table('unit')->get();
        // kirim data ke view halaman_unit/unit
        return view ('halaman_unit.unit', ['unit' =>$unit]);
    }

   
}