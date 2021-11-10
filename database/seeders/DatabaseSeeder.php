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
        $this->call(AboutBlocksSeeder::class);

        // FAQ
        $this->call(Faq\FaqBlocksSeeder::class);
        $this->call(Faq\FaqSeeder::class);

        // Articles
        $this->call(Articles\ArticleBlocksSeeder::class);
        $this->call(Articles\ArticlePagesSeeder::class);

        /*ND*/

        $this->call(AdvantagesBlocksSeeder::class);
        $this->call(GroupBlocksSeeder::class);
        $this->call(ContactBlocksSeeder::class);
        $this->call(RefinancingBlocksSeeder::class);
        $this->call(CooperationBlocksSeeder::class);
        $this->call(RequisitesBlocksSeeder::class);

        $this->call(InsuranceFizBlocksSeeder::class);
        $this->call(InsuranceKaskoBlocksSeeder::class);
        $this->call(InsuranceOsagoBlocksSeeder::class);
        $this->call(InsuranceVzrBlocksSeeder::class);
        $this->call(InsuranceVzrCalcBlocksSeeder::class);
        $this->call(InsuranceDmsBlocksSeeder::class);

        $this->call(CorpInsuranceBlocksSeeder::class);
        $this->call(CorpInsuranceDeveloperBlocksSeeder::class);
        $this->call(CorpInsuranceBussinesBlocksSeeder::class);
        $this->call(CorpInsuranceResponsibilityBlocksSeeder::class);
        $this->call(CorpInsuranceYurBlocksSeeder::class);
        $this->call(CorpInsuranceCargoBlocksSeeder::class);
        $this->call(CorpInsuranceBuildingBlocksSeeder::class);

        $this->call(InstructionBlocksSeeder::class);
        $this->call(InstructionAutoBlocksSeeder::class);
        $this->call(InstructionVzrBlocksSeeder::class);
        $this->call(InstructionImuBlocksSeeder::class);
        $this->call(InstructionDmsBlocksSeeder::class);
        $this->call(InstructionNsBlocksSeeder::class);

        $this->call(JobBlocksSeeder::class);
        $this->call(JobCourierBlocksSeeder::class);
        $this->call(JobSpecialMotorBlocksSeeder::class);
        $this->call(JobSpecialPropertyBlocksSeeder::class);
        $this->call(JobManagerRyazanBlocksSeeder::class);
        $this->call(JobManagerNnBlocksSeeder::class);
        $this->call(JobOperatorBlocksSeeder::class);
        $this->call(JobManagerClientsBlocksSeeder::class);

        $this->call(PagesSeeder::class);

        $this->call(CitiesSeeder::class);

        $this->call(DepartmentsSeeder::class);

        $this->call(EmployeesSeeder::class);

        $this->call(MenuSeeder::class);

        $this->call(Vacancies\VacancyCategoriesSeeder::class);
        // TO DO: закомментировать, чтобы на боевом сайте не дублировались вакансии
        $this->call(Vacancies\VacanciesSeeder::class);

        //Fixes
        $this->call(FixPhotosPathSeeder::class);
    }
}
