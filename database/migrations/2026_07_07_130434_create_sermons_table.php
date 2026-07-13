<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description')->nullable();
            $table->string('orateur')->nullable();
            $table->dateTime('date_sermon')->nullable();
            $table->string('youtube_id')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('duree')->nullable();
            $table->enum('categorie', ['Enseignement', 'Prédication', 'Étude Biblique', 'Témoignage', 'Autre'])->default('Enseignement');
            $table->text('references_bibliques')->nullable();
            $table->integer('nombre_vues')->default(0);
            $table->boolean('est_publie')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sermons');
    }
};