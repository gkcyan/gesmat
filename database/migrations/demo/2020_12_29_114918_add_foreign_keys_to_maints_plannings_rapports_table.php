<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaintsPlanningsRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maints_plannings_rapports', function (Blueprint $table) {
            $table->foreign('maints_plannings_activites_id', 'fk_maints_plannings_rapports_maints_plannings_activites1')->references('id')->on('maints_plannings_activites')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maints_plannings_rapports', function (Blueprint $table) {
            $table->dropForeign('fk_maints_plannings_rapports_maints_plannings_activites1');
        });
    }
}
