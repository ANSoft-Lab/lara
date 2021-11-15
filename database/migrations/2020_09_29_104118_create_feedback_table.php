<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->string('type')->default('cooperation');
            $table->string('file')->nullable();
            $table->bigInteger('entity_id')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->json('bitrix24_res')->nullable();
            $table->json('bitrix24_status')->nullable();
            $table->string('bitrix24_status_code')->nullable();
            $table->integer('bitrix24_lead_id')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
