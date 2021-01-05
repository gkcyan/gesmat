<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporteursCarburantsHasFacturesLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporteurs_carburants_has_factures_locations', function (Blueprint $table) {
            $table->integer('transporteurs_carburants_id')->index('fk_transporteurs_carburants_has_factures_locations_transpor_idx');
            $table->integer('factures_locations_id')->index('fk_transporteurs_carburants_has_factures_locations_factures_idx');
            $table->primary(['transporteurs_carburants_id', 'factures_locations_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transporteurs_carburants_has_factures_locations');
    }
}
