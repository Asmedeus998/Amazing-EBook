<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gender>
 */
class GenderFactory extends Factory
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

            'gender_id' => $this->faker->unique()->numberBetween(492, 600),
            // 'gender_id' => $this->faker->unique()->numberBetween(260, 340),
            'gender_desc' => 'Male',
        ];
    }
}
