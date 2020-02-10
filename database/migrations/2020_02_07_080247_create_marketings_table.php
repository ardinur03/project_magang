<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /**
      * CREATE TABLE IF NOT EXISTS `marketing` (
  `id_marketing` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL DEFAULT 'L',
  `tanggal_lahir` date NOT NULL DEFAULT '0000-00-00',
  `no_ktp` varchar(50) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT '0',
  `created_date` datetime DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_marketing`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

      */
    public function up()
    {
        Schema::create('marketing', function (Blueprint $table) {
            $table->increments('id_marketing', 10);
            $table->char('nama', 50);
            $table->enum('jenis_kelamin',['L','P']);
            $table->date('tanggal_lahir');
            $table->char('no_ktp', 50);
            $table->char('alamat', 150);
            $table->char('no_hp', 50);
            $table->char('email', 50);
            $table->char('ket', 100);
            $table->bigInteger('created_by', 0);
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
        Schema::dropIfExists('marketing');
    }
}
