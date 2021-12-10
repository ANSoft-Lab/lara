<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeExtrasToLongtext extends Migration
{
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->longText('extras')->change();
        });
    }

    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('extras')->change();
        });
    }
}
