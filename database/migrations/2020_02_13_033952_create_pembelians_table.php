<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**
     * CREATE TABLE IF NOT EXISTS `pembelian` (
        `id_pembelian` int(10) NOT NULL AUTO_INCREMENT,
        `id_unit` int(10) NOT NULL,
        `id_client` int(10) NOT NULL,
        `id_marketing` int(10) NOT NULL,
        `tgl_pembelian` date NOT NULL,
        `harga_unit` double(12,0) NOT NULL DEFAULT '0',
        `diskon_tambahan` int(20) NOT NULL DEFAULT '0',
        `biaya_tambahan` double NOT NULL DEFAULT '0',
        `harga_final` double(12,0) NOT NULL DEFAULT '0',
        `keterangan` tinytext,
        `cancel_by` int(11) DEFAULT NULL,
        `cancel_date` datetime DEFAULT NULL,
        `created_date` datetime NOT NULL,
        `tgl_update` datetime DEFAULT NULL,
        `deleted_at` datetime DEFAULT NULL,
        PRIMARY KEY (`id_pembelian`)
        ) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=latin1;
        ->nullable(false)->change();
     */

    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id_pembelian', 10);
            $table->integer('id_unit', 10)->nullable()->change();
            $table->integer('id_client', 10)->nullable()->change();
            $table->integer('id_marketing', 10)->nullable()->change();
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
        Schema::dropIfExists('pembelians');
    }
}
