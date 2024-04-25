<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->unique()->randomElement([
                'McDonalds',
                'Burger King',
                'KFC',
                'Subway',
                'Pizza Hut',
                'Starbucks',
                'Dunkin Donuts',
                'Domino\'s Pizza',
                'Papa John\'s',
                'Taco Bell',
            ])
        ];
    }
}
