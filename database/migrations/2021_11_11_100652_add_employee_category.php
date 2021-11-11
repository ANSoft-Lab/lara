<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmployeeCategory extends Migration
{
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->bigInteger('vacancy_category_id')->nullable()->after('department_id');
        });
    }

    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('vacancy_category_id');
        });
    }
}
