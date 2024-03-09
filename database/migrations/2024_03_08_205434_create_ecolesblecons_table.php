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
        Schema::create('ecolesblecons', function (Blueprint $table) {
            $table->id();
            $table->string('pays');
            $table->string('promotion');
            $table->string('section');
            $table->string('orientation');
            $table->string('cours');
            $table->string('chapitre');
            $table->string('titre');
            $table->string('fichier');
            $table->string('partie');
            $table->string('chemin');
            $table->string('profeseur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecolesblecons');
    }
};
