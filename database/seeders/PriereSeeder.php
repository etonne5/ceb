<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Priere;

class PriereSeeder extends Seeder
{
    public function run(): void
    {
        Priere::factory()->count(12)->create();
    }
}