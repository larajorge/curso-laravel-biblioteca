<?php

namespace Database\Factories;

use App\Models\Permiso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PermisoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Permiso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'slug' => $this->faker->word,
            //'email' => $this->faker->unique()->safeEmail,
        ];
    }
}

//https://www.youtube.com/watch?v=X-FmK4few8A

//php -S localhost:8000 -t public/

//gitlab@gitlab.grupozoom.com:lsanchez/facanguro.git
//gitlab@gitlab.grupozoom.com:lsanchez/login.git

