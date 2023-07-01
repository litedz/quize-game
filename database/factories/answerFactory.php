<?php

namespace Database\Factories;

use App\Models\type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\answer>
 */
class answerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'answer' => $this->faker->sentence(6),
            'type_id' => type::get()->random()->id,
        ];
    }
}
