<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscriptions_evenements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evenement_id')->constrained('evenements')->onDelete('cascade');
            $table->foreignId('membre_id')->nullable()->constrained('membres')->onDelete('set null');
            $table->string('email');
            $table->string('nom');
            $table->string('telephone')->nullable();
            $table->integer('nombre_invites')->default(1);
            $table->enum('statut', ['inscrit','assiste','annule'])->default('inscrit');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscriptions_evenements');
    }
};