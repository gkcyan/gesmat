<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('contrat', 45)->nullable();
            $table->date('date_embauche')->nullable();
            $table->string('matricule', 45)->nullable();
            $table->string('fonction', 45)->nullable();
            $table->string('niveau_scolaire', 45)->nullable();
            $table->string('exprtise')->nullable();
            $table->integer('garage_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
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
        Schema::dropIfExists('personnels');
    }
}
