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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('stripe_id')->nullable();
            $table->foreignId('tour_id')->constrained()->onDelete('cascade');
            $table->string("name", 255);
            $table->string("email", 255);
            $table->string("phone_number", 255);
            $table->string("country", 255);
            $table->integer("tourists_number");
            $table->string("requests", 5000)->nullable();
            $table->date("tour_date");
            $table->string('pm_type')->nullable();
            $table->string('pm_last_four', 4)->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
