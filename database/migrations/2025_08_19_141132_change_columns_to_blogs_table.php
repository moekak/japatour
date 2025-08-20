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
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('title', 500)->change();
            $table->string('subtitle', 2000)->change();
            $table->string('category', 50)->change();
            $table->string('status', 20)->change();
            $table->string('meta_description', 200)->nullable()->change();
            $table->longText('content')->change();   
            $table->text('tags')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string("title");
            $table->string("subtitle");
            $table->string("category");
            $table->string("status");
            $table->string("meta_description");
            $table->string("content");
            $table->string("tags");
        });
    }
};
