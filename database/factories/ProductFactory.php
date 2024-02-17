<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $totalUser = count(User::get(["id"]));

        return [
            'user_id' => mt_rand(1, $totalUser),
            'name' => $this->faker->sentence(3),
            'detail' => $this->faker->text(),
            'price' => $this->faker->numberBetween(100000, 200000),
            'stock' => $this->faker->numberBetween(100, 200)
        ];
    }
}
