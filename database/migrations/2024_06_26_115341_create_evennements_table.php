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
        Schema::create('evennements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->date('date');
            $table->string('lieu');
            $table->string('image');
            $table->date('date_limite');
            $table->integer('nombre_de_place');
            $table->string('duree');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evennements');
    }
};
