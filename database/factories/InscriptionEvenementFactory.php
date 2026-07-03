<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Evenement;
use App\Models\Membre;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InscriptionEvenement>
 */
class InscriptionEvenementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'evenement_id' => Evenement::factory(),
            'membre_id' => Membre::factory(),
            'email' => $this->faker->unique()->safeEmail(),
            'nom' => $this->faker->name(),
            'telephone' => $this->faker->phoneNumber(),
            'nombre_invites' => $this->faker->numberBetween(1, 5),
            'statut' => 'inscrit',
        ];
    }
}
