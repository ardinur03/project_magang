<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class unitController extends Controller
{
    //lempar rute unit->pindah ke view
    public function pindah () {
        return view ('unit');
    }
}