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
        Schema::create('tbl_venta_balon', function (Blueprint $table) {
            $table->id();
            $table->string('Cantidad_bal');
            $table->integer('fkBalon');
            $table->foreign('fkBalon')->references('id')->on('tbl_balones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_venta_balon');
    }
};
