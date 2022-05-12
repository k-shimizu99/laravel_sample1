<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Text>
 */
class TextFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->name,
            'content' => $this->faker->realText,
            'email' => $this->faker->email,
            'price' => $this->faker->numberBetween(100, 10000),
            'user_id' => $this->faker->numberBetween(1, 3),
            'is_visible' => $this->faker->boolean
        ];
    }
}
