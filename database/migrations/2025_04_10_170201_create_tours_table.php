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
            
            // Basic Information
            $table->string('title');
            $table->string('subtitle');
            $table->string('badge')->nullable();
            $table->integer('duration_days');
            $table->integer('duration_nights');
            $table->string('start_location');
            $table->string('end_location');
            $table->string('destinations');
            $table->string('languages');
            $table->integer('min_participants');
            $table->integer('max_participants');
            
            // Pricing Information
            $table->string('currency', 5); // ¥, $, €, etc.
            $table->decimal('price', 10, 2);
            $table->integer('discount_percentage')->default(0);
            $table->string('accommodation');
            $table->string('departure_dates');
            $table->string('limited_spots')->nullable();
            
            // Tour Description
            $table->text('overview');
            $table->json('highlights'); // Store highlights as JSON array
            
            // Itinerary Details
            $table->json('itinerary'); // Store itinerary as JSON array of day objects
            
            // Inclusions & Exclusions
            $table->json('inclusions'); // Store inclusions as JSON array
            $table->json('exclusions'); // Store exclusions as JSON array
            
            // Tour Images
            $table->string('hero_image');
            $table->json('gallery_images'); // Store gallery image paths as JSON array
            
            // General columns
            $table->boolean('is_active')->default(true);
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
