<?php

namespace Database\Factories;

use Faker\Generator;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $faker = \Faker\Factory::create('es_ES');

        return [
            'nombre' => $faker->name(),
            'apellido' => $faker->lastName(),
            'tipo' => 'person', 
            'nit' => $faker->randomNumber(8, true), 
            'correo_electronico' => $faker->unique()->safeEmail(),
            'direccion' => $faker->address(), 
            'ciudad' => $faker->city(),
            'pais' => 'Guatemala', 
            'estado' => 'ACTIVO', 
            'fecha_creacion' => \Carbon\Carbon::now(),
            'fecha_modificacion' => \Carbon\Carbon::now(),
        ];
    }
}
