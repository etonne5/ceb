<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    public function run(): void
    {
        $departements = [
            [
                'nom' => 'Culte et Adoration',
                'description' => 'Département responsable des louanges, cultes et adoration.',
                'responsable' => 'Frère André',
                'email_responsable' => 'andre@ceb.com',
                'telephone_responsable' => '+242 06 XX XX XX',
                'missions' => 'Organiser les cultes, diriger la louange, former les musiciens.',
                'type' => 'Service',
                'icone' => 'fa-hands-praying',
                'couleur_icone' => '#3b82f6',
                'nombre_membres' => 25,
                'est_actif' => true,
            ],
            [
                'nom' => 'Enseignement Biblique',
                'description' => 'Responsable de l\'étude et de l\'enseignement de la Parole de Dieu.',
                'responsable' => 'Frère Thomas',
                'email_responsable' => 'thomas@ceb.com',
                'telephone_responsable' => '+242 06 XX XX XX',
                'missions' => 'Préparer les études bibliques, former les animateurs.',
                'type' => 'Ministère',
                'icone' => 'fa-book-bible',
                'couleur_icone' => '#10b981',
                'nombre_membres' => 15,
                'est_actif' => true,
            ],
            [
                'nom' => 'Évangélisation',
                'description' => 'Département d\'évangélisation et de sensibilisation communautaire.',
                'responsable' => 'Sœur Marie',
                'email_responsable' => 'marie@ceb.com',
                'telephone_responsable' => '+242 06 XX XX XX',
                'missions' => 'Campagnes d\'évangélisation, visites pastorales, accueil des nouveaux.',
                'type' => 'Ministère',
                'icone' => 'fa-heart',
                'couleur_icone' => '#ef4444',
                'nombre_membres' => 30,
                'est_actif' => true,
            ],
            [
                'nom' => 'Jeunesse et Enfants',
                'description' => 'Service dédié à la formation spirituelle des jeunes et enfants.',
                'responsable' => 'Frère Claude',
                'email_responsable' => 'claude@ceb.com',
                'telephone_responsable' => '+242 06 XX XX XX',
                'missions' => 'Camps jeunesse, école biblique, activités récréatives.',
                'type' => 'Service',
                'icone' => 'fa-children',
                'couleur_icone' => '#f59e0b',
                'nombre_membres' => 40,
                'est_actif' => true,
            ],
            [
                'nom' => 'Assistance Sociale',
                'description' => 'Aide aux personnes dans le besoin et projets sociaux.',
                'responsable' => 'Sœur Noëlle',
                'email_responsable' => 'noelle@ceb.com',
                'telephone_responsable' => '+242 06 XX XX XX',
                'missions' => 'Aide alimentaire, assistance médicale, projets de développement.',
                'type' => 'Commission',
                'icone' => 'fa-handshake',
                'couleur_icone' => '#8b5cf6',
                'nombre_membres' => 20,
                'est_actif' => true,
            ],
            [
                'nom' => 'Administration et Finances',
                'description' => 'Gestion administrative et financière de l\'église.',
                'responsable' => 'Frère Robert',
                'email_responsable' => 'robert@ceb.com',
                'telephone_responsable' => '+242 06 XX XX XX',
                'missions' => 'Gestion budgétaire, comptabilité, administration générale.',
                'type' => 'Commission',
                'icone' => 'fa-calculator',
                'couleur_icone' => '#6366f1',
                'nombre_membres' => 8,
                'est_actif' => true,
            ],
        ];

        foreach ($departements as $departement) {
            Departement::create($departement);
        }
    }
}