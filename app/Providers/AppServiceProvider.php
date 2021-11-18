<?php

namespace App\Providers;

use App\Models\City;
use App\Models\VacancyCategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('blocks.vacancies', function($view) {
            $view->with([
                'cities' => City::withCount('vacancies')->orderBy('show_order')->get(),
                'vacancy_categories' => VacancyCategory::withCount('vacancies')->orderBy('show_order')->get(),
            ]);
        });

        view()->composer('blocks.team', function($view) {
            $view->with([
                'cities' => City::withCount('employees')->orderBy('show_order')->get(),
                'vacancy_categories' => VacancyCategory::withCount('employees')->orderBy('show_order')->get(),
            ]);
        });
    }
}
