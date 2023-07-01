<?php

namespace Database\Seeders;

use App\Models\level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class levelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = array("begginer", "medium", "profissional", "expert");
        for ($i = 0; $i < count($levels); $i++) {
            level::create([
                'level' => $levels[$i],
            ]);
        }
    }
}
