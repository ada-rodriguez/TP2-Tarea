<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\Empleado;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identidad'=>$this->faker->numerify('####-').
                    $this->faker->numberBetween(1957, 2005).
                    $this->faker->numerify('-#####'),
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'edad'=>$this->faker->numberBetween(18, 65),
            'genero'=>$this->faker->randomElement(['male', 'female'])
        ];
    }
}
