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
            'name' => 'Skecher Uno Lite',
            'detail' => 'Perbarui gaya Anda dengan Skechers Basic White Uno Lite: di mana kesan sporty bertemu dengan kesan elegan dalam setiap langkah.',
            'price' => 100000,
            'stock' => 137
        ]);
    }
}
