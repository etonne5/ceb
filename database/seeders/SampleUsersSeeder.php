<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Membre;

class SampleUsersSeeder extends Seeder
{
    public function run(): void
    {
        // Crée 10 utilisateurs et membres associés
        User::factory()->count(10)->create()->each(function ($user) {
            // chaque UserFactory a déjà créé un membre via Membre::factory() if used,
            // mais pour garantir un membre lié si vous préférez :
            if (!$user->membre) {
                Membre::create([
                    'user_id' => $user->id,
                    'prenom' => explode(' ', $user->name)[0] ?? $user->name,
                    'nom' => explode(' ', $user->name)[1] ?? '',
                    'telephone' => null,
                    'ville' => null,
                    'statut' => 'actif',
                ]);
            }
        });
    }
}