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
        Schema::create('crear_mas_datos', function (Blueprint $table) {
            $table->id();
            $table->string('dato1');
            $table->string('dto2');
            $table->string('dato3');
            $table->string('dato4');
            $table->text('mucho texto andele');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crear_mas_datos');
    }
};
