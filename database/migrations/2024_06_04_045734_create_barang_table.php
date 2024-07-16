<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('kode_barang');
            $table->char('nama_barang', 20);
            $table->char('grade', 5);
            $table->integer('stok');
            $table->timestamps(); // Optional: for created_at and updated_at columns

            $table->unique(['kode_barang', 'nama_barang']); // Tambahkan unique constraint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
