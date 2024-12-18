<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50,000', '$100,000', '$80,000', '$70,000']),
            'location' => fake()->randomElement(['Remote', 'On-site']),
            'schedule' => fake()->randomElement(['Full Time', 'Part time', 'Gig']),
            'url' => fake()->url,
            'featured' => false,
        ];
    }
}
