<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Detail untuk Penjualan 1 (PJ001)
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 50000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 30000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 25000, 'jumlah' => 3, 'created_at' => now(), 'updated_at' => now()],
            
            // Detail untuk Penjualan 2 (PJ002)
            ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 75000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 2, 'barang_id' => 5, 'harga' => 45000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 20000, 'jumlah' => 4, 'created_at' => now(), 'updated_at' => now()],
            
            // Detail untuk Penjualan 3 (PJ003)
            ['penjualan_id' => 3, 'barang_id' => 7, 'harga' => 60000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 55000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 10000, 'jumlah' => 5, 'created_at' => now(), 'updated_at' => now()],
        
            // Detail untuk Penjualan 4 (PJ004)
            ['penjualan_id' => 4, 'barang_id' => 10, 'harga' => 90000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 4, 'barang_id' => 11, 'harga' => 35000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 4, 'barang_id' => 12, 'harga' => 15000, 'jumlah' => 3, 'created_at' => now(), 'updated_at' => now()],
        
            // Detail untuk Penjualan 5 (PJ005)
            ['penjualan_id' => 5, 'barang_id' => 13, 'harga' => 30000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 5, 'barang_id' => 14, 'harga' => 20000, 'jumlah' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 5, 'barang_id' => 15, 'harga' => 75000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
        
            // Detail untuk Penjualan 6 (PJ006)
            ['penjualan_id' => 6, 'barang_id' => 1, 'harga' => 50000, 'jumlah' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 6, 'barang_id' => 3, 'harga' => 25000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 6, 'barang_id' => 5, 'harga' => 45000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
        
            // Detail untuk Penjualan 7 (PJ007)
            ['penjualan_id' => 7, 'barang_id' => 7, 'harga' => 60000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 7, 'barang_id' => 9, 'harga' => 10000, 'jumlah' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 7, 'barang_id' => 11, 'harga' => 35000, 'jumlah' => 3, 'created_at' => now(), 'updated_at' => now()],
        
            // Detail untuk Penjualan 8 (PJ008)
            ['penjualan_id' => 8, 'barang_id' => 13, 'harga' => 30000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 8, 'barang_id' => 15, 'harga' => 75000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 8, 'barang_id' => 2, 'harga' => 30000, 'jumlah' => 5, 'created_at' => now(), 'updated_at' => now()],
        
            // Detail untuk Penjualan 9 (PJ009)
            ['penjualan_id' => 9, 'barang_id' => 4, 'harga' => 75000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 9, 'barang_id' => 6, 'harga' => 20000, 'jumlah' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 9, 'barang_id' => 8, 'harga' => 55000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
        
            // Detail untuk Penjualan 10 (PJ010)
            ['penjualan_id' => 10, 'barang_id' => 10, 'harga' => 90000, 'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 10, 'barang_id' => 12, 'harga' => 15000, 'jumlah' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 10, 'barang_id' => 14, 'harga' => 20000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
        ];
        
        DB::table('t_penjualan_detail')->insert($data);
        
    }
}
