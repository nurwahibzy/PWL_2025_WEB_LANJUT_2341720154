<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'SPL001',
                'supplier_nama' => 'PT. Elektronik Jaya',
                'supplier_alamat' => 'Jl. Teknologi No. 10, Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_kode' => 'SPL002',
                'supplier_nama' => 'CV. Pakaian Indah',
                'supplier_alamat' => 'Jl. Fashion Raya No. 22, Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_kode' => 'SPL003',
                'supplier_nama' => 'UD. Makanan Sehat',
                'supplier_alamat' => 'Jl. Kuliner No. 5, Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        

        DB::table('m_supplier')->insert($data);
    }
}
