<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Don;

class DonSeeder extends Seeder
{
    public function run(): void
    {
        Don::factory()->count(15)->create();
    }
}