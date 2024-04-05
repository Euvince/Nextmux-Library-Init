<?php

use App\Models\User;
use App\Models\Article;
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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('date_reservation');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('statut')->default('En attente');
            $table->date('date_traitement');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('article_id')->references('id')->on('articles');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
