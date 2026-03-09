<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    for($i=1; $i<=15; $i++){
        DB::table('m_barang')->insert([
            'kategori_id' => rand(1,5),
            'supplier_id' => rand(1,3),
            'barang_nama' => 'Barang '.$i,
            'harga' => rand(5000,50000)
        ]);
    }
}
}