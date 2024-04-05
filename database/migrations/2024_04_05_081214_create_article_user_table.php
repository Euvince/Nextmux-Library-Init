<?php

use App\Models\Article;
use App\Models\User;
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
        Schema::create('article_user', function (Blueprint $table) {
            $table->foreignId('article_id')->references('id')->on('articles');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->primary(['article_id', 'user_id']);
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_user');
    }
};
