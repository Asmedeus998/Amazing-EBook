<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
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
            'account_id' => $this->faker->unique()->numberBetween(10, 20),
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'password' => 'password',
            'display_picture_link' => $this->faker->imageUrl(),
            'delete_flag' => $this->faker->boolean(),
            'modified_at_date' => $this->faker->dateTime(),
            'modified_by' => $this->faker->numberBetween(1, 10),
            // get the role_id from the RoleFactory
            'role_id' => RoleFactory::new()->create()->role_id,
            // get the gender_id from the GenderFactory
            'gender_id' => GenderFactory::new()->create()->gender_id

        ];
    }
}
