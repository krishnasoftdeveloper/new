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
        Schema::create('vehicledetails_news', function (Blueprint $table) {
            $table->id();
            $table->string('Vehicle');       
            $table->string('Vehical_model');
            $table->string('Avg_per_ltr');
            $table->string('Purchase_year');
            $table->string('TypeOFVehicle');
            $table->string('Capacity');
            $table->string('status');
            $table->string('Type');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicledetails_news');
    }
};
