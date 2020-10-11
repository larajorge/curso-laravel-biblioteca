<?php

namespace Database\Seeders;

use App\Models\Admin\Permiso;
use Illuminate\Database\Seeder;


class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //factory(Permiso::class)->create();
        Permiso::factory(50)->create();
    }
}
