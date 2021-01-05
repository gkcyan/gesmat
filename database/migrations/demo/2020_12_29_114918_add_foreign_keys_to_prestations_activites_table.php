<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPrestationsActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prestations_activites', function (Blueprint $table) {
            $table->foreign('garage_prestation_id', 'prestations_activites_garages_prestations_foreign')->references('id')->on('garages_prestations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prestations_activites', function (Blueprint $table) {
            $table->dropForeign('prestations_activites_garages_prestations_foreign');
        });
    }
}
