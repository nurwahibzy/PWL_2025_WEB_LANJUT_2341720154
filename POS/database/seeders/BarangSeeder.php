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
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'ELK001',
                'barang_nama' => 'Smartphone XYZ',
                'harga_beli' => 2500000,
                'harga_jual' => 3000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'ELK002',
                'barang_nama' => 'Laptop ABC',
                'harga_beli' => 7000000,
                'harga_jual' => 8500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'ELK003',
                'barang_nama' => 'Headphone Wireless',
                'harga_beli' => 500000,
                'harga_jual' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'ELK004',
                'barang_nama' => 'Smart TV 50 Inch',
                'harga_beli' => 5000000,
                'harga_jual' => 6000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'ELK005',
                'barang_nama' => 'Kamera DSLR',
                'harga_beli' => 4000000,
                'harga_jual' => 4500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            // Barang dari CV. Pakaian Indah
            [
                'kategori_id' => 2,
                'barang_kode' => 'PKN001',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 40000,
                'harga_jual' => 60000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PKN002',
                'barang_nama' => 'Jaket Hoodie',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PKN003',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 120000,
                'harga_jual' => 180000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PKN004',
                'barang_nama' => 'Kemeja Flanel',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PKN005',
                'barang_nama' => 'Sepatu Sneakers',
                'harga_beli' => 250000,
                'harga_jual' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            // Barang dari UD. Makanan Sehat
            [
                'kategori_id' => 3,
                'barang_kode' => 'MKN001',
                'barang_nama' => 'Beras Organik 5kg',
                'harga_beli' => 60000,
                'harga_jual' => 80000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MKN002',
                'barang_nama' => 'Madu Murni 1L',
                'harga_beli' => 70000,
                'harga_jual' => 90000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MKN003',
                'barang_nama' => 'Susu Almond',
                'harga_beli' => 30000,
                'harga_jual' => 45000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MKN004',
                'barang_nama' => 'Minyak Zaitun 500ml',
                'harga_beli' => 50000,
                'harga_jual' => 70000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MKN005',
                'barang_nama' => 'Kopi Organik 250gr',
                'harga_beli' => 40000,
                'harga_jual' => 55000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        DB::table('m_barang')->insert($data);
        
    }
}
