<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_event' => Event::factory(),
            'ticket_type' => 'reguler',
            'price' => (fake()->randomNumber(2))*50000,
            'quota' => fake()->randomNumber(3),
        ];
    }

    public function vip(): static
    {
        return $this->state(fn (array $attributes) => [
            'ticket_type' => "vip",
            'price' => (fake()->randomNumber(2))*100000,
        ]);
    }
}
