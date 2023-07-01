<?php

namespace Database\Seeders;

use App\Models\image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class imageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        image::factory()->create();
    }
}
