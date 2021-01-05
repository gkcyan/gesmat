<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPointagesLocationsHasFacturesLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pointages_locations_has_factures_locations', function (Blueprint $table) {
            $table->foreign('factures_locations_id', 'fk_pointages_locations_has_factures_locations_factures_locati1')->references('id')->on('factures_locations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('pointages_locations_id', 'fk_pointages_locations_has_factures_locations_pointages_locat1')->references('id')->on('pointages_locations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pointages_locations_has_factures_locations', function (Blueprint $table) {
            $table->dropForeign('fk_pointages_locations_has_factures_locations_factures_locati1');
            $table->dropForeign('fk_pointages_locations_has_factures_locations_pointages_locat1');
        });
    }
}
