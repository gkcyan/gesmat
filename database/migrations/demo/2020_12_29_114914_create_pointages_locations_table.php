<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointagesLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointages_locations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('autor_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('autor_level')->nullable();
            $table->integer('garage_id')->nullable();
            $table->date('date')->nullable();
            $table->string('marque')->nullable();
            $table->string('matricule', 45)->nullable();
            $table->string('transporteur')->nullable();
            $table->string('activite')->nullable();
            $table->string('heure_debut', 45)->nullable();
            $table->string('heure_fin', 45)->nullable();
            $table->text('observation')->nullable();
            $table->integer('validation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointages_locations');
    }
}
