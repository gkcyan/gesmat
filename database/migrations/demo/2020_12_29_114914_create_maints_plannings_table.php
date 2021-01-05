<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintsPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maints_plannings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
            $table->string('marque', 45)->nullable();
            $table->string('matricule', 45)->nullable();
            $table->string('objectif_prev', 45)->nullable();
            $table->date('debut_prev')->nullable();
            $table->date('fin_prev')->nullable();
            $table->string('origine_prev', 45)->nullable();
            $table->string('destination_prev', 45)->nullable();
            $table->string('executant', 45)->nullable();
            $table->string('demandeur', 45)->nullable();
            $table->string('controleur', 45)->nullable();
            $table->integer('maints_plannings_types_id')->index('fk_maints_plannings_maints_plannings_types1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maints_plannings');
    }
}
