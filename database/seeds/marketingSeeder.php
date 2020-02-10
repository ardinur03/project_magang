<?php

use Illuminate\Database\Seeder;

class marketingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('marketing')->insert([
            'nama'          => 'ardi',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '2003-1-3',
            'no_ktp'        => '2323223',
            'alamat'        => 'Jalan Babakan Tarogong',
            'no_hp'         => '08984674',
            'email'         => 'ardinurinsan@gmail.com',
            'ket'           => 'hanya coba',
            'created_by'    => '3'
        ]);
    }
}
