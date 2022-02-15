<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            // 'order_id' => $this->faker->unique()->numberBetween(45, 55),
            'id' => $this->faker->unique()->numberBetween(350, 450),
            // get the account_id from the AccountFactory
            'users_id' => UserFactory::new()->create()->id,
            // get ebook_id from the EBookFactory
            'ebook_id' => EBookFactory::new()->create()->ebook_id,
            'order_date' => $this->faker->dateTime(),
        ];
    }
}
