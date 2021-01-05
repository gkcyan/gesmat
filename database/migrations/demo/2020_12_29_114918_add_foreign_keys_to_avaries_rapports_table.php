<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAvariesRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('avaries_rapports', function (Blueprint $table) {
            $table->foreign('avaries_expertises_id', 'fk_avaries_rapports_avaries_expertises1')->references('id')->on('avaries_expertises')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avaries_rapports', function (Blueprint $table) {
            $table->dropForeign('fk_avaries_rapports_avaries_expertises1');
        });
    }
}
