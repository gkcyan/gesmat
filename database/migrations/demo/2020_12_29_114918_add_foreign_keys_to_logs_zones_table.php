<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLogsZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('logs_zones', function (Blueprint $table) {
            $table->foreign('logs_zones_types_id', 'fk_logs_zones_logs_zones_types1')->references('id')->on('logs_zones_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logs_zones', function (Blueprint $table) {
            $table->dropForeign('fk_logs_zones_logs_zones_types1');
        });
    }
}
