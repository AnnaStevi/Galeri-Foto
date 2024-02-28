<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap'      => 'SteviAnna',
            'email'      => 'Steviana11@gmail.com',
            'username'  => 'Anna',
            'alamat'      => 'Jakarta',
            'password' => bcrypt('123'),
        ]);
        User::create([
            'nama_lengkap'      => 'Wulandari',
            'email'      => 'wulandari33@gmail.com',
            'username'  => 'Wulan',
            'alamat'      => 'Jepang',
            'password' => bcrypt('1234'),
        ]);
    }
}
