<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HobbyFactory extends Factory
{
    public function definition(): array
    {
        $hobbies = [
            ['emoji' => '🎸🎹', 'name' => 'Playing Music', 'color_class' => 'text-blue-800'],
            ['emoji' => '🎧', 'name' => 'Listening to Music', 'color_class' => 'text-purple-700'],
            ['emoji' => '🏸', 'name' => 'Badminton', 'color_class' => 'text-amber-700'],
            ['emoji' => '🏊', 'name' => 'Swimming', 'color_class' => 'text-green-700'],
            ['emoji' => '😴', 'name' => 'Sleep', 'color_class' => 'text-red-600'],
            ['emoji' => '💃', 'name' => 'Dancing', 'color_class' => 'text-pink-700'],
        ];

        return $this->faker->randomElement($hobbies);
    }
}
