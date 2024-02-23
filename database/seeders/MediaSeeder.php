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
                'url' => 'https://dynamic.zacdn.com/J2iYxTHpNkuRdOzrdaww9prpEnQ=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/skechers-7017-5319034-1.jpg'
            ],
            [
                'type' => 'image',
                'url' => 'https://dynamic.zacdn.com/SoSGvygKGQX1-Zh23SZ1CZt_B_4=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/skechers-7017-5319034-2.jpg'
            ],
            [
                'type' => 'image',
                'url' => 'https://dynamic.zacdn.com/D1dA5Kz7vFCZBJqajil1jVgeu8c=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/skechers-7017-5319034-3.jpg'
            ],
            [
                'type' => 'image',
                'url' => 'https://dynamic.zacdn.com/gyzKRoVBks1sEgEHw976gWUIAtg=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/skechers-7018-5319034-4.jpg'
            ],
        ]);
        $product = Product::first();
        $media->each(fn ($media) => $product->media()->create($media));
    }
}