<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporteursMaterielsSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporteurs_materiels_sites', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ref_contrat');
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('transporteur', 45)->nullable();
            $table->string('marque', 45)->nullable();
            $table->string('matricule', 45)->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('is_actif')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transporteurs_materiels_sites');
    }
}
