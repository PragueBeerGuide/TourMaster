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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->longText('description');
            $table->longText('highlights');
            $table->string('meeting_point');
            $table->longText('inclusions')->nullable();
            $table->string('image_link')->nullable();	
            $table->boolean('is_private')->comment('true for private tours, false for join-in tours')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
