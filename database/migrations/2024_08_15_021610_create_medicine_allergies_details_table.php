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
        Schema::create('medicine_allergies_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('medicine_allergies_id')->references('id')->on('medicine_allergies')->onDelete('cascade');
            $table->foreignUuid('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->text('side_effect')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_allergies_details');
    }
};
