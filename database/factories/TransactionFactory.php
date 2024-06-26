<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => User::factory(),
            'id_event' => Event::factory(),
            'quantity' => fake()->randomNumber(1),
            'proof' => fake()->image("C:\laragon\www\myproject\web_pemesanan_tiket_stadium\public\assets\img\uploads",640,480,null,false),
        ];
    }

    public function valid(): static
    {
        return $this->state(fn (array $attributes) => [
            'isValid' => true,
        ]);
    }
}
