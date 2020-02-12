<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pembelianController extends Controller
{
    //index pembelian
    public function index () {
        return view ('halaman_pembelian.pembelian');
    }
}
