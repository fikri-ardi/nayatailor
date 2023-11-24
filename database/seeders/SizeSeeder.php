<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = collect(['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL']);
        $sizes->each(fn ($size) => Size::create(['name' => $size]));
    }
}
