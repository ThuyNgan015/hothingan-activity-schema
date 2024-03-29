<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $products = [
        //     ['name' => 'Book', 'price' => 100],
        //     ['name' => 'pen', 'price' => 100],
        //     ['name' => 'book', 'price' => 333],
        //     ['name' => 'water', 'price' => 44],
        //     ['name' => 'TV', 'price' => 5555],
        // ];

        // foreach($products as $product){
        //     Product::create($product);
        // }

        Product::factory()->count(50)->create();
    }
}
