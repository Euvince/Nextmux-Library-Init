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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type');
            $table->float('prix');
            $table->float('stock_disponible');
            $table->string('note');
            $table->string('nom_auteur');
            $table->string('couverture')->nullable();
            $table->string('fichier')->nullable();
            $table->string('note_vocale')->nullable();
            $table->integer('nombre_de_telechargements')->nullable();
            $table->integer('nombre_de_likes')->nullable();
            $table->integer('nombre_de_partages')->nullable();
            $table->integer('nombre_de_vues')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livre');
    }
};
