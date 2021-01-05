<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvariesExpertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaries_expertises', function (Blueprint $table) {
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
            $table->string('categorie', 45)->nullable();
            $table->string('composant', 45)->nullable();
            $table->string('organe', 45)->nullable();
            $table->string('piece_det', 45)->nullable();
            $table->text('observation')->nullable();
            $table->string('action', 45)->nullable();
            $table->integer('avaries_constats_id')->index('fk_avaries_expertises_avaries_constats1_idx');
            $table->string('agent_expert', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaries_expertises');
    }
}
