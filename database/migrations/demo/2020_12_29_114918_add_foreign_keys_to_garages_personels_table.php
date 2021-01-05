<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGaragesPersonelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('garages_personels', function (Blueprint $table) {
            $table->foreign('garage_id', 'garage_personel_garages_foreign')->references('id')->on('garages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('personnel_id', 'garage_personel_personnels_foreign')->references('id')->on('personnels')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('garages_personels', function (Blueprint $table) {
            $table->dropForeign('garage_personel_garages_foreign');
            $table->dropForeign('garage_personel_personnels_foreign');
        });
    }
}
