<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetalleVenta>
 */
class DetalleVentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cantidad' => $this->faker->numberBetween(1, 10),
            'precio' => $this->faker->numberBetween(1, 100),
            'descuento' => $this->faker->numberBetween(1, 100),
            //
        ];
    }
}
