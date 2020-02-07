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

    // method untuk pindah ke view tambah
    public function tambah () {
        // tembak ke view client tambah blade
        return view ('halaman_client.client_tambah');
    }

    // method untuk menambahkan client
    public function proses (Request $request) {
        // memvalidasi form
        $this->validate($request, [
            'nama_client'   => 'required',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat'    => 'required',
            'no_ktp'    => 'required',
            'no_hp'     => 'required',
            'email'     => 'required',
            'ket'       => 'required',
            'crated_by' => 'required'   
        ]);
        // proses input
        Client::create([
            'nama_client'   => $request->nama_client,
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat'    => $request->alamat,
            'no_ktp'    => $request->no_ktp,
            'no_hp'     => $request->no_hp,
            'email'     => $request->email,
            'ket'       => $request->ket,
            'crated_by' => $request->crated_by
        ]);
        // mengembalikan ke view
        return redirect('/home/client');
    }

    // method untuk menghapus client
    public function delete ($id_client) {
        $client = Client::find($id_client);
        $client->delete(); 
        // mengembalikan
        return redirect ('/home/client');
    }

    // method untuk edit client
    public function edit ($id_client) {
        $client = Client::find($id_client);
        return view ('halaman_client.client_edit', ['client'=> $client]);
    }

    // method untuk proses update
    public function update ($id_client, Request $request) {
        // memvalidasi formvedit client
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
        // proses edit client
        $client = Client::find($id_client);
        $client ->nama_client = $request->nama_client;
        $client ->tempat_lahir = $request->tempat_lahir;
        $client ->tanggal_lahir = $request->tanggal_lahir;
        $client ->jenis_kelamin = $request->jenis_kelamin;
        $client ->alamat = $request->alamat;
        $client ->no_ktp = $request->no_ktp;
        $client ->no_hp = $request->no_hp;
        $client ->email = $request->email;
        $client ->ket = $request->ket;
        $client ->crated_by = $request->crated_by;
        $client->save();
        // mengembalikan
        return redirect ('/home/client');
    }
    

}
