<?php

namespace Database\Seeders;

use App\Models\FacturaDetalle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacturaDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacturaDetalle::factory()->count(20)->create();
    }
}
