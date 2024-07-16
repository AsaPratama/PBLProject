<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data dummy untuk tabel barang
        $data = [
            [
                'kode_barang' => 1,
                'nama_barang' => 'Cavendish Banana',
                'grade' => 'A',
                'stok' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 2,
                'nama_barang' => 'Crystal Guava',
                'grade' => 'B',
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel menggunakan DB::table
        DB::table('barang')->insert($data);
    }
}
