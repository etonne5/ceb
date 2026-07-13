<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->string('responsable')->nullable();
            $table->string('email_responsable')->nullable();
            $table->string('telephone_responsable')->nullable();
            $table->string('image')->nullable();
            $table->text('missions')->nullable();
            $table->enum('type', ['Service', 'Ministère', 'Commission', 'Groupe', 'Autre'])->default('Service');
            $table->string('icone')->nullable();
            $table->string('couleur_icone')->nullable();
            $table->integer('nombre_membres')->nullable();
            $table->boolean('est_actif')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departements');
    }
};