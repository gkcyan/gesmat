<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFacturesTicketsHasTransporteursCarburantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factures_tickets_has_transporteurs_carburants', function (Blueprint $table) {
            $table->foreign('factures_tickets_id', 'fk_factures_tickets_has_transporteurs_carburants_factures_tic1')->references('id')->on('factures_tickets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('transporteurs_carburants_id', 'fk_factures_tickets_has_transporteurs_carburants_transporteur1')->references('id')->on('transporteurs_carburants')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factures_tickets_has_transporteurs_carburants', function (Blueprint $table) {
            $table->dropForeign('fk_factures_tickets_has_transporteurs_carburants_factures_tic1');
            $table->dropForeign('fk_factures_tickets_has_transporteurs_carburants_transporteur1');
        });
    }
}
