<?php

namespace Database\Seeders;

use App\Models\Gudang; // Add this use statement
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gudang::factory(30)->create();
    }
}
