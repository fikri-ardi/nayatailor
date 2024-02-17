<?php

namespace Database\Seeders;

use App\Enums\ProductSize;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        $product = Product::first();
        $qty = 1;

        Order::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'size_id' => ProductSize::L,
            'address_id' => $user->addresses()->first()->id,
            'qty' => $qty,
            'gross_amount' => $qty * $product->price,
            'note' => 'dikirim yang cepet yaa...',
            'status' => 'unpaid'
        ]);
    }
}
