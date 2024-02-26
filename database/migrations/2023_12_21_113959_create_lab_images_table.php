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
        Schema::create('lab_images', function (Blueprint $table) {
            $table->id();
            $table->string('Logo');       
            $table->string('LetterHeadHeader');
            $table->string('NonNABLLetterHead');
            $table->string('Letter Head Footer');
            $table->string('Stamp');
            $table->string('NABLLogo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_images');
    }
};
