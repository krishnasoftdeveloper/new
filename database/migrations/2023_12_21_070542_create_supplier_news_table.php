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
        Schema::create('supplier_news', function (Blueprint $table) {
            $table->id();
            $table->string('Name');       
            $table->string('EmailId');
            $table->string('Contact_Person_MobileNo');
            $table->string('Vendor_Type');
            $table->string('Address');
            $table->string('City');
            $table->string('State');
            $table->string('Contact_Person');
            $table->string('MobileNo');
            $table->string('Contact_Person_EmailId');
            $table->string('GST_No');
            $table->string('Pan_NO');
            $table->string('State_Code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_news');
    }
};
