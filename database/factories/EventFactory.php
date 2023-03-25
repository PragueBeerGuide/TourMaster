<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day' => fake()->date(),
            'hour' => fake()->time(),
            'duration' => fake()->time(),
            'tour_id' => random_int(1, 4),
            'price' => random_int(40, 2800),
            'capacity' => random_int(10, 30),
        ];
    }
}
