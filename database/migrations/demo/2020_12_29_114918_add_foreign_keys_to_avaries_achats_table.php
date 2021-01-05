<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAvariesAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('avaries_achats', function (Blueprint $table) {
            $table->foreign('avaries_expertises_id', 'fk_requetes_copy1_avaries_expertises1')->references('id')->on('avaries_expertises')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avaries_achats', function (Blueprint $table) {
            $table->dropForeign('fk_requetes_copy1_avaries_expertises1');
        });
    }
}
