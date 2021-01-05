<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointagesLocationsHasFacturesLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointages_locations_has_factures_locations', function (Blueprint $table) {
            $table->integer('pointages_locations_id')->index('fk_pointages_locations_has_factures_locations_pointages_loc_idx');
            $table->integer('factures_locations_id')->index('fk_pointages_locations_has_factures_locations_factures_loca_idx');
            $table->primary(['pointages_locations_id', 'factures_locations_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointages_locations_has_factures_locations');
    }
}
