<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // product seeder
        $product = [

            // Electonic
            [
                'nama' => 'Fridge',
                'harga' => '15000000',
                'description' => 'Product Bagus Dan Masih Mulus',
                'stok' => '1200',
                'category_id' => 2,
                'image' => 'fridge.jpg',
            ],
            [
                'nama' => 'Handphone',
                'harga' => '55000000',
                'description' => 'Product Bagus Dan Masih Mulus',
                'stok' => '3200',
                'category_id' => 2,
                'image' => 'handphone.jpg',
            ],
            [
                'nama' => 'Laptop',
                'harga' => '10999000',
                'description' => 'Product Bagus Dan Masih Mulus',
                'stok' => '1300',
                'category_id' => 2,
                'image' => 'laptop.jpg',
            ],
            [
                'nama' => 'Mesin Cuci',
                'harga' => '15999000',
                'description' => 'Product Bagus Dan Masih Mulus',
                'stok' => '500',
                'category_id' => 2,
                'image' => 'mesincuci.jpg',
            ],
            [
                'nama' => 'Tv',
                'harga' => '20999000',
                'description' => 'Product Bagus Dan Masih Mulus',
                'stok' => '1500',
                'category_id' => 2,
                'image' => 'tv.jpg',
            ],

            // Fashion

            [
                'nama' => 'Black Shirt',
                'harga' => '50000',
                'description' => 'Product Bagus Dan Masih Mulus',
                'stok' => '12500',
                'category_id' => 1,
                'image' => 'black_shirt.jpg',
            ],
            [
                'nama' => 'Hoodie Girl',
                'harga' => '100000',
                'description' => 'Product Bagus Dan Masih Mulus',
                'stok' => '1700',
                'category_id' => 1,
                'image' => 'hoodie_girl.jpg',
            ],
            [
                'nama' => 'Summer Dress',
                'harga' => '250000',
                'description' => 'Product Bagus Dan Masih Mulus',
                'stok' => '500',
                'category_id' => 1,
                'image' => 'summer_dress.jpg',
            ],
        ];

        foreach($product as $value) {
            Product::insert($value);
        }
    }
}
