<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prieres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membre_id')->nullable()->constrained('membres')->onDelete('set null');
            $table->string('titre');
            $table->text('description');
            $table->enum('type', ['Action_de_grace','Intercession','Guerison','Autre'])->default('Autre');
            $table->enum('statut', ['active','exaucee','archivee'])->default('active');
            $table->boolean('est_public')->default(false);
            $table->integer('nombre_prieres')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prieres');
    }
};