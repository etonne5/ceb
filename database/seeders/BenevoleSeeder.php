<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Benevole;

class BenevoleSeeder extends Seeder
{
    public function run(): void
    {
        Benevole::factory()->count(8)->create();
    }
}