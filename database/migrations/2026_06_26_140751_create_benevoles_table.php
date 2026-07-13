<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('benevoles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membre_id')->constrained('membres')->onDelete('cascade');
            $table->enum('poste', ['Sacristain','Lecteur','Chorale','Servant_de_messe','Nettoyage','Musicien','Autre'])->default('Autre');
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->boolean('est_actif')->default(true);
            $table->text('competences')->nullable();
            $table->text('disponibilite')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('benevoles');
    }
};