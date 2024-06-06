<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('log'); // Drop tabel jika sudah ada

        Schema::create('log', function (Blueprint $table) {
            $table->increments('kode_log'); // Primary key sudah didefinisikan di sini
            $table->char('jenis_aktivitas', 10);
            $table->integer('kode_barang');
            $table->char('nama_barang', 20);
            $table->smallInteger('qty');
            $table->char('user', 50);
            $table->timestamps(); // Optional: for created_at and updated_at columns

            // Foreign key constraints
            $table->foreign(['kode_barang', 'nama_barang'])->references(['kode_barang', 'nama_barang'])->on('barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log');
    }
}
