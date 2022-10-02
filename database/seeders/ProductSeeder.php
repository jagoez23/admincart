<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Laravel',
            'cost' => 30000,
            'price' => 45000,
            'barcode' => '7501009988',
            'stock' => 1000,
            'alert' => 10,
            'category_id' => 1,
            'image' => 'curso.png'
        ]);
        Product::create([
            'name' => 'RUNNING NIKE',
            'cost' => 400000,
            'price' => 500000,
            'barcode' => '7501009911',
            'stock' => 1000,
            'alert' => 10,
            'category_id' => 2,
            'image' => 'tenis.png'
        ]);
        Product::create([
            'name' => 'IPHONE 11',
            'cost' => 3200000,
            'price' => 4000000,
            'barcode' => '7501009922',
            'stock' => 1000,
            'alert' => 10,
            'category_id' => 3,
            'image' => 'iphone11.png'
        ]);
        Product::create([
            'name' => 'PC GAMER',
            'cost' => 5000000,
            'price' => 7500000,
            'barcode' => '7501009933',
            'stock' => 1000,
            'alert' => 10,
            'category_id' => 4,
            'image' => 'pcgamer.png'
        ]);
    }
}
