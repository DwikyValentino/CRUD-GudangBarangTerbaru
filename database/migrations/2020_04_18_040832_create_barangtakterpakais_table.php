<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangtakterpakaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangtakterpakais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kodebarang');
            $table->string('namabarang');
            $table->date('tanggal');
            $table->Text('alasan');
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
        Schema::dropIfExists('barangtakterpakais');
    }
}
