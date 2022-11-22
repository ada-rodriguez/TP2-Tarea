<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\Venta;

class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo'=>$this->faker->bothify('???-###-#####'),
            'nombre_cliente'=>$this->faker->firstName().$this->faker->lastName(),
            'nombre_empleado'=>$this->faker->firstName().$this->faker->lastName(),
            'pruducto'=>$this->faker->randomElement(['brocha', 'base', 'fijador',
                                             'gotas', 'desmaquillante', 'sombras']),
            'fecha'=>$this->faker->date(),
            'formaDePago'=>$this->faker->text()
        ];
    }
}
