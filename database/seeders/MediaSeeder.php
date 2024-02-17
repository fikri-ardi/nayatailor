<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = collect([
            [
                'type' => 'image',
                'url' => 'https://down-id.img.susercontent.com/file/id-11134601-7r98z-lr3z1s5tn9s6bc'
            ],
            [
                'type' => 'image',
                'url' => 'https: //down-id.img.susercontent.com/file/id-11134207-7qula-liiwz30dp4yf8d'
            ],
        ]);
        $product = Product::first();
        $media->each(fn ($media) => $product->media()->create($media));
    }
}
