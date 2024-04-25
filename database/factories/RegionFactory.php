<?php

namespace Database\Factories;

use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RegionFactory extends Factory
{
    protected $model = Region::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->unique()->randomElement([
                'Zwolle',
                'Amsterdam',
                'Rotterdam',
                'Utrecht',
                'Den Haag',
                'Groningen',
                'Maastricht',
                'Eindhoven',
                'Arnhem',
                'Nijmegen',
                'Leeuwarden',
                'Enschede',
                'Almere',
                'Lelystad',
                'Haarlem',
            ])
        ];
    }
}
