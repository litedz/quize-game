<?php

namespace Database\Seeders;

use App\Models\answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class answerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        answer::factory(25)->create();
    }
}
