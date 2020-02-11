<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model {
    //
    protected $table = 'unit';
    // filter yang mana yang mau di inputkan
    protected $fillable = ['kode_unit', 'harga', 'luas', 'luas_tanah', 'ket'];
    // 
    protected $primaryKey = 'id_unit';
    // protected $kode_unit = 'kode_unit';

    // public function client () {
    //     return this
    // }
}
