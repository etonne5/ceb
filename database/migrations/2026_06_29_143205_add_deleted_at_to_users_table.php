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
        Schema::table('users', function (Blueprint $table) {
            // Ajoute la colonne deleted_at pour SoftDeletes (après remember_token si présent)
            if (! Schema::hasColumn('users', 'deleted_at')) {
                // place after remember_token when possible
                if (Schema::hasColumn('users', 'remember_token')) {
                    $table->softDeletes()->after('remember_token');
                } else {
                    $table->softDeletes();
                }
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'deleted_at')) {
                $table->dropSoftDeletes();
            }
        });
    }
};