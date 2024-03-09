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
        Schema::create('courschools', function (Blueprint $table) {
            $table->id();
            $table->string('id_cours');
            $table->string('titre');
            $table->string('type');
            $table->string('fichier');
            $table->string('resume');
            $table->string('live');
            $table->string('vue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courschools');
    }
};