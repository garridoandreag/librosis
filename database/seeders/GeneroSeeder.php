<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        DB::table('genero')->insert([ 'nombre' => 'Ficción',
            'estado' => 'ACTIVO',
            'fecha_creacion' => \Carbon\Carbon::now(),
            'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);

                
        DB::table('genero')->insert([ 'nombre' => 'Drama',
        'estado' => 'ACTIVO',
        'fecha_creacion' => \Carbon\Carbon::now(),
        'fecha_modificacion' => \Carbon\Carbon::now(),
            ]);


        DB::table('genero')->insert([ 'nombre' => 'Procesamiento de señales',
            'estado' => 'ACTIVO',
            'fecha_creacion' => \Carbon\Carbon::now(),
            'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('genero')->insert([ 'nombre' => 'Ciencia de datos',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('genero')->insert([ 'nombre' => 'Matemáticas',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('genero')->insert([ 'nombre' => 'Economía',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('genero')->insert([ 'nombre' => 'Historia',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('genero')->insert([ 'nombre' => 'Ciencia',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('genero')->insert([ 'nombre' => 'Psicología',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);

        DB::table('genero')->insert([ 'nombre' => 'Informática',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('genero')->insert([ 'nombre' => 'No ficcion',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('genero')->insert([ 'nombre' => 'Filosofía',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
        DB::table('genero')->insert([ 'nombre' => 'Cómic',
                    'estado' => 'ACTIVO',
                    'fecha_creacion' => \Carbon\Carbon::now(),
                    'fecha_modificacion' => \Carbon\Carbon::now(),
                ]);
    }
}
