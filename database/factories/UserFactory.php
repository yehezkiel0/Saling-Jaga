<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'nim' => fake()->randomNumber(8, true),
            'jenis_kelamin' => fake()->randomElement(['laki-laki', 'perempuan']),
            'email' => fake()->unique()->safeEmail(),
            'program_studi' => fake()->randomElement(['Teknologi Informasi', 'Sistem Informasi', 'Pendidikan Teknologi Informasi']),
            'password' => '12345', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
