<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $siswas = [
            [
                'nisn' => '1234567890',
                'nama' => 'Ahmad Fauzi',
                'kelas' => 'XII RPL 1',
                'password' => Hash::make('1234567890'),
            ],
            [
                'nisn' => '0987654321',
                'nama' => 'Siti Rahayu',
                'kelas' => 'XII RPL 2',
                'password' => Hash::make('0987654321'),
            ],
            [
                'nisn' => '1122334455',
                'nama' => 'Budi Santoso',
                'kelas' => 'XII TKJ 1',
                'password' => Hash::make('1122334455'),
            ],
        ];

        foreach ($siswas as $siswa) {
            Siswa::create($siswa);
        }
    }
}