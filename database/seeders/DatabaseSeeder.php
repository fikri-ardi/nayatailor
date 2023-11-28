<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Role;
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
            CartSeeder::class,
            OrderSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
