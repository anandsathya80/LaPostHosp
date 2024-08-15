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
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('identity_number');
            $table->string('phone_number');
            $table->string('address');
            $table->foreignUuid('sex_id')->references('id')->on('sexs')->onDelete('cascade');
            $table->foreignUuid('blood_type_id')->references('id')->on('blood_types')->onDelete('cascade');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
