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
            'id' => $this->faker->unique()->numberBetween(3, 5),
            // 'role_id' => '1',
            'role_desc' => 'Admin',
        ];
    }
}
