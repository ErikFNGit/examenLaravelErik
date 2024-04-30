<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Faker;
use Illuminate\Support\Str;
use App\Models\Casal;
use App\Models\Ciutat;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ciutat>
 */
class CiutatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->name(),
            'nHabitants'=>fake()->randomNumber(5, true),
        ];
    }
}
