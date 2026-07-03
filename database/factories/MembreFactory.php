<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membre>
 */
class MembreFactory extends Factory
{
    public function definition(): array
    {
        $prenom = $this->faker->firstName();
        $nom = $this->faker->lastName();

        return [
            'user_id' => User::factory(),
            'prenom' => $prenom,
            'nom' => $nom,
            'telephone' => $this->faker->phoneNumber(),
            'adresse' => $this->faker->streetAddress(),
            'ville' => $this->faker->city(),
            'code_postal' => $this->faker->postcode(),
            'date_bapteme' => $this->faker->optional(0.2)->date(),
            'date_confirmation' => $this->faker->optional(0.2)->date(),
            'date_naissance' => $this->faker->date('Y-m-d', '-18 years'),
            'statut' => 'actif',
            'notes' => $this->faker->optional()->sentence(),
            'avatar' => null,
        ];
    }
}
