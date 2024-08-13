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
            $table->string('dName');
            $table->string('insurance_id'); 
            $table->date('validity');
            $table->string('incharge'); 
            $table->string('RTitle'); 
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('RTitle')->references('RTitle')->on('roads')->onDelete('cascade');
            $table->foreign('dName')->references('dName')->on('drivers')->onDelete('cascade');
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