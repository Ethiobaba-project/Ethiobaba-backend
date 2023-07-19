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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('manufacturer')->nullable();
            $table->string('model')->nullable();
            $table->integer('year')->nullable();
            $table->integer('mileage')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('color')->nullable();
            $table->string('body_type')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('transmission')->nullable();
            $table->decimal('engine_size', 5, 2)->nullable();
            $table->string('condition')->nullable();
            $table->string('location')->nullable();
            $table->text('features')->nullable();
            $table->text('description')->nullable();
            $table->string('seller_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
