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
        Schema::create('tour_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('tour_id'); // ← signed int にする
            $table->foreign('tour_id')
                ->references('id')
                ->on('tours_news')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string("question", 1000);
            $table->string("answer", 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_questions');
    }
};
