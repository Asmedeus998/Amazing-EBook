<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
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
            // 'role_id' => $this->faker->unique()->numberBetween(56, 66),
            'role_id' => $this->faker->unique()->numberBetween(500, 600),
            'role_desc' => $this->faker->sentence(25),
        ];
    }
}
