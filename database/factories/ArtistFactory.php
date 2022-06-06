<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->imageUrl(640, 480, 'artist'),
            'tags' => 'Rap, Hip-Hop',
            'country' => $this->faker->country(),
            'website' => $this->faker->domainName(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
