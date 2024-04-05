<?php

use App\Models\Article;
use App\Models\Categorie;
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
        Schema::create('article_categorie', function (Blueprint $table) {
            $table->foreignId('article_id')->references('id')->on('articles');
            $table->foreignId('categorie_id')->references('id')->on('categories');

            $table->primary(['article_id', 'categorie_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_categorie');
    }
};
