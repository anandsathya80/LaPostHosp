<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_medicines', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('medical_check_id')->references('id')->on('medical_checks')->onDelete('cascade');
            $table->foreignUuid('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->integer('qty');
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_medicines');
    }
};
