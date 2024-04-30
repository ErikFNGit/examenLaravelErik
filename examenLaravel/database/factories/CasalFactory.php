<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Faker;
use Illuminate\Support\Str;
use App\Models\Casal;
use App\Models\Ciutat;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Casal>
 */
class CasalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'dataInici' => fake()->date(),
            'dataFinal'=>fake()->dateTimeInInterval('-1 week', '+2 week'),
            'nPlaces'=>fake()->numberBetween(0,30),
            'ciutatId' => Ciutat::inRandomOrder()->first()->id,
        ];
    }
}
