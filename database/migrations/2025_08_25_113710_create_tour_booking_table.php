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
        Schema::create('tour_booking', function (Blueprint $table) {
            $table->id();
            $table->integer('tour_id'); // ← signed int にする
            $table->foreign('tour_id')
                ->references('id')
                ->on('tours')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('itinerary_id'); // ← signed int にする
            $table->foreign('itinerary_id')
                ->references('id')
                ->on('itineraries')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('customer_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer("youth_number");
            $table->integer("youth_price");
            $table->integer("adult_number");
            $table->integer("adult_price");
            $table->text("request")->nullable();
            $table->date("tour_date");

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_booking');
    }
};
