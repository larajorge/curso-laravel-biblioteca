<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'roles',
            'permisos'
        ]);

        $this->call(RolesSeeder::class);
        $this->call(PermisosSeeder::class);
    }

    protected function truncateTablas(array $tablas)
    {
        //es un metodo protegido para truncar las tablas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); //desabilita las llaves foraneas
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');//abilita la BD.
    }
}
