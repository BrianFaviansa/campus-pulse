<?php

namespace Database\Seeders;

use App\Models\Partnership;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partnership::create([
            'nama' => 'Dicoding',
            'link' => 'https://www.dicoding.com/'
        ]);

        Partnership::create([
            'nama' => 'Codepolitan',
            'link' => 'https://www.codepolitan.com/'
        ]);
    }
}
