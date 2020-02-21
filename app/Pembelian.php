<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    //
    protected $table = 'pembelian';
    protected $fillable = ['id_unit', 'id_client', 'id_marketing'];
    protected $primaryKey = 'id_pembelian';

    // unit
    public function pilih_unit() {
        return $this->belongsTo('App\Unit', 'id_unit');
    }

    // client
    public function pilih_client() {
        return $this->belongsTo('App\Client', 'id_client');
    }

    // marketing
    public function pilih_marketing() {
        return $this->belongsTo('App\Marketing', 'id_marketing');
    }
}
