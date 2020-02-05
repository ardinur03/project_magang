<?php

use Illuminate\Database\Seeder;

class unitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unit')->insert ([
            'kode_unit' => 'u01',
            'harga' => '100000',
            'luas' => '200',
            'luas_tanah' => '230',
            'ket' => 'hanya coba'
        ]);
    }
}
