<?php

namespace Database\Factories;

use App\Models\answer;
use App\Models\image;
use App\Models\level;
use App\Models\time;
use App\Models\type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\question>
 */
class questionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => $this->faker->sentence(),
            'type_id' => type::get()->random()->id,
            'level_id' => level::get()->random()->id,
            'time_id' => time::get()->random()->id,
            'answer_id' => answer::get()->random()->id,
            'image_id' => image::get()->random()->id,
        ];
    }
}
