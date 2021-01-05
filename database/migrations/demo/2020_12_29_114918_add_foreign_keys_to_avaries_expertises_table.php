<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAvariesExpertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('avaries_expertises', function (Blueprint $table) {
            $table->foreign('avaries_constats_id', 'fk_avaries_expertises_avaries_constats1')->references('id')->on('avaries_constats')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avaries_expertises', function (Blueprint $table) {
            $table->dropForeign('fk_avaries_expertises_avaries_constats1');
        });
    }
}
