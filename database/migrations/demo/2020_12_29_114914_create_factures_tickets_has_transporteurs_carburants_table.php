<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTicketsHasTransporteursCarburantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures_tickets_has_transporteurs_carburants', function (Blueprint $table) {
            $table->integer('factures_tickets_id')->index('fk_factures_tickets_has_transporteurs_carburants_factures_t_idx');
            $table->integer('transporteurs_carburants_id')->index('fk_factures_tickets_has_transporteurs_carburants_transporte_idx');
            $table->primary(['factures_tickets_id', 'transporteurs_carburants_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures_tickets_has_transporteurs_carburants');
    }
}
