<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->catchPhrase(),
            'totalPages'=>fake()->biasedNumberBetween($min = 80, $max = 250, $function = 'sqrt'),
            'rating'=>fake()->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'isbn'=>fake()->isbn13(),
            'publishDate'=>fake()->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
