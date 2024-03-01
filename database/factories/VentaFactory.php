<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cliente' => function () {
                return \App\Models\Cliente::factory()->create()->id;
            },
            'id_trabajador' => function () {
                return \App\Models\Trabajador::factory()->create()->id;
            },
            'id_detalle_venta' => function () {
                return \App\Models\DetalleVenta::factory()->create()->id;
            },
            'comprobante' => $this->faker->word,
            'estado' => $this->faker->word,
        ];
    }
}
