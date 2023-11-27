<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'product_id' => 1,
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, hic blanditiis error obcaecati quo ab quas est amet excepturi placeat.',
            'rate' => 5
        ]);
    }
}
