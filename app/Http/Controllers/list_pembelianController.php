<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//sambungkan dengan model 
use App\Pembelian;
use App\Unit;
use App\Client;
use App\Marketing;

class list_pembelianController extends Controller
{
    //passing data ke view
    public function index() {
        $pembelian = Pembelian::all();        
        return view ('halaman_pembelian.list_pembelian', ['pembelian' => $pembelian]);
    }
}
