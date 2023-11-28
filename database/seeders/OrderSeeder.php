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

        Order::create([
            'user_id' => $user->id,
            'product_id' => 1,
            'size_id' => ProductSize::L,
            'address_id' => $user->addresses()->first()->id,
            'qty' => 2,
            'gross_amount' => 2 * $product->price,
            'note' => 'dikirim yang cepet yaa...',
            'status' => 'unpaid'
        ]);
    }
}
