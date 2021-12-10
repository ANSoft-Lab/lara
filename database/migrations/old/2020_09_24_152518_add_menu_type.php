<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMenuType extends Migration
{
    public function up()
    {
        Schema::table('menu_items', function (Blueprint $table) {
            $table->string('menu_type')->default('top')->after('type')->nullable();
            $table->tinyInteger('publish')->after('depth')->default(1);
            $table->bigInteger('deleted_by')->after('publish')->nullable();
        });
    }

    public function down()
    {
        Schema::table('menu_items', function (Blueprint $table) {
            $table->dropColumn('menu_type');
            $table->dropColumn('publish');
            $table->dropColumn('deleted_by');
        });
    }
}
