<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


public function run(): void
{
    DB::table('m_kategori')->insert([
        ['kategori_nama' => 'Makanan'],
        ['kategori_nama' => 'Minuman'],
        ['kategori_nama' => 'Snack'],
        ['kategori_nama' => 'Elektronik'],
        ['kategori_nama' => 'ATK']
    ]);
}
}
