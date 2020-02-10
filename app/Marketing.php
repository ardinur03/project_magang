<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    //menghandle tabel marketings menjadi marketing
    protected $table = 'marketing';
    // filter tabel yang mau di masukkan
    protected $fillable = ['nama', 'jenis_kelamin', 'tanggal_lahir', 'no_ktp', 'alamat', 'no_hp', 'email', 'ket', 'created_by'];
    // 
    protected $primaryKey = 'id_marketing';

    
}