<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'usuario' => 'admin',
            'password' => bcrypt('pass123'),
            'nombre' => 'Administrador',
            'email' => 'admin@gmail.com'
        ]);

        DB::table('usuarios')->insert([
            'usuario' => 'rat',
            'password' => bcrypt('1234'),
            'nombre' => 'Roosvelt',
            'email' => 'rat@gmail.com'
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1
        ]);
    }
}
