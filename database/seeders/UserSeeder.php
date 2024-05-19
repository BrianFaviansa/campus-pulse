<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama'=>'Admin1',
                'email'=>'adminCampus@gmail.com',
                'jenis_kelamin'=>'Perempuan',
                'role'=>'admin',
                'password'=>bcrypt('password')
            ],

            [
                'nama'=>'Admin2',
                'email'=>'adminCampus2@gmail.com',
                'jenis_kelamin'=>'Laki-laki',
                'role'=>'admin',
                'password'=>bcrypt('password')
            ],

            [
                'nama'=>'Bella',
                'email'=>'bellaku@gmail.com',
                'jenis_kelamin'=>'Perempuan',
                'jurusan'=>'Sistem Informasi',
                'universitas'=>'Universitas Airlangga',
                'role'=>'user',
                'password'=>bcrypt('password')
            ],
            [
                'nama'=>'Tes',
                'email'=>'tes@gmail.com',
                'jenis_kelamin'=>'Laki-laki',
                'jurusan'=>'Sistem Informasi',
                'universitas'=>'Universitas Airlangga',
                'role'=>'user',
                'password'=>bcrypt('password')
            ],

        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
