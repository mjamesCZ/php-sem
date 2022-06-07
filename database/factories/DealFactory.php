<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deal>
 */
class DealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Basic entry',
            'stock' => $this->faker->randomNumber(4, false),
            'price' => $this->faker->randomFloat(
                2,      // decimal places
                0,      // range min
                2000    // range max
            ),
        ];
    }
}
