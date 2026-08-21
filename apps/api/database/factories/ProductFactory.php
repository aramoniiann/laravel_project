<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->sentences(asText: true),
            'price' => fake()->randomFloat(2, 10, 1000),
            'stock' => fake()->numberBetween(0, 100),
            'position' => 0,
            'enabled' => fake()->boolean()
        ];
    }
}
