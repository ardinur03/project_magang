<?php

use Illuminate\Database\Seeder;


class clientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('client')->insert([
           'nama_client' => 'ardi',
           'tempat_lahir' => 'Bandung',
           'tanggal_lahir' => '2005-1-11',
           'jenis_kelamin' => 'L',
           'alamat' => 'Jalan Babakan',
           'no_ktp' => '2343232',
           'no_hp' => '0898398',
           'email' => 'ardinur@gmail.com',
           'ket' => 'coba',
           'crated_by' => '2'
       ]);
    
    }
}
