<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('titre');
            $table->text('contenu');
            $table->string('image')->nullable();
            $table->dateTime('date_publication')->nullable();
            $table->dateTime('date_expiration')->nullable();
            $table->enum('priorite', ['basse','normale','haute','urgente'])->default('normale');
            $table->boolean('est_publiee')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};