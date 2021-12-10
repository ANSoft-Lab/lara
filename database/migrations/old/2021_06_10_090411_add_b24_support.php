<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddB24Support extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->json('bitrix24_res')->nullable()->after('status');
            $table->json('bitrix24_status')->nullable()->after('bitrix24_res');
            $table->string('bitrix24_status_code')->nullable()->after('bitrix24_status');
            $table->integer('bitrix24_lead_id')->default(0)->after('bitrix24_status_code');
        });
    }

    public function down()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->dropColumn('bitrix24_res');
            $table->dropColumn('bitrix24_status');
            $table->dropColumn('bitrix24_status_code');
            $table->dropColumn('bitrix24_lead_id');
        });
    }
}
