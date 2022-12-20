<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //factory para crear usuarios
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'f_nacimiento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
