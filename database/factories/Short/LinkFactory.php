<?php

namespace Database\Factories\Short;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $shortlinks = [
            'df', 'Mj', 'Zd', 'Y7', 'Mo', 'Ab', 'Oi', 'Km', 'F8', 'Uu',
            'Lk', 'H6', '1d', 'Wq', 'Sz', 'm4', 'Io', 'R6', 'Tr', 'Pd',
            'Ss', 'Fd', 'Hg', 'L0', '7f', 'cv', 'bR', 'kq', 'Zt', 'dd'
        ];
        return [
            'name' => fake()->word(),
            'shortlink' => fake()->unique()->randomElement($shortlinks),
            'url' => fake()->unique()->url(),
            'counter' => fake()->randomNumber(2, true)
        ];
    }
}
