<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Membre;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Benevole>
 */
class BenevoleFactory extends Factory
{
    public function definition(): array
    {
        $postes = ['Sacristain','Lecteur','Chorale','Servant_de_messe','Nettoyage','Musicien','Autre'];

        return [
            'membre_id' => Membre::factory(),
            'poste' => $this->faker->randomElement($postes),
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->optional()->date(),
            'est_actif' => $this->faker->boolean(80),
            'competences' => $this->faker->optional()->sentence(),
            'disponibilite' => $this->faker->optional()->sentence(),
        ];
    }
}
