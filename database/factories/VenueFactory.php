<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'image' => $this->faker->randomElement(['https://goout.net/i/034/343405-383.jpg', 'https://goout.net/i/039/394358-383.jpg', 'https://goout.net/i/086/864564-383.jpg']),
            'category' => $this->faker->randomElement(['Cinemas', 'Clubs', 'Theatres', 'Galleries', 'Museums', 'Arenas', 'Conference centres', 'Sports venues', 'Outdoors']),
            'address' => $this->faker->streetName() . ' ' . $this->faker->buildingNumber() . ', ' . $this->faker->city(),
            'website' => $this->faker->domainName(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
