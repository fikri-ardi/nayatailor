<?php

namespace Database\Seeders;

use App\Enums\ProductSize;
use App\Models\Media;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $product = Product::create([
            'user_id' => 1,
            'name' => 'batik',
            'detail' => 'batik khas pekalongan',
            'price' => 100000,
            'stock' => 137
        ]);

        $sizes = collect([ProductSize::XL->value, ProductSize::L->value, ProductSize::M->value]);
        $sizes->each(fn ($size) => $product->sizes()->attach($size));
    }
}