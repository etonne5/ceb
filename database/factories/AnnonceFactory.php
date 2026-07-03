<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    public function definition(): array
    {
        $priorites = ['basse','normale','haute','urgente'];

        return [
            'user_id' => User::factory(),
            'titre' => ucfirst($this->faker->words(4, true)),
            'contenu' => $this->faker->paragraphs(2, true),
            'image' => null,
            'date_publication' => $this->faker->optional()->dateTimeBetween('-30 days', '+30 days'),
            'date_expiration' => $this->faker->optional()->dateTimeBetween('+31 days', '+120 days'),
            'priorite' => $this->faker->randomElement($priorites),
            'est_publiee' => $this->faker->boolean(70),
        ];
    }
}