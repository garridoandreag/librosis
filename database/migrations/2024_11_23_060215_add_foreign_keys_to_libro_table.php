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
        Schema::table('libro', function (Blueprint $table) {
            $table->foreign(['id_genero'], 'FK_Genero')->references(['id_genero'])->on('genero')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('libro', function (Blueprint $table) {
            $table->dropForeign('FK_Genero');
        });
    }
};
