<?php

namespace Database\Factories;

use App\Models\Continent;
use App\Models\Difficulty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(2),
            'spoken_by' => rand(1000,10000000),
            'continent_id' => Continent::factory(),
            'difficulty_id' => Difficulty::factory()
        ];
    }
}
