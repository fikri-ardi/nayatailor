<?php

namespace Database\Seeders;

use App\Enums\ProductSize;
use App\Models\Cart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::create([
            'user_id' => 1,
            'product_id' => 1,
            'size_id' => ProductSize::XL,
            'qty' => 2
        ]);
    }
}