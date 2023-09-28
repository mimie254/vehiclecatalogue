<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->name,
            'make' => $this->faker->word,
            'model' => $this->faker->words(2, true),
            'description' => $this->faker->sentence,
            'year_of_manufacture' => (string) $this->faker->year,

        ];
    }
}
