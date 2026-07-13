<?php

namespace Database\Seeders;

use App\Models\Eglise;
use Illuminate\Database\Seeder;

class EgliseSeeder extends Seeder
{
    public function run(): void
    {
        $eglises = [
            [
                'nom' => 'Centre Évangélique Béthesda - Brazzaville',
                'description' => 'Siège principal du CEB au cœur de Brazzaville, République du Congo.',
                'adresse' => 'n°49-53 rue Loufoulakari, avenue Sergent Malamine Moungali',
                'ville' => 'Brazzaville',
                'code_postal' => '00242',
                'telephone' => '+242 05 53 61 942',
                'email' => 'ceb.bethanie@hotmail.com',
                'pays' => 'Congo',
                'latitude' => -4.2634,
                'longitude' => 15.2429,
                'pasteur' => 'Bishop Serge Aimé DZABATOU-ECKO',
                'capacite' => 500,
                'horaires_culte' => 'Dimanche: 09:00 - 12:00',
                'est_active' => true,
            ],
            [
                'nom' => 'CEB - Église de Pointe-Noire',
                'description' => 'Antenne du CEB à Pointe-Noire pour servir la communauté côtière.',
                'adresse' => 'Boulevard de l\'Indépendance',
                'ville' => 'Pointe-Noire',
                'code_postal' => '00242',
                'telephone' => '+242 05 XX XX XX',
                'email' => 'ceb.pointenoire@hotmail.com',
                'pays' => 'Congo',
                'latitude' => -4.7632,
                'longitude' => 11.8545,
                'pasteur' => 'Pasteur Assistant',
                'capacite' => 300,
                'horaires_culte' => 'Dimanche: 10:00 - 13:00',
                'est_active' => true,
            ],
            [
                'nom' => 'CEB - Église de Paris',
                'description' => 'Communauté CEB en France pour les résidents et expatriés.',
                'adresse' => '123 Avenue de la République',
                'ville' => 'Paris',
                'code_postal' => '75011',
                'telephone' => '+33 1 XX XX XX XX',
                'email' => 'ceb.paris@hotmail.com',
                'pays' => 'France',
                'latitude' => 48.8566,
                'longitude' => 2.3522,
                'pasteur' => 'Pasteur Pierre Dupont',
                'capacite' => 200,
                'horaires_culte' => 'Dimanche: 14:00 - 17:00',
                'est_active' => true,
            ],
            [
                'nom' => 'CEB - Église de Bruxelles',
                'description' => 'Présence du CEB en Belgique avec services réguliers.',
                'adresse' => '456 Avenue Louise',
                'ville' => 'Bruxelles',
                'code_postal' => '1050',
                'telephone' => '+32 2 XX XX XX',
                'email' => 'ceb.bruxelles@hotmail.com',
                'pays' => 'Belgique',
                'latitude' => 50.8503,
                'longitude' => 4.3517,
                'pasteur' => 'Pasteur Jean Martin',
                'capacite' => 150,
                'horaires_culte' => 'Dimanche: 15:00 - 18:00',
                'est_active' => true,
            ],
        ];

        foreach ($eglises as $eglise) {
            Eglise::create($eglise);
        }
    }
}