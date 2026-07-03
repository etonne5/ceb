<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messes', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->time('heure_debut');
            $table->time('heure_fin')->nullable();
            $table->enum('jour', ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche']);
            $table->string('lieu')->nullable();
            $table->enum('type', ['Dimanche','Semaine','Fete','Funeralles','Mariage','Celebration'])->default('Dimanche');
            $table->string('nom_pretre')->nullable();
            $table->integer('capacite')->nullable();
            $table->text('description')->nullable();
            $table->boolean('est_public')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messes');
    }
};