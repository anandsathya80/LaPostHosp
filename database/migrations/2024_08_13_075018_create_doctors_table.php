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
        Schema::create('doctors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->foreignUuid('sex_id')->references('id')->on('sexs')->onDelete('cascade');
            $table->foreignUuid('division_id')->references('id')->on('divisions')->onDelete('cascade');
            $table->foreignUuid('doctor_type_id')->references('id')->on('doctor_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
