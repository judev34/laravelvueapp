<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'content' => $this->faker->sentence(15, true),
            'author' => $this->faker->firstName().' '.$this->faker->lastName()
        ];
    }
}
