<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'price'=>$this->faker->randomNumber(5),
            'squer_feet'=>$this->faker->randomNumber(5),
            'no_of_bedrooms'=>$this->faker->randomNumber(1),
            'no_of_bathrooms'=>$this->faker->randomNumber(1),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
