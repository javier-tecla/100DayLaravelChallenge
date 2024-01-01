<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(2),
            'excerpt' => fake()->text(),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 10, 100),
            'stock' => fake()->numberBetween(0, 100),
        ];
    }
}
