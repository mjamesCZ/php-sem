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
            'image' => $this->faker->imageUrl(640, 480, 'venue'),
            'category' => $this->faker->randomElement(['Cinemas', 'Clubs', 'Theatres', 'Galleries', 'Museums', 'Arenas', 'Conference centres', 'Sports venues', 'Outdoors']),
            'address' => $this->faker->address(),
            'website' => $this->faker->domainName(),
        ];
    }
}
