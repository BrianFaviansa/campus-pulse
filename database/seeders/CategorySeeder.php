<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoris = [
            [
                'nama'=>'Teknologi',
            ],
            [
                'nama'=>'Akademik',
            ],
            [
                'nama'=>'Budaya',
            ],
            [
                'nama'=>'Kesehatan'
            ],
            [
                'nama'=>'Sosial',
            ],

        ];

        foreach ($kategoris as $key => $value) {
            Category::create($value);
        }
    }
}
