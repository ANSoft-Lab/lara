<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuItemsTable extends Migration
{
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('type', 20)->nullable();
            $table->string('menu_type')->default('top')->nullable();
            $table->string('link', 255)->nullable();
            $table->integer('page_id')->unsigned()->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('lft')->unsigned()->nullable();
            $table->integer('rgt')->unsigned()->nullable();
            $table->integer('depth')->unsigned()->nullable();
            $table->tinyInteger('publish')->default(1);
            $table->bigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('menu_items');
    }
}
