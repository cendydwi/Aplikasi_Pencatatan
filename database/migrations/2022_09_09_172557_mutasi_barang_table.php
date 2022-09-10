<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mutasi_barang', function (Blueprint $table) {
            $table->increments('id_mutasi');
            $table->string('no_bukti');
            $table->date('tanggal');
            $table->enum('status_barang',[1,2]);
            $table->integer('quantity');
            $table->string('kode_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
