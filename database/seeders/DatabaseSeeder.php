<?php

namespace Database\Seeders;

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
        $this->call(MainBlocksSeeder::class);
        $this->call(KisBlocksSeeder::class);
        $this->call(TeamBlocksSeeder::class);

        $this->call(PagesSeeder::class);

        $this->call(CitiesSeeder::class);

        $this->call(DepartmentsSeeder::class);

        $this->call(EmployeesSeeder::class);

        $this->call(MenuSeeder::class);

    }
}
