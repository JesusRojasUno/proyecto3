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
        Schema::create('parcial3', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',75);//ni q te llamaras tan aca
            $table->text('descripcion');
            $table->text('historia');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcial3');
    }
};
