<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->createMany([
            ['name' => 'iPhone 15', 'description' => 'Apple akıllı telefon', 'price' => 42999],
            ['name' => 'Samsung Galaxy S24', 'description' => 'Android amiral gemisi', 'price' => 35999],
            ['name' => 'AirPods Pro', 'description' => 'Kablosuz kulaklık', 'price' => 8999],
        ]);
    }
}
