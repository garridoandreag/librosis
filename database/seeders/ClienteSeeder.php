<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('cliente')->insert([
            'nombre' => 'Consumidor',
            'apellido' => 'Final',
            'tipo' => 'Persona',
            'nit' => 'CF',
            'correo_electronico' => 'N/A',
            'direccion' => 'N/A',
            'ciudad' => 'N/A',
            'pais' => 'N/A',
            'estado' => 'ACTIVO',
            'fecha_creacion' => \Carbon\Carbon::now(),
            'fecha_modificacion' => \Carbon\Carbon::now(),
        ]);

        // Cliente::factory()->count(10)->create();

        $faker = \Faker\Factory::create('es_ES');

        for ($i = 1; $i <= 50; $i++){
            DB::table('cliente')->insert([
                'nombre' => $faker->firstName(),
                'apellido' => $faker->lastName(),
                'tipo' => 'Persona', 
                'nit' => $faker->randomNumber(8, true), 
                'correo_electronico' => $faker->unique()->safeEmail(),
                'direccion' => $faker->address(), 
                'ciudad' => $faker->city(),
                'pais' => 'Guatemala', 
                'estado' => 'ACTIVO', 
                'fecha_creacion' => \Carbon\Carbon::now(),
                'fecha_modificacion' => \Carbon\Carbon::now(),
            ]);
        }



    }
}
