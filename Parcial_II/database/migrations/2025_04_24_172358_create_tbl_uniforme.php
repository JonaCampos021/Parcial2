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
        Schema::create('tbl_uniforme', function (Blueprint $table) {
            $table->id();
            $table->string('Equipo_uni');
            $table->string('Talla_uni');
            $table->string('Marca_uni');
            $table->string('Tipo_uni');
            $table->double('Precio_uni');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_uniforme');
    }
};
