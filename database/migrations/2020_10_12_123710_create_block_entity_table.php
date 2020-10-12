<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockEntityTable extends Migration
{
    public function up()
    {
        Schema::create('block_entity', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('block_id');
            $table->bigInteger('entity_id');
            $table->string('entity_class');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('block_entity');
    }
}
