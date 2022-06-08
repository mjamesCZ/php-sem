<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'image' => $this->faker->randomElement(['https://goout.net/i/093/931255-800.jpg', 'https://goout.net/i/110/1102679-800.jpg', 'https://goout.net/i/109/1098342-800.jpg']),
            'category' => $this->faker->randomElement(['Concerts', 'Plays', 'Exhibitions', 'Festivals', 'Movies', 'Culinary', 'Conferences', 'Sports events', 'Other']),
            'time' => $this->faker->dateTimeThisDecade('+2 years'),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
