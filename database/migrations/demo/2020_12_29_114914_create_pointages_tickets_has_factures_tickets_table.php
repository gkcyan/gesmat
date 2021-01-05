<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointagesTicketsHasFacturesTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointages_tickets_has_factures_tickets', function (Blueprint $table) {
            $table->integer('pointages_tickets_id')->index('fk_pointages_tickets_has_factures_tickets_pointages_tickets_idx');
            $table->integer('factures_tickets_id')->index('fk_pointages_tickets_has_factures_tickets_factures_tickets1_idx');
            $table->primary(['pointages_tickets_id', 'factures_tickets_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointages_tickets_has_factures_tickets');
    }
}
