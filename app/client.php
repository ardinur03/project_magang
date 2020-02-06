<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    //menghandle table cllients jadi client
    protected $table = "client";

    protected $fillable = ['nama_client', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'no_ktp', 'no_hp', 'email', 'ket', 'crated_by'];
}