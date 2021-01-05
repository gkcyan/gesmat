<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvariesConstatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaries_constats', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('marque', 45)->nullable();
            $table->string('matricule', 45)->nullable();
            $table->string('compteur', 45)->nullable();
            $table->string('niveau_carb', 45)->nullable();
            $table->text('declaration')->nullable();
            $table->string('ref_planning', 45)->nullable();
            $table->string('declarant', 45)->nullable();
            $table->string('libelle')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
            $table->string('statut', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaries_constats');
    }
}
