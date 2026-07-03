<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Membre;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Don>
 */
class DonFactory extends Factory
{
    public function definition(): array
    {
        $types = ['Especes','Virement','En_ligne','Cheque','Mobile Money','Autre'];
        $objectifs = ['General','Batiment','Charite','Mission','Projet_Special','Autre'];

        return [
            'membre_id' => Membre::factory(),
            'montant' => $this->faker->randomFloat(2, 5, 500),
            'type' => $this->faker->randomElement($types),
            'objectif' => $this->faker->randomElement($objectifs),
            'date_don' => $this->faker->date(),
            'est_anonyme' => $this->faker->boolean(10),
            'methode_paiement' => null,
            'statut' => 'termine',
            'notes' => $this->faker->optional()->sentence(),
        ];
    }
}