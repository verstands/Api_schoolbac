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
        Schema::create('academiasections', function (Blueprint $table) {
            $table->id();
            $table->string('mail');
            $table->string('pays');
            $table->string('promotion');
            $table->string('section');
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
        Schema::dropIfExists('academiasections');
    }
};
