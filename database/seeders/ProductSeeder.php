<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder {
    public function run() {
        Product::create(['name' => 'Laptop', 'description' => 'A powerful laptop', 'sku' => 'LAP123', 'price' => 1200.99, 'category_id' => 1]);
        Product::create(['name' => 'Sofa', 'description' => 'Comfortable sofa', 'sku' => 'SOF456', 'price' => 499.99, 'category_id' => 2]);
        Product::create(['name' => 'T-shirt', 'description' => 'Cotton t-shirt', 'sku' => 'TSH789', 'price' => 19.99, 'category_id' => 3]);
    }
}