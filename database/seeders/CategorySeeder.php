<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $category = [
            [
                'nama_kategori' => 'Fashion',
            ],
            [
                'nama_kategori' => 'Electronic',
            ]
        ];

        foreach ($category as $value) {
            Category::insert($value);
        }
    }
}
