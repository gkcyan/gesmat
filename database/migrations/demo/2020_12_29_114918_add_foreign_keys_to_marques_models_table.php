<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMarquesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marques_models', function (Blueprint $table) {
            $table->foreign('materiel_marque_id', 'marques_models_materiels_marques_foreign')->references('id')->on('materiels_marques')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('materiel_type_id', 'marques_models_materiels_types_foreign')->references('id')->on('materiels_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marques_models', function (Blueprint $table) {
            $table->dropForeign('marques_models_materiels_marques_foreign');
            $table->dropForeign('marques_models_materiels_types_foreign');
        });
    }
}
