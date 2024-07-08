<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'father' => fake()->name(),
            'dob' => fake()->date(),
            'address' => fake()->address(),
            'details' => 'details',
            'bial_id' => \App\Models\Bial::factory()
        ];
    }
}
