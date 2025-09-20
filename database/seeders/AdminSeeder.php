<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Administrator',
            'email' => 'admin@smkislam1blitar.sch.id',
            'username' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        Admin::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@smkislam1blitar.sch.id',
            'username' => 'budi',
            'password' => Hash::make('budi123'),
        ]);
    }
}