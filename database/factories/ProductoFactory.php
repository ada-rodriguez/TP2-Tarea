<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\Producto;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo'=>$this->faker->bothify('###-#####-####-#'),
            'nombre'=>$this->faker->randomElement(['brocha', 'base', 'fijador',
                                                'gotas', 'desmaquillante', 'sombras']),
            'precio'=>$this->faker->randomFloat(2, 1, 100 ),
            'inventario'=>$this->faker->randomFloat(),
            'descripcion'=>$this->faker->text()
        ];
    }
}
