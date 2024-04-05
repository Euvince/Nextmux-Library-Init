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
        Schema::create('article_format', function (Blueprint $table) {
            $table->foreignId('article_id')->references('id')->on('articles');
            $table->foreignId('format_id')->references('id')->on('formats');

            $table->primary(['article_id', 'format_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_format');
    }
};
