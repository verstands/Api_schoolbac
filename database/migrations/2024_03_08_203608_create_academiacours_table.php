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
        Schema::create('academiacours', function (Blueprint $table) {
            $table->id();
            $table->string('mail');
            $table->string('teacher');
            $table->string('cours');
            $table->string('promotion');
            $table->string('academia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academiacours');
    }
};
