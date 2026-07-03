<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Option: créer un user de test si besoin
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Ordre important : users -> membres -> autres ressources
        $this->call([
            AdminUserSeeder::class,
            SampleUsersSeeder::class,
            MesseSeeder::class,
            EvenementSeeder::class,
            DonSeeder::class,
            PriereSeeder::class,
            BenevoleSeeder::class,
            AnnonceSeeder::class,
        ]);
    }
}