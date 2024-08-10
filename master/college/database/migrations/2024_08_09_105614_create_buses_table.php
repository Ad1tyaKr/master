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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('regNo');
            $table->foreignId('driver_id')->constrained('drivers');
            $table->string('insurance_id'); 
            $table->date('validity');
            $table->string('incharge'); 
            $table->foreignId('road_id')->constrained('roads'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
