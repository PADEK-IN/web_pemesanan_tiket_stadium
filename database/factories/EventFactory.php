<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => fake()->sentence(4),
            'description' => fake()->sentence(10),
            'id_category' => Category::factory(),
            'image' => fake()->image("C:\laragon\www\myproject\web_pemesanan_tiket_stadium\public\assets\img\\event",640,480,null,false),
            'schedule' => fake()->dateTimeBetween("now", "+1 months")->format('Y-m-d H:i:s'),
            'price' => (fake()->randomNumber(2))*50000,
            'quota' => fake()->randomNumber(3),
        ];
    }
}
