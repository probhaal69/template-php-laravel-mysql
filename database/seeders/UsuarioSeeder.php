<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  ojo con la mayuscula al principio de usuarios
        \App\Models\Usuario::factory(50)->create();
    }
}
