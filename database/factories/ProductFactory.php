<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(rand(6,7), true),
            'image' => $this->faker->imageUrl(),
            'price' => rand(1000, 15000),
            'is_active' => $this->faker->boolean(80)
        ];
    }
}
