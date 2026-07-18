<?php

namespace Database\Factories;

use App\Models\DailyPlane;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DailyPlane>
 */
class DailyPlaneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date'=> fake()->date(),
            'address'=> fake()->address(),
            'code'=> fake()->numberBetween(1000, 9999),
            'activity_id'=> fake()->numberBetween(1, 20),
            'worker_id'=> fake()->numberBetween(1, 20),
            'observations'=> fake()->text(),
        ];
    }
}
