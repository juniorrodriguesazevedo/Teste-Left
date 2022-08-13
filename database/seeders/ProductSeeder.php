<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Services\ProductService;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = ProductService::listProducts();

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
