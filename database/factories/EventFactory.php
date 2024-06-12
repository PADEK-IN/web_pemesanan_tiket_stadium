<?php

namespace Database\Factories;

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
            'title' => fake()->sentence(4),
            'description' => fake()->sentence(10),
            'image' => fake()->image("C:\laragon\www\myproject\web_pemesanan_tiket_stadium\public\assets\img\uploads",640,480,null,false),
            'date' => fake()->dateTimeBetween("now", "+3 months")->format('Y-m-d'),
            'time' => fake()->time("H:i"),
        ];
    }
}
