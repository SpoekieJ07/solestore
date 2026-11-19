<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Sneaker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sneaker>
 */
class SneakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'colorway' => fake()->words(2, true),
            'release_year' => fake()->numberBetween(1980, now()->year),
            'description' => fake()->sentence(),
            'brand_id' => Brand::factory(),
        ];
    }
}
