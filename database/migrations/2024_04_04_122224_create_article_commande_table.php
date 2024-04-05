<?php

use App\Models\Article;
use App\Models\Commande;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article_commande', function (Blueprint $table) {
            $table->foreignId('article_id')->references('id')->on('articles');
            $table->foreignId('commande_id')->references('id')->on('commandes');
            $table->primary(['article_id', 'commande_id']);
            $table->float('quantite');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_commande');
    }
};
