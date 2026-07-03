<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membre_id')->nullable()->constrained('membres')->onDelete('set null');
            $table->decimal('montant', 10, 2);
            $table->enum('type', ['Especes','Virement','En_ligne','Cheque','Mobile Money','Autre'])->default('Especes');
            $table->enum('objectif', ['General','Batiment','Charite','Mission','Projet_Special','Autre'])->default('General');
            $table->date('date_don')->nullable();
            $table->boolean('est_anonyme')->default(false);
            $table->string('methode_paiement')->nullable();
            $table->enum('statut', ['en_attente','termine','echoue','rembourse'])->default('en_attente');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dons');
    }
};