<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Membre;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Priere>
 */
class PriereFactory extends Factory
{
    public function definition(): array
    {
        $types = ['Action_de_grace','Intercession','Guerison','Autre'];

        return [
            'membre_id' => Membre::factory(),
            'titre' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(),
            'type' => $this->faker->randomElement($types),
            'statut' => 'active',
            'est_public' => $this->faker->boolean(50),
            'nombre_prieres' => $this->faker->numberBetween(0, 50),
        ];
    }
}
