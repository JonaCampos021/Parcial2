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
        Schema::create('tbl_vneta_cami', function (Blueprint $table) {
            $table->id();
            $table->string('Cantidad_cami');
            $table->integer('fkCamisas');
            $table->foreign('fkCamisas')->references('id')->on('tbl_camisetas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_vneta_cami');
    }
};
