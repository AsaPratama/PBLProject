<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data dummy untuk tabel barang_masuk
        $data = [
            [
                'kode_barang' => 'KODE1',
                'nama_barang' => 'Barang Masuk 1',
                'tanggal_waktu' => now(),
                'grade' => 'A',
                'kuantitas' => 20,
                'user' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_barang' => 'KODE2',
                'nama_barang' => 'Barang Masuk 2',
                'tanggal_waktu' => now(),
                'grade' => 'B',
                'kuantitas' => 15,
                'user' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        // Masukkan data ke dalam tabel menggunakan DB::table
        //DB::table('barang_masuk')->insert($data);
    }
}
