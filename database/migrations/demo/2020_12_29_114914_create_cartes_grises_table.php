<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartesGrisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartes_grises', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('marque_model_id')->index('carte_grise_marques_models_index');
            $table->integer('materiel_type_id')->index('carte_grise_materiels_types_index');
            $table->integer('materiel_marque_id')->index('carte_grise_materiels_marques_index');
            $table->integer('materiel_usage_id')->index('cartes_grises_materiel_usage_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartes_grises');
    }
}
