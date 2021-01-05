<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielsPrivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels_prives', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('matricule', 8);
            $table->string('marque')->nullable();
            $table->integer('charge_utile');
            $table->integer('poids_vide')->nullable();
            $table->integer('poids_tt_charge');
            $table->string('model')->nullable();
            $table->string('type')->nullable();
            $table->string('transporteur')->nullable();
            $table->string('observation')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
            $table->integer('is_actif')->nullable();
            $table->string('chauffeur')->nullable();
            $table->string('contact_chauff', 13)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiels_prives');
    }
}
