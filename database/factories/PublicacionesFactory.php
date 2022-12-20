<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublicacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //factory para crear publicaciones
            'usuario_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'titulo' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'publicacion' => $this->faker->sentence($nbWords = 10, $variableNbWords = true),
            'fecha' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
