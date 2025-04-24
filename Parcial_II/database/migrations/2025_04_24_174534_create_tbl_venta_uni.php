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
        Schema::create('tbl_venta_uni', function (Blueprint $table) {
            $table->id();
            $table->string('Cantidad_uni');
            $table->integer('fkUniformes');
            $table->foreign('fkUniformes')->references('id')->on('tbl_uniforme');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_venta_uni');
    }
};
