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
        Schema::create('tbl_r__usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_us');
            $table->string('Apellido_us');
            $table->integer('Telefono_us');
            $table->string('Correo_us');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_r__usuarios');
    }
};
