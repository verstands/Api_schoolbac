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
        Schema::create('answerschoolishes', function (Blueprint $table) {
            $table->id();
            $table->string('id_quiz');
            $table->string('sender');
            $table->string('text');
            $table->string('file');
            $table->string('date');
            $table->string('heure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answerschoolishes');
    }
};
