<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Si la colonne role n'existe pas, on l'ajoute
            if (! Schema::hasColumn('users', 'role')) {
                $table->enum('role', ['administrateur','pasteur','membre','utilisateur'])->default('utilisateur')->after('password');
            }

            // Ajout d'un indicateur est_actif si nécessaire
            if (! Schema::hasColumn('users', 'est_actif')) {
                $table->boolean('est_actif')->default(true)->after('role');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'est_actif')) {
                $table->dropColumn('est_actif');
            }
            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }
        });
    }
};