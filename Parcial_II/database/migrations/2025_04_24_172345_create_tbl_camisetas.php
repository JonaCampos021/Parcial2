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
        Schema::create('tbl_camisetas', function (Blueprint $table) {
            $table->id();
            $table->string('Equipo');
            $table->string('Talla');
            $table->string('Marca');
            $table->string('Tipo');
            $table->double('Precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_camisetas');
    }
};
