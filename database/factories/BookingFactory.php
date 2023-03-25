<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => random_int(1, 20),
            'event_id' => random_int(1, 20),
            'num_of_pax' => random_int(2, 10),
            'extra_hotel_pick_up' => false,
            'extra_drink_package' => false,
            'merchandise_id' => null,
        ];
    }
}
