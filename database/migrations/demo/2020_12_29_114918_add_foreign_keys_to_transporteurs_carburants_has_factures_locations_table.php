<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTransporteursCarburantsHasFacturesLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transporteurs_carburants_has_factures_locations', function (Blueprint $table) {
            $table->foreign('factures_locations_id', 'fk_transporteurs_carburants_has_factures_locations_factures_l1')->references('id')->on('factures_locations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('transporteurs_carburants_id', 'fk_transporteurs_carburants_has_factures_locations_transporte1')->references('id')->on('transporteurs_carburants')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transporteurs_carburants_has_factures_locations', function (Blueprint $table) {
            $table->dropForeign('fk_transporteurs_carburants_has_factures_locations_factures_l1');
            $table->dropForeign('fk_transporteurs_carburants_has_factures_locations_transporte1');
        });
    }
}
