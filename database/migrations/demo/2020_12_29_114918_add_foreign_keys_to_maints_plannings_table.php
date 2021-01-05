<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaintsPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maints_plannings', function (Blueprint $table) {
            $table->foreign('maints_plannings_types_id', 'fk_maints_plannings_maints_plannings_types1')->references('id')->on('maints_plannings_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maints_plannings', function (Blueprint $table) {
            $table->dropForeign('fk_maints_plannings_maints_plannings_types1');
        });
    }
}
