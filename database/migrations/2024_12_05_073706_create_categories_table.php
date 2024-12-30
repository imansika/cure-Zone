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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Patient Name
            $table->integer('age')->nullable();
            $table->integer('contact')->nullable(); // Contact Number
            $table->string('description')->nullable(); // Address
            $table->string('specialty')->nullable();// Specialty
            $table->date('date')->nullable(); // Appointment Date
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
