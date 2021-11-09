<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
            'is_outstanding' => rand(0, 1),
            'is_available' => rand(0, 1),
            'price' => rand(100, 500),
            'name' => $this->faker->sentence(),
            'category_id' => rand(1, 3)

        ];
    }
}
