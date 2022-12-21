<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chord>
 */
class ChordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $chordArray = array('A', 'Am', 'B7', 'C', 'Cadd9', 'D', 'Dm', 'E', 'Em', 'F', 'G');

        return [
            'name' => fake()->unique()->randomElement($chordArray),
            'description' => fake()->sentence(),
        ];
    }
}
