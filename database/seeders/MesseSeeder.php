<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Messe;

class MesseSeeder extends Seeder
{
    public function run(): void
    {
        $jours = ['Dimanche','Mercredi','Vendredi'];
        foreach ($jours as $idx => $jour) {
            Messe::create([
                'titre' => ($jour === 'Dimanche') ? 'Messe dominicale' : "Messe du $jour",
                'heure_debut' => $idx === 0 ? '10:00:00' : ($idx === 1 ? '19:00:00' : '18:00:00'),
                'heure_fin' => $idx === 0 ? '11:30:00' : '20:00:00',
                'jour' => $jour,
                'lieu' => 'Église principale',
                'type' => 'Dimanche',
                'nom_pretre' => 'Pasteur Jean',
                'capacite' => 300,
                'description' => 'Messe communautaire ouverte à tous.',
                'est_public' => true,
            ]);
        }
    }
}