<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Messe>
 */
class MesseFactory extends Factory
{
    public function definition(): array
    {
        $jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
        $types = ['Dimanche','Semaine','Fete','Funeralles','Mariage','Celebration'];

        return [
            'titre' => 'Messe ' . $this->faker->word(),
            'heure_debut' => $this->faker->time('H:i:s'),
            'heure_fin' => $this->faker->optional()->time('H:i:s'),
            'jour' => $this->faker->randomElement($jours),
            'lieu' => $this->faker->city(),
            'type' => $this->faker->randomElement($types),
            'nom_pretre' => $this->faker->name(),
            'capacite' => $this->faker->optional()->numberBetween(50, 500),
            'description' => $this->faker->optional()->paragraph(),
            'est_public' => true,
        ];
    }
}
