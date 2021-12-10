<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeCityId extends Migration
{
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->bigInteger('city_id')->after('vacancy_category_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('city_id');
        });
    }
}
