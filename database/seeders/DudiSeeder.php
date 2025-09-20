<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dudi;

class DudiSeeder extends Seeder
{
    public function run()
    {
        $dudiData = [
            [
                'nama_dudi' => 'Mitra Karya Tulungagung',
                'alamat_dudi' => 'Jl. Pacitan no 22 Sumbergempol Tulungagung',
                'no_telp' => '085815579285',
                'jenis_usaha' => 'Bengkel Bulout',
                'nama_pimpinan' => 'Surajj',
                'kuota' => 4,
                'terisi' => 0,
                'status' => 'tersedia'
            ],
            [
                'nama_dudi' => 'CV Teknologi Indonesia',
                'alamat_dudi' => 'Jl. Merdeka No. 45, Blitar',
                'no_telp' => '085123456789',
                'jenis_usaha' => 'Teknologi Informasi',
                'nama_pimpinan' => 'Budi Santoso',
                'kuota' => 10,
                'terisi' => 3,
                'status' => 'tersedia'
            ],
            [
                'nama_dudi' => 'PT Jaya Abadi Elektronik',
                'alamat_dudi' => 'Jl. Diponegoro No. 78, Blitar',
                'no_telp' => '085987654321',
                'jenis_usaha' => 'Elektronik',
                'nama_pimpinan' => 'Dewi Anggraeni',
                'kuota' => 8,
                'terisi' => 8,
                'status' => 'penuh'
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        foreach ($dudiData as $data) {
            Dudi::create($data);
        }
    }
}