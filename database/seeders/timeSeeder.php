<?php

namespace Database\Seeders;

use App\Models\time;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class timeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $times = array(0,5,8,10,15);
        for ($i = 0; $i < count($times); $i++) {
            time::create([
                'time' => $times[$i],
            ]);
        }
    }
}
