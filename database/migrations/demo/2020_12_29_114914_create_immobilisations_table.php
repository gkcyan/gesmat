<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmobilisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobilisations', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('libelle');
            $table->string('marque', 45)->nullable();
            $table->string('matricule', 45)->nullable();
            $table->text('motif')->nullable();
            $table->string('statut_motif', 45)->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->string('responsable', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('entreprise_id')->nullable();
            $table->integer('agence_id')->nullable();
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
        Schema::dropIfExists('immobilisations');
    }
}
