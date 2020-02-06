<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// panggil model client
use App\client;

class clientController extends Controller
{
    public function pindah () {
    // mengambil data client dari data base
    $client = Client::all();

    //tembak data ke view
        return view ('halaman_client.client', ['client' => $client]);
    }

    public function tambah () {
        // tembak ke view client tambah blade
        return view ('halaman_client.client_tambah');
    }

    public function store (Request $request) {
        // jika validasi sesuai kita perintahkan untuk menginput 
        $this->validate($request, [
            'nama_client' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_ktp' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'ket' => 'required',
            'crated_by' => 'required'   
        ]);

        Client::create([
            'nama_client' => $request->nama_client,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_ktp' => $request->no_ktp,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'ket' => $request->ket,
            'crated_by' => $request->crated_by
        ]);

        // mengambalikan ke view
        return redirect('/home/client');
    }

}
