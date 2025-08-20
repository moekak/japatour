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
        Schema::table('tour_reviews', function (Blueprint $table) {
             $table->integer('tour_id')->after("id"); // ← signed int にする
            $table->foreign('tour_id')
                ->references('id')
                ->on('tours_news')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tour_reviews', function (Blueprint $table) {
            $table->foreignId('tour_id')->constrained()->onDelete('cascade')->onUpdate("cascade")->change();
        });
    }
};
