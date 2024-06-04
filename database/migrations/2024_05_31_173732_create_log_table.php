<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_log');
            $table->string('jenis_aktivitas');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->integer('qty');
            $table->string('user');
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
        Schema::dropIfExists('log_aktivitas');
    }
}
