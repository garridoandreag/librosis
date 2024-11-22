<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('CREATE TABLE IF NOT EXISTS librosis.Genero (
            idGenero INT NOT NULL AUTO_INCREMENT,
            Nombre VARCHAR(45) NOT NULL,
            Estado SET("ACTIVO", "INACTIVO") NOT NULL,
            PRIMARY KEY (idGenero))
          ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genero');
    }
};
