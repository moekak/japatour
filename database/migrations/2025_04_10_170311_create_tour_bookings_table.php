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
        Schema::create('tour_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('tour_date_id')->nullable();
            $table->foreign('tour_date_id')->references('id')->on('tour_dates')->onDelete('set null');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone')->nullable();
            $table->integer('number_of_participants');
            $table->text('special_requests')->nullable();
            $table->string('status')->default('pending'); // pending, confirmed, completed, cancelled
            $table->decimal('total_price', 10, 2);
            $table->string('payment_status')->default('unpaid'); // unpaid, paid, refunded
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_bookings');
    }
};
