<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EBook>
 */
class EBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public $timeStamps = false;
    const UPDATED_AT = null;
    const CREATED_AT = null;

    public function definition()
    {
        return [
            // 'ebook_id' => $this->faker->unique()->numberBetween(21, 31),
            'ebook_id' => $this->faker->unique()->numberBetween(140, 230),
            'title' => $this->faker->word(),
            'author' => $this->faker->name(),
            'description' => $this->faker->sentence(20),
        ];
    }
}
