<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model {
    // menghandle table cllients jadi unit
    protected $table = 'unit';
    // filter yang mana yang mau di inputkan
    protected $fillable = ['kode_unit', 'harga', 'luas', 'luas_tanah', 'ket'];
    // 
    protected $primaryKey = 'id_unit';
    
    // public function client () {
    //     return this
    // }

    
}
