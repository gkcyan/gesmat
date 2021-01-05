<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPcesDetsOrganesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pces_dets_organes', function (Blueprint $table) {
            $table->foreign('pces_dets_composants_id', 'fk_pces_dets_organes_pces_dets_composants1')->references('id')->on('pces_dets_composants')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pces_dets_organes', function (Blueprint $table) {
            $table->dropForeign('fk_pces_dets_organes_pces_dets_composants1');
        });
    }
}
