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
        // \App\Models\User::factory(10)->create();
        \App\Models\Role::factory(5)->create();
        \App\Models\Gender::factory(5)->create();
        \App\Models\EBook::factory(5)->create();
        \App\Models\Order::factory(5)->create();
        \App\Models\Account::factory(5)->create();


    }
}
