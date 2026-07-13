<?php

namespace Database\Seeders;

use App\Models\Sermon;
use Illuminate\Database\Seeder;

class SermonSeeder extends Seeder
{
    public function run(): void
    {
        $sermons = [
            [
                'titre' => 'La puissance de la foi',
                'description' => 'Une prédication profonde sur la puissance transformatrice de la foi en Jésus-Christ.',
                'orateur' => 'Bishop Serge Aimé DZABATOU-ECKO',
                'date_sermon' => now()->subDays(5),
                'youtube_id' => 'dQw4w9WgXcQ',
                'duree' => '45:32',
                'categorie' => 'Enseignement',
                'references_bibliques' => 'Hébreux 11:1-6',
                'est_publie' => true,
            ],
            [
                'titre' => 'Vaincre par la prière',
                'description' => 'Comment transformer votre vie par la puissance de la prière intercession.',
                'orateur' => 'Bishop Serge Aimé DZABATOU-ECKO',
                'date_sermon' => now()->subDays(12),
                'youtube_id' => 'jNQXAC9IVRw',
                'duree' => '38:15',
                'categorie' => 'Prédication',
                'references_bibliques' => 'Philippiens 4:6-7',
                'est_publie' => true,
            ],
            [
                'titre' => 'La transformation en Christ',
                'description' => 'Étude biblique sur la transformation personnelle par la grâce de Dieu.',
                'orateur' => 'Bishop Serge Aimé DZABATOU-ECKO',
                'date_sermon' => now()->subDays(19),
                'youtube_id' => '9bZkp7q19f0',
                'duree' => '52:10',
                'categorie' => 'Étude Biblique',
                'references_bibliques' => '2 Corinthiens 3:18',
                'est_publie' => true,
            ],
            [
                'titre' => 'Jésus-Christ hier, aujourd\'hui et éternellement',
                'description' => 'Un témoignage vivant sur la constance de Jésus dans nos vies.',
                'orateur' => 'Bishop Serge Aimé DZABATOU-ECKO',
                'date_sermon' => now()->subDays(26),
                'youtube_id' => 'kJQDL8G4z94',
                'duree' => '41:20',
                'categorie' => 'Témoignage',
                'references_bibliques' => 'Hébreux 13:8',
                'est_publie' => true,
            ],
            [
                'titre' => 'L\'amour de Dieu sans limites',
                'description' => 'Découvrez l\'amour inconditionnel que Dieu a pour chacun de nous.',
                'orateur' => 'Bishop Serge Aimé DZABATOU-ECKO',
                'date_sermon' => now()->subDays(33),
                'youtube_id' => 'M7lc1BCxL8F',
                'duree' => '35:45',
                'categorie' => 'Enseignement',
                'references_bibliques' => 'Jean 3:16',
                'est_publie' => true,
            ],
        ];

        foreach ($sermons as $sermon) {
            Sermon::create($sermon);
        }
    }
}