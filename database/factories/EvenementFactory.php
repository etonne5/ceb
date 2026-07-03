<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evenement>
 */
class EvenementFactory extends Factory
{
    public function definition(): array
    {
        $categories = ['Religieuse','Sociale','Educative','Celebration','Autre'];
        $statuts = ['planifie','en_cours','termine','annule'];

        $start = $this->faker->dateTimeBetween('+1 days', '+60 days');
        $end = (clone $start)->modify('+'.random_int(1,3).' hours');

        return [
            'titre' => ucfirst($this->faker->words(3, true)),
            'description' => $this->faker->paragraph(),
            'date_debut' => $start,
            'date_fin' => $end,
            'lieu' => $this->faker->city(),
            'image' => null,
            'max_participants' => $this->faker->optional()->numberBetween(20, 500),
            'statut' => $this->faker->randomElement($statuts),
            'categorie' => $this->faker->randomElement($categories),
            'est_public' => true,
            'necessite_inscription' => $this->faker->boolean(30),
            'tarif' => $this->faker->optional()->randomFloat(2, 0, 200),
        ];
    }
}
