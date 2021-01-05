<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCarteGriseGarageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carte_grise_garage', function (Blueprint $table) {
            $table->foreign('carte_grise_id', 'category_cartes_grises_foreign')->references('id')->on('cartes_grises')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('garage_id', 'category_garages_foreign')->references('id')->on('garages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carte_grise_garage', function (Blueprint $table) {
            $table->dropForeign('category_cartes_grises_foreign');
            $table->dropForeign('category_garages_foreign');
        });
    }
}
