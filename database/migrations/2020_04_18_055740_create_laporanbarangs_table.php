<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanbarang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodebarang');
            $table->string('namabarang');
            $table->integer('stokawal');
            $table->integer('barang_masuk');
            $table->integer('barang_keluar');
            $table->integer('stokakhir');
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
        Schema::dropIfExists('laporanbarangs');
    }
}
