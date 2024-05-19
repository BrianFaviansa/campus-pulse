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
                'nama'=>'Technology',
            ],
            [
                'nama'=>'Academic',
            ],
            [
                'nama'=>'Culture',
            ],
            [
                'nama'=>'Health'
            ],
            [
                'nama'=>'Social',
            ],

        ];

        foreach ($kategoris as $key => $value) {
            Category::create($value);
        }
    }
}
