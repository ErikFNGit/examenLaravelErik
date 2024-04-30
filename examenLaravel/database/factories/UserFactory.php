<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Faker;
use Illuminate\Support\Str;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = User::class;

    public function definition(): array
    {
        return [
            'nick' => 'admin',
            'password' => '$2a$12$.aUJW/7dmfJybD7mnfD1tumAy9smLIRr6NRuC.p.oVmc6XK.n8F6a',
        ];
    }
}
