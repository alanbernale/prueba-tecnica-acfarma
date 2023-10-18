<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factura>
 */
class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id' => Cliente::inRandomOrder()->first()->id,
            'total' => fake()->randomFloat(2, 0, 100),
            'fecha' => fake()->date(),
            'observacion' => fake()->paragraph(),
        ];
    }
}
