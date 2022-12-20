<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  ojo con la mayuscula al principio de publicaciones
        \App\Models\Publicaciones::factory(500)->create();
    }
}
