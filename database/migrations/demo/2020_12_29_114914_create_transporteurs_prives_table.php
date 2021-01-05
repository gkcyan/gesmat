<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporteursPrivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporteurs_prives', function (Blueprint $table) {
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
            $table->integer('is_actif')->nullable();
            $table->string('compte_contr', 45)->nullable();
            $table->string('registre_com', 45)->nullable();
            $table->string('sigle', 45)->nullable();
            $table->string('contact', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transporteurs_prives');
    }
}
