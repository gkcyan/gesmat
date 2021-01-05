<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCartesGrisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cartes_grises', function (Blueprint $table) {
            $table->foreign('marque_model_id', 'carte_grise_marques_models_foreign')->references('id')->on('marques_models')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('materiel_marque_id', 'carte_grise_materiels_marques_foreign')->references('id')->on('materiels_marques')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('materiel_type_id', 'carte_grise_materiels_types_foreign')->references('id')->on('materiels_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('materiel_usage_id', 'cartes_grises_materiel_usage_foreign')->references('id')->on('materiels_usages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartes_grises', function (Blueprint $table) {
            $table->dropForeign('carte_grise_marques_models_foreign');
            $table->dropForeign('carte_grise_materiels_marques_foreign');
            $table->dropForeign('carte_grise_materiels_types_foreign');
            $table->dropForeign('cartes_grises_materiel_usage_foreign');
        });
    }
}
