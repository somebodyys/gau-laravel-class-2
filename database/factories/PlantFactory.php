<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
 */
class PlantFactory extends Factory
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
            'description' => $this->faker->realText,
            'type' => $this->faker->word,
            'age' => $this->faker->numberBetween(1, 100),
            'height' => $this->faker->randomFloat(2, 1, 100),
            'country_id' => Country::factory(1)->create()->first()->id,
        ];
    }
}
