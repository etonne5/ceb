<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Utilisation du chemin complet
        $admin = \App\Models\User::firstOrCreate(
            ['email' => 'admin@ceb.local'],
            [
                'name' => 'Administrateur CEB',
                'email_verified_at' => now(),
                'password' => Hash::make('changeme123'),
                'role' => 'administrateur',
            ]
        );

        $membre = \App\Models\Membre::firstOrCreate(
            ['user_id' => $admin->id],
            [
                'prenom' => 'Admin',
                'nom' => 'CEB',
                'telephone' => '+221 77 123 45 67',
                'adresse' => 'Dakar, Sénégal',
                'ville' => 'Dakar',
                'code_postal' => '10000',
                'date_bapteme' => now()->subYears(5),
                'date_confirmation' => now()->subYears(3),
                'date_naissance' => '1980-01-01',
                'statut' => 'actif',
                'notes' => 'Administrateur principal du système',
                'avatar' => null,
            ]
        );

        $pasteur = \App\Models\User::firstOrCreate(
            ['email' => 'pasteur@ceb.local'],
            [
                'name' => 'Pasteur CEB',
                'email_verified_at' => now(),
                'password' => Hash::make('changeme123'),
                'role' => 'pasteur',
            ]
        );

        \App\Models\Membre::firstOrCreate(
            ['user_id' => $pasteur->id],
            [
                'prenom' => 'Pasteur',
                'nom' => 'CEB',
                'telephone' => '+221 77 234 56 78',
                'adresse' => 'Dakar, Sénégal',
                'ville' => 'Dakar',
                'code_postal' => '10000',
                'date_bapteme' => now()->subYears(10),
                'date_confirmation' => now()->subYears(8),
                'date_naissance' => '1975-05-15',
                'statut' => 'actif',
                'notes' => 'Pasteur de la communauté',
                'avatar' => null,
            ]
        );

        $this->command->info('✅ Utilisateurs créés avec succès !');
        $this->command->info('📧 Admin: admin@ceb.local / 🔑 changeme123');
        $this->command->info('📧 Pasteur: pasteur@ceb.local / 🔑 changeme123');
    }
}