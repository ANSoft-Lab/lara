<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFeedbackableType extends Migration
{
    public function up()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->renameColumn('type', 'feedbackable_type');
            $table->renameColumn('entity_id', 'feedbackable_id');
        });
    }

    public function down()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->renameColumn('feedbackable_type', 'type');
            $table->renameColumn('feedbackable_id', 'entity_id');
        });
    }
}
