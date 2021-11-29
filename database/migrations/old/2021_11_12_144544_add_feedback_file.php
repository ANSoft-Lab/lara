<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeedbackFile extends Migration
{
    public function up()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->string('file')->nullable()->after('type');
            $table->bigInteger('feedbackable_id')->nullable()->after('file');
        });
    }

    public function down()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->dropColumn('file');
            $table->dropColumn('feedbackable_id');
        });
    }
}
