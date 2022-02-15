<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // \App\Models\Role::factory(1)->create();
        // \App\Models\Gender::factory(1)->create();
        $this->call([
            RoleSeeder::class,
            GenderSeeder::class,
        ]);
        \App\Models\EBook::factory(1)->create();
        \App\Models\Order::factory(1)->create();
        // \App\Models\Account::factory(1)->create();
        \App\Models\User::factory(1)->create();


    }
}
