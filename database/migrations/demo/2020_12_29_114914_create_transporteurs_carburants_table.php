<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporteursCarburantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporteurs_carburants', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ref');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
            $table->date('date')->nullable();
            $table->integer('quantite')->nullable();
            $table->string('produit', 45)->nullable();
            $table->string('marque')->nullable();
            $table->string('matricule', 8)->nullable();
            $table->string('transporteurs', 45)->nullable();
            $table->string('petrolier', 45)->nullable();
            $table->string('station', 45)->nullable();
            $table->string('activite', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transporteurs_carburants');
    }
}
