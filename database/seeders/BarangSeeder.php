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
        DB::table('barangs')->insert([
            'kode_barang' => 'P01',
            'nama_barang' => 'Pepsodent',
            'harga_barang' => 10000,
            'deskripsi_barang' => 'Pasta Gigi Populer',
            'satuan_id' => 1,
        ]);
    }
}
