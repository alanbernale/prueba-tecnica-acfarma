<?php

namespace Database\Factories;

use App\Models\Factura;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FacturaDetalle>
 */
class FacturaDetalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'factura_id' => Factura::inRandomOrder()->first()->id,
            'producto_id' => Producto::inRandomOrder()->first()->id,
            'costo_unitario' => fake()->randomFloat(2, 0, 100),
            'cantidad' => fake()->randomNumber(),
            'total' => fake()->randomFloat(2, 0, 100),
        ];
    }
}
