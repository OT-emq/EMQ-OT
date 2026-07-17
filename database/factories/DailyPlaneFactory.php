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
            'fecha'=> fake()->date(),
            'direccion'=> fake()->address(),
            'codigo'=> fake()->numberBetween(1000, 9999),
            'actividad_id'=> fake()->numberBetween(1, 20),
            'trabajador_id'=> fake()->numberBetween(1, 20),
            'observaciones'=> fake()->text(),
        ];
    }
}
