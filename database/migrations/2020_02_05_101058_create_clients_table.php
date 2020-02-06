<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id_client', 10);
            $table->char('nama_client', 50);
            $table->char('tempat_lahir', 200);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['L','P']);
            $table->char('alamat', 150);
            $table->char('no_ktp', 50);
            $table->char('no_hp', 20);
            $table->char('email');
            $table->char('ket');
            $table->bigInteger('crated_by', 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
