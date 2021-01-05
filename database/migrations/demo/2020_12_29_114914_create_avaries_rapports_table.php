<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvariesRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaries_rapports', function (Blueprint $table) {
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
            $table->string('avarie_expertise', 45)->nullable();
            $table->text('actions')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->text('observation')->nullable();
            $table->string('executant', 45)->nullable();
            $table->string('demandeur', 45)->nullable();
            $table->string('controleur', 45)->nullable();
            $table->integer('avaries_expertises_id')->index('fk_avaries_rapports_avaries_expertises1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaries_rapports');
    }
}
