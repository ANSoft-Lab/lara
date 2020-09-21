<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    public function up() {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('city_id')->nullable();
            $table->integer('show_order')->default(0);
            $table->bigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('departments');
    }
}
