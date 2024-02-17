<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Media;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AddressSeeder::class,
            SizeSeeder::class,
            ProductSeeder::class,
            MediaSeeder::class,
            CartSeeder::class,
            OrderSeeder::class,
            CommentSeeder::class,
        ]);

        Product::factory()->count(10)->hasMedia()->create();

        /**
         * Mengaitkan semua Product dengan Size yang telah disediakan secara acak
         * yang mempunyai hubungan Many to many relationship
         */
        $sizes = Size::all();
        Product::all()->each(function ($product) use ($sizes) {
            $randomizedSizes = collect(range(1, count($sizes), rand(1, count($sizes) - 1)));
            $randomizedSizes->each(fn ($size) => $product->sizes()->attach($size));
        });
    }
}