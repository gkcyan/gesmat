<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationsActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestations_activites', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle')->unique('libelle_UNIQUE');
            $table->text('description')->nullable();
            $table->text('prerequis')->nullable();
            $table->string('cout_mo', 45)->nullable();
            $table->integer('garage_prestation_id')->index('prestations_activites_garages_prestations_index');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('autor_level')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestations_activites');
    }
}
