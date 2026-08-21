<?php

namespace Database\Factories;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Customers>
 */
class CustomersFactory extends Factory
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
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'birth_date' => fake()->date(),
        ];
    }
}
