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
        Schema::table('prieres', function (Blueprint $table) {
            // Ajouter les colonnes manquantes si elles n'existent pas
            if (!Schema::hasColumn('prieres', 'membre_id')) {
                $table->foreignId('membre_id')->nullable()->constrained('membres')->onDelete('set null');
            }
            if (!Schema::hasColumn('prieres', 'titre')) {
                $table->string('titre')->nullable();
            }
            if (!Schema::hasColumn('prieres', 'description')) {
                $table->text('description')->nullable();
            }
            if (!Schema::hasColumn('prieres', 'type')) {
                $table->enum('type', ['Intercession', 'Action_de_grace', 'Demande', 'Louange', 'Autre'])->default('Demande');
            }
            if (!Schema::hasColumn('prieres', 'statut')) {
                $table->enum('statut', ['active', 'en_attente', 'repondus', 'archivees'])->default('active');
            }
            if (!Schema::hasColumn('prieres', 'est_public')) {
                $table->boolean('est_public')->default(true);
            }
            if (!Schema::hasColumn('prieres', 'nombre_prieres')) {
                $table->integer('nombre_prieres')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prieres', function (Blueprint $table) {
            // Supprimer les colonnes ajoutées
            $columns = ['membre_id', 'titre', 'description', 'type', 'statut', 'est_public', 'nombre_prieres'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('prieres', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};