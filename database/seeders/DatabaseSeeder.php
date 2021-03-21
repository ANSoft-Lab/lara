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
        $this->call(FaqBlocksSeeder::class);
        $this->call(AboutBlocksSeeder::class);
        $this->call(GroupBlocksSeeder::class);
        $this->call(ContactBlocksSeeder::class);
        $this->call(RefinancingBlocksSeeder::class);
        $this->call(InsuranceFizBlocksSeeder::class);
        $this->call(InsuranceKaskoBlocksSeeder::class);
        $this->call(InsuranceOsagoBlocksSeeder::class);
        $this->call(InsuranceVzrBlocksSeeder::class);
        $this->call(InsuranceVzrCalcBlocksSeeder::class);
        $this->call(InsuranceDmsBlocksSeeder::class);
        $this->call(AdvantagesBlocksSeeder::class);
        $this->call(CorpInsuranceBlocksSeeder::class);
        $this->call(CorpInsuranceDeveloperBlocksSeeder::class);
        $this->call(CorpInsuranceBussinesBlocksSeeder::class);
        $this->call(CorpInsuranceResponsibilityBlocksSeeder::class);
        $this->call(CorpInsuranceYurBlocksSeeder::class);

        $this->call(PagesSeeder::class);

        $this->call(CitiesSeeder::class);

        $this->call(DepartmentsSeeder::class);

        $this->call(EmployeesSeeder::class);

        $this->call(MenuSeeder::class);

        $this->call(FaqSeeder::class);

        //Fixes
        $this->call(FixPhotosPathSeeder::class);
    }
}
