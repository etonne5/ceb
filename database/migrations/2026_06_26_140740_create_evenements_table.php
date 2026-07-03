<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->string('lieu');
            $table->string('image')->nullable();
            $table->integer('max_participants')->nullable();
            $table->enum('statut', ['planifie','en_cours','termine','annule'])->default('planifie');
            $table->enum('categorie', ['Religieuse','Sociale','Educative','Celebration','Autre'])->default('Religieuse');
            $table->boolean('est_public')->default(true);
            $table->boolean('necessite_inscription')->default(false);
            $table->decimal('tarif', 8, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};