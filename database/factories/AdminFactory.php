<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'super admin',
            'email' => 'shadow902@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Welc0me!1225'),
            'remember_token' => Str::random(10),
        ];
    }
}
