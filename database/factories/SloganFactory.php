<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slogan>
 */
class SloganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slogan' => fake()->sentence(),
            'deskripsi' => fake()->sentence(40),
            'gambar' => 'https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg',
        ];
    }
}
